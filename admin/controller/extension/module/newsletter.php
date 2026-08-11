<?php
class ControllerExtensionModuleNewsletter extends Controller {
    private $error = [];

    public function index() {
        $this->load->language('extension/module/newsletter');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_newsletter', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard','user_token=' . $this->session->data['user_token'], true)
        ];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension','user_token=' . $this->session->data['user_token'] . '&type=module', true)
        ];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/newsletter','user_token=' . $this->session->data['user_token'], true)
        ];

        $data['action'] = $this->url->link('extension/module/newsletter','user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('marketplace/extension','user_token=' . $this->session->data['user_token'] . '&type=module', true);
        $data['list']   = $this->url->link('extension/module/newsletter/list','user_token=' . $this->session->data['user_token'], true);
        

        $fields = [
            'module_newsletter_status' => 1,
            'module_newsletter_double_opt' => 0,
            'module_newsletter_show_name' => 0,
            'module_newsletter_require_gdpr' => 0,
            'module_newsletter_success_text' => 'Bülten aboneliği başarıyla oluşturuldu.'
        ];
        foreach ($fields as $key => $default) {
            $data[$key] = $this->request->post[$key] ?? ($this->config->get($key) ?? $default);
        }

        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/newsletter', $data));
    }

    public function list() {
        $this->load->language('extension/module/newsletter');
        $this->document->setTitle('Bülten Aboneleri');
        $this->load->model('extension/module/newsletter');

        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        ];
        $data['breadcrumbs'][] = [
            'text' => 'Bülten Aboneleri',
            'href' => $this->url->link('extension/module/newsletter/list', 'user_token=' . $this->session->data['user_token'], true)
        ];
        $data['delete'] = $this->url->link('extension/module/newsletter/delete', 'user_token=' . $this->session->data['user_token'], true);
        $data['delete_one'] = $this->url->link('extension/module/newsletter/deleteOne', 'user_token=' . $this->session->data['user_token'], true);


        $data['subscribers'] = $this->model_extension_module_newsletter->getSubscribers();
        $data['total_subscribers'] = count($data['subscribers']);
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/newsletter_list', $data));
    }

    public function install() {
        $this->load->model('extension/module/newsletter');
        $this->model_extension_module_newsletter->install();
    }

    public function uninstall() {
        $this->load->model('extension/module/newsletter');
        $this->model_extension_module_newsletter->uninstall();
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/newsletter')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        return !$this->error;
    }
    

    public function delete() {
    $this->load->model('extension/module/newsletter');

    if (isset($this->request->post['selected'])) {
        foreach ($this->request->post['selected'] as $subscriber_id) {
            $this->model_extension_module_newsletter->deleteSubscriber($subscriber_id);
        }
        $this->session->data['success'] = 'Seçilen aboneler silindi!';
    }

    $this->response->redirect($this->url->link('extension/module/newsletter/list', 'user_token=' . $this->session->data['user_token'], true));
}

public function deleteOne() {
    $this->load->model('extension/module/newsletter');

    if (isset($this->request->get['subscriber_id'])) {
        $this->model_extension_module_newsletter->deleteSubscriber((int)$this->request->get['subscriber_id']);
        $this->session->data['success'] = 'Abone silindi!';
    }

    $this->response->redirect($this->url->link('extension/module/newsletter/list', 'user_token=' . $this->session->data['user_token'], true));
}
    
}
