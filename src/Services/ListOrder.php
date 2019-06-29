<?php
namespace App\Services;

class ListOrder
{
    private $linkApi;

    public function __construct(string $linkApi)
    {
        $this->linkApi = $linkApi;
    }

    public function getOrders(): array
    {
        $orders = $this->convert(file_get_contents($this->linkApi));

        return $orders['orders']['order'];
    }

    private function convert($resultXml): array
    {
        $xml = simplexml_load_string($resultXml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);

        return json_decode($json, true);
    }
}
