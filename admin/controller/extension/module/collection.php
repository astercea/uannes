<?php
class ControllerExtensionModuleCollection extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/collection');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_collection', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');

        $data['entry_status'] = $this->language->get('entry_status');
        $data['entry_sort_order'] = $this->language->get('entry_sort_order');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        if (isset($this->request->post['module_collection_status'])) {
            $data['module_collection_status'] = $this->request->post['module_collection_status'];
        } else {
            $data['module_collection_status'] = $this->config->get('module_collection_status');
        }

        if (isset($this->request->post['module_collection_sort_order'])) {
            $data['module_collection_sort_order'] = $this->request->post['module_collection_sort_order'];
        } else {
            $data['module_collection_sort_order'] = $this->config->get('module_collection_sort_order');
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/collection', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/collection')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        return !$this->error;
    }
}
