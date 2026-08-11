<?php
class ControllerExtensionModuleNewsletter extends Controller {
    public function index() {
        $this->load->language('extension/module/newsletter');

        $data['show_name']   = (int)$this->config->get('module_newsletter_show_name');
        $data['require_gdpr']= (int)$this->config->get('module_newsletter_require_gdpr');

        // Form action (AJAX da kullanmayanlar için)
        $data['subscribe_action'] = $this->url->link('extension/module/newsletter/subscribe', '', true);

        return $this->load->view('extension/module/newsletter', $data);
    }

    public function subscribe() {
        $this->response->addHeader('Content-Type: application/json');

        if (!$this->config->get('module_newsletter_status')) {
            $this->response->setOutput(json_encode(['status'=>'error','message'=>'Modül devre dışı.']));
            return;
        }

        $this->load->language('extension/module/newsletter');
        $json = [];

        $email = isset($this->request->post['email']) ? trim($this->request->post['email']) : '';
        $firstname = isset($this->request->post['firstname']) ? trim($this->request->post['firstname']) : '';
        $lastname  = isset($this->request->post['lastname']) ? trim($this->request->post['lastname']) : '';
        $agree     = isset($this->request->post['agree']) ? (int)$this->request->post['agree'] : 0;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $json = ['status'=>'error','message'=>$this->language->get('error_email')];
            $this->response->setOutput(json_encode($json)); return;
        }

        if ($this->config->get('module_newsletter_require_gdpr') && !$agree) {
            $json = ['status'=>'error','message'=>$this->language->get('error_agree')];
            $this->response->setOutput(json_encode($json)); return;
        }

        $this->load->model('extension/module/newsletter');
        $exists = $this->model_extension_module_newsletter->getByEmail($email);
        if ($exists) {
            if ((int)$exists['status'] === 1) {
                $json = ['status'=>'info','message'=>$this->language->get('text_already')];
                $this->response->setOutput(json_encode($json)); return;
            } else {
                // pasifse tekrar token üretilebilir
                $token = bin2hex(random_bytes(16));
                $this->db->query("UPDATE `" . DB_PREFIX . "newsletter_subscriber` SET token='" . $this->db->escape($token) . "' WHERE subscriber_id=".(int)$exists['subscriber_id']);
                $json = ['status'=>'success','message'=>$this->language->get('text_pending')];
                $this->response->setOutput(json_encode($json)); return;
            }
        }

        $double_opt = (int)$this->config->get('module_newsletter_double_opt');
        $token = $double_opt ? bin2hex(random_bytes(16)) : null;
        $status = $double_opt ? 0 : 1;

        $this->model_extension_module_newsletter->addSubscriber([
            'email' => $email,
            'firstname' => $firstname,
            'lastname'  => $lastname,
            'status'    => $status,
            'token'     => $token
        ]);

        if ($double_opt && $token) {
            // basit onay linki (mail ayarlıysa çalışır)
            $confirm_link = $this->url->link('extension/module/newsletter/confirm', 'token=' . $token, true);
            // Mail opsiyonel – sunucu ayarlı değilse sessiz geçer
            try {
                $subject = $this->language->get('mail_subject');
                $message = sprintf($this->language->get('mail_body'), $confirm_link);
                $mail = new Mail($this->config->get('config_mail_engine'));
                $mail->parameter = $this->config->get('config_mail_parameter');
                $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
                $mail->smtp_username = $this->config->get('config_mail_smtp_username');
                $mail->smtp_password = $this->config->get('config_mail_smtp_password');
                $mail->smtp_port     = $this->config->get('config_mail_smtp_port');
                $mail->smtp_timeout  = $this->config->get('config_mail_smtp_timeout');
                $mail->setTo($email);
                $mail->setFrom($this->config->get('config_email'));
                $mail->setSender($this->config->get('config_name'));
                $mail->setSubject($subject);
                $mail->setText(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
                $mail->send();
            } catch (\Exception $e) { /* no-op */ }
        }

        $success_text = $this->config->get('module_newsletter_success_text') ?: $this->language->get('text_success');
        $json = ['status'=>'success','message'=>$success_text];
        $this->response->setOutput(json_encode($json));
    }

    public function confirm() {
        $this->load->language('extension/module/newsletter');
        $this->load->model('extension/module/newsletter');

        $token = isset($this->request->get['token']) ? $this->request->get['token'] : '';
        $data['message'] = $this->language->get('text_confirm_fail');

        if ($token) {
            if ($this->model_extension_module_newsletter->activateByToken($token)) {
                $data['message'] = $this->language->get('text_confirm_ok');
            }
        }

        $data['continue'] = $this->url->link('common/home');
        $this->response->setOutput($this->load->view('common/success', $data));
    }
}
