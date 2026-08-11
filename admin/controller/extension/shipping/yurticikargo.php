<?php
class ControllerExtensionShippingYurticikargo extends Controller
{
    private $error = [];

    public function index()
    {
        $this->load->language('extension/shipping/yurticikargo');
        $this->document->setTitle('Yurtiçi Kargo Ayarları');
        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

            // 🔹 Ortama göre API URL belirle
            $mode = $this->request->post['shipping_yurticikargo_mode'] ?? 'test';
            $dry_run = (int)($this->request->post['shipping_yurticikargo_dry_run'] ?? 1);

            if ($mode === 'test') {
                $this->request->post['shipping_yurticikargo_api_url'] = 'http://testwebservices.yurticikargo.com:9090/KOPSWebServices/AwbServices?wsdl';
            } else {
                $this->request->post['shipping_yurticikargo_api_url'] = 'http://webservices.yurticikargo.com:8080/KOPSWebServices/AwbServices?wsdl';
            }

            // 🔹 Ayarları kaydet
            $this->model_setting_setting->editSetting('shipping_yurticikargo', $this->request->post);

            // 🔹 Test modunda tüm testler, canlıda sadece bağlantı testi
            if ($mode === 'test') {
                $this->testApiConnection(
                    $this->request->post['shipping_yurticikargo_username'],
                    $this->request->post['shipping_yurticikargo_password'],
                    $this->request->post['shipping_yurticikargo_api_url']
                );

                $this->testCreateAwb(
                    $this->request->post['shipping_yurticikargo_username'],
                    $this->request->post['shipping_yurticikargo_password'],
                    $this->request->post['shipping_yurticikargo_customer'],
                    $this->request->post['shipping_yurticikargo_branch']
                );
            } else {
                // canlıda sadece bağlantı testi yapılır
                $this->testApiConnection(
                    $this->request->post['shipping_yurticikargo_username'],
                    $this->request->post['shipping_yurticikargo_password'],
                    $this->request->post['shipping_yurticikargo_api_url']
                );
            }

            $this->session->data['success'] = 'Yurtiçi Kargo ayarları kaydedildi!';
            $this->response->redirect(
                $this->url->link('marketplace/extension', 'type=shipping&user_token=' . $this->session->data['user_token'], true)
            );
        }

        // 🔹 Ayar alanlarını hazırla
        $fields = [
            'shipping_yurticikargo_mode',
            'shipping_yurticikargo_dry_run',
            'shipping_yurticikargo_username',
            'shipping_yurticikargo_password',
            'shipping_yurticikargo_customer',
            'shipping_yurticikargo_branch',
            'shipping_yurticikargo_api_url',
            'shipping_yurticikargo_payment_type',
            'shipping_yurticikargo_status',
            'shipping_yurticikargo_geo_zone_id',
            'shipping_yurticikargo_sort_order'
        ];

        foreach ($fields as $field) {
            $data[$field] = $this->request->post[$field] ?? $this->config->get($field);
        }

        $this->load->model('localisation/geo_zone');
        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

        $data['action'] = $this->url->link('extension/shipping/yurticikargo', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'type=shipping&user_token=' . $this->session->data['user_token'], true);
        $data['heading_title'] = 'Yurtiçi Kargo Ayarları';

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/shipping/yurticikargo', $data));
    }

    // ✅ API bağlantı testi
    private function testApiConnection($username, $password, $api_url)
    {
        $log_file = DIR_LOGS . 'yurticikargo_debug.log';
        file_put_contents($log_file, "🔹 API TEST BAŞLADI: " . date('Y-m-d H:i:s') . PHP_EOL, FILE_APPEND);

        try {
            $client = new SoapClient($api_url, [
                'trace' => 1,
                'exceptions' => true,
                'cache_wsdl' => WSDL_CACHE_NONE
            ]);
            $functions = $client->__getFunctions();
            file_put_contents($log_file, "✅ API TEST BAŞARILI! Fonksiyonlar: " . print_r($functions, true) . PHP_EOL, FILE_APPEND);
        } catch (Exception $e) {
            file_put_contents($log_file, "❌ API TEST HATASI: " . $e->getMessage() . PHP_EOL, FILE_APPEND);
        }
    }

    // ✅ Test Create AWB (sadece test modunda)
    private function testCreateAwb($username, $password, $customer_code, $branch_code)
    {
        $api_url = $this->config->get('shipping_yurticikargo_api_url');
        $log_file = DIR_LOGS . 'yurticikargo_debug.log';
        file_put_contents($log_file, "\n🚚 CREATE AWB TEST BAŞLADI: " . date('Y-m-d H:i:s') . PHP_EOL, FILE_APPEND);

        try {
            $client = new SoapClient($api_url, [
                'trace' => 1,
                'exceptions' => true,
                'cache_wsdl' => WSDL_CACHE_NONE
            ]);

            $senderVO = [
                'customerCode' => $customer_code,
                'branchCode'   => $branch_code,
                'name'         => 'UANNES TEST MAĞAZASI',
                'address'      => 'İstanbul Kadıköy Deneme Adresi',
                'cityName'     => 'İSTANBUL',
                'townName'     => 'KADIKÖY',
                'phoneNumber'  => '02121234567'
            ];

            $consigneeVO = [
                'name'        => 'Ahmet Yılmaz',
                'address'     => 'Atatürk Cad. No:15 Daire:2',
                'cityName'    => 'İSTANBUL',
                'townName'    => 'KADIKÖY',
                'phoneNumber' => '05055555555'
            ];

            $awbVO = [
                'cargoKey'          => 'TEST-' . uniqid(),
                'invoiceKey'        => 'INV-' . uniqid(),
                'docCargoType'      => 0,
                'ttInvoiceAmount'   => 100,
                'ttCollectionType'  => 0,
                'senderCustId'      => $customer_code,
                'payerCustId'       => $customer_code,
                'senderVO'          => $senderVO,
                'consigneeVO'       => $consigneeVO,
                'awbParcelParamsVO' => [
                    'cargoCount' => 1,
                    'desi'       => 1,
                    'weight'     => 0.5
                ]
            ];

            $params = [
                'userName'     => $username,
                'password'     => $password,
                'userLanguage' => 'TR',
                'awbVO'        => $awbVO
            ];

            $result = $client->__soapCall('createAwb', [$params]);
            file_put_contents($log_file, "✅ CREATE AWB TEST YANITI: " . print_r($result, true) . PHP_EOL, FILE_APPEND);

        } catch (Exception $e) {
            file_put_contents($log_file, "❌ CREATE AWB HATASI: " . $e->getMessage() . PHP_EOL, FILE_APPEND);
        }
    }

    // ✅ Manuel DRY-RUN test (canlıda gerçek gönderim yapmadan simülasyon)
    public function createAwbDryRun()
    {
        if (!$this->user->hasPermission('modify', 'extension/shipping/yurticikargo')) {
            $this->response->redirect($this->url->link('marketplace/extension', 'type=shipping&user_token=' . $this->session->data['user_token'], true));
            return;
        }

        $mode = $this->config->get('shipping_yurticikargo_mode') ?? 'live';
        $dry_run = (int)($this->config->get('shipping_yurticikargo_dry_run') ?? 1);
        $username = $this->config->get('shipping_yurticikargo_username');
        $password = $this->config->get('shipping_yurticikargo_password');
        $customer = $this->config->get('shipping_yurticikargo_customer');
        $branch = $this->config->get('shipping_yurticikargo_branch');
        $order_id = (int)($this->request->get['order_id'] ?? 0);

        $log_file = DIR_LOGS . 'yurticikargo_debug.log';
        file_put_contents($log_file, "\n--- MANUAL DRY-RUN START: " . date('Y-m-d H:i:s') . " (mode={$mode}, dry_run={$dry_run}) ---\n", FILE_APPEND);

        $senderVO = [
            'customerCode' => $customer,
            'branchCode'   => $branch,
            'name'         => 'FİRMA TEST',
            'address'      => 'Test Mah. Deneme Cad. No:1',
            'cityName'     => 'İSTANBUL',
            'townName'     => 'KADIKÖY',
            'phoneNumber'  => '02121234567'
        ];

        $consigneeVO = [
            'name'        => 'Alıcı Test',
            'address'     => 'Alıcı Cad. No:1',
            'cityName'    => 'İSTANBUL',
            'townName'    => 'KADIKÖY',
            'phoneNumber' => '05000000000'
        ];

        $awbVO = [
            'cargoKey'          => 'DRY-' . uniqid(),
            'invoiceKey'        => 'DRYINV-' . uniqid(),
            'docCargoType'      => 0,
            'ttInvoiceAmount'   => 1,
            'ttCollectionType'  => 0,
            'senderCustId'      => $customer,
            'payerCustId'       => $customer,
            'senderVO'          => $senderVO,
            'consigneeVO'       => $consigneeVO,
            'awbParcelParamsVO' => ['cargoCount' => 1, 'desi' => 1, 'weight' => 0.5]
        ];

        if ($dry_run) {
            $fake = [
                'AwbV2ResponseVO' => [
                    'returnStatus'  => 0,
                    'errCode'       => 0,
                    'returnMessage' => 'DRY RUN: Simule edildi (no real call)',
                    'cargoKey'      => $awbVO['cargoKey'],
                    'jobId'         => 'DRYJOB' . rand(100000, 999999)
                ]
            ];
            file_put_contents($log_file, date('Y-m-d H:i:s') . " DRY CREATE AWB: " . print_r($fake, true) . PHP_EOL, FILE_APPEND);

            $this->db->query("INSERT INTO oc_yurticikargo_awb SET order_id = '".(int)$order_id."', request_payload = '".$this->db->escape(json_encode($awbVO))."', response_payload = '".$this->db->escape(json_encode($fake))."', cargo_key = '".$this->db->escape($awbVO['cargoKey'])."', job_id = '".$this->db->escape($fake['AwbV2ResponseVO']['jobId'])."', err_code = 0, err_message = 'DRY RUN', mode = '".$this->db->escape($mode)."'");

            $this->session->data['success'] = 'DRY RUN tamamlandı, simüle edildi (cargoKey: ' . $awbVO['cargoKey'] . ')';
            $this->response->redirect($this->url->link('sale/order/info', 'user_token=' . $this->session->data['user_token'] . '&order_id=' . $order_id, true));
            return;
        }

        // dry_run kapalıysa burada gerçek createAwb çağrısı yapılabilir
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/shipping/yurticikargo')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        return !$this->error;
    }
}
