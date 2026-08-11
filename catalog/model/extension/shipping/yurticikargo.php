<?php
class ModelExtensionShippingYurticikargo extends Model {
    public function getQuote($address) {
        $this->load->language('extension/shipping/yurticikargo');

        $cost = 49.90;
        $title = 'Yurtiçi Kargo';

        $quote_data['yurticikargo'] = [
            'code'         => 'yurticikargo.yurticikargo',
            'title'        => $title,
            'cost'         => $cost,
            'tax_class_id' => 0,
            'text'         => $this->currency->format($cost, $this->session->data['currency'])
        ];

        return [
            'code'       => 'yurticikargo',
            'title'      => $title,
            'quote'      => $quote_data,
            'sort_order' => $this->config->get('shipping_yurticikargo_sort_order'),
            'error'      => false
        ];
    }
}
