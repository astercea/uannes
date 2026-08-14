<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['account_edit'] = $this->url->link('account/edit', '', true);
		$data['account_password'] = $this->url->link('account/password', '', true);
		$data['account_address'] = $this->url->link('account/address', '', true);
		$data['account_newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['customer_name'] = $this->customer->isLogged() ? $this->customer->getFirstName() : '';
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');

		// Popüler Arama Önerileri (En çok satan / en çok ziyaret edilen 4 popüler ürün)
		$this->load->model('catalog/product');
		$data['search_suggestions'] = array();
		$suggested_products = array();

		// 1. En çok satanları al
		$bestsellers = $this->model_catalog_product->getBestSellerProducts(4);
		if ($bestsellers) {
			foreach ($bestsellers as $b_prod) {
				if ($b_prod && !empty($b_prod['product_id']) && !isset($suggested_products[$b_prod['product_id']])) {
					$suggested_products[$b_prod['product_id']] = $b_prod;
				}
			}
		}

		// 2. 4'ten azsa en çok görüntülenen (popüler) ürünlerle tamamla
		if (count($suggested_products) < 4) {
			$populars = $this->model_catalog_product->getPopularProducts(4);
			if ($populars) {
				foreach ($populars as $p_prod) {
					if ($p_prod && !empty($p_prod['product_id']) && !isset($suggested_products[$p_prod['product_id']])) {
						$suggested_products[$p_prod['product_id']] = $p_prod;
						if (count($suggested_products) >= 4) {
							break;
						}
					}
				}
			}
		}

		// 3. Hala 4'ten azsa en son eklenen aktif ürünlerle tamamla
		if (count($suggested_products) < 4) {
			$latests = $this->model_catalog_product->getLatestProducts(4);
			if ($latests) {
				foreach ($latests as $l_prod) {
					if ($l_prod && !empty($l_prod['product_id']) && !isset($suggested_products[$l_prod['product_id']])) {
						$suggested_products[$l_prod['product_id']] = $l_prod;
						if (count($suggested_products) >= 4) {
							break;
						}
					}
				}
			}
		}

		foreach ($suggested_products as $prod) {
			$data['search_suggestions'][] = array(
				'product_id'  => $prod['product_id'],
				'name'        => $prod['name'],
				'href'        => $this->url->link('product/product', 'product_id=' . $prod['product_id']),
				'search_href' => $this->url->link('product/search', 'search=' . urlencode($prod['name']))
			);
		}
		if (isset($this->request->get['route'])) {
			$data['route'] = (string)$this->request->get['route'];
		} else {
			$data['route'] = 'common/home';
		}

		$data['is_checkout'] = ($data['route'] == 'checkout/checkout');

		return $this->load->view('common/header', $data);
	}
}
