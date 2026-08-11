<?php
class ControllerExtensionModuleUannesStory extends Controller {
	public function index($setting) {
		$this->load->model('extension/module/landing_page');

		$data['story_href'] = $this->model_extension_module_landing_page->getBrandStoryInformationUrl();

		return $this->load->view('extension/module/uannes_story', $data);
	}
}
