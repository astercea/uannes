<?php

namespace Param\PhpSdk\Features\PosOranlari;

use Param\PhpSdk\Features\Config;
use Param\PhpSdk\Features\PosOranlari\TP_Ozel_Oran_SK_Liste;
use SoapClient;

class PosOranlari extends TP_Ozel_Oran_SK_Liste
{
    public function send()
    {
        try {
            $config = Config::getInstance();
            $client = new SoapClient($config->URL);
            $response = $client->TP_Ozel_Oran_SK_Liste($this);
            $q1 = $response->TP_Ozel_Oran_SK_ListeResult;
            $DT_Bilgi = $q1->{'DT_Bilgi'};
            $xml = $DT_Bilgi->{'any'};
            $xmlStr = '<?xml version=\'1.0\' standalone=\'yes\'?><root>' . $xml . '</root>';
            $xmlStr = str_replace(array("diffgr:", "msdata:"), '', $xmlStr);
            $data = @simplexml_load_string($xmlStr);
            $list = $data->diffgram->NewDataSet;

            if (!empty($this->SanalPOS_ID)) {
                foreach ($list->DT_Ozel_Oranlar_SK as $item) {
                    if ((int) $item->SanalPOS_ID == $this->SanalPOS_ID) {
                        return $item;
                    }
                }
            }
            return $list;

        } catch (\Exception $e) {
            return "General Error" . $e;
        }
    }
}