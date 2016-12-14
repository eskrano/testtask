<?php

namespace Eskrano\Testtask\Converters;

use SimpleXMLElement;
use Eskrano\Testtask\Contracts\ConverterContract;

class XMLConverter implements ConverterContract
{
    /**
     * @inheritDoc
     */
    public function convert($input)
    {
        $el = new SimpleXMLElement('<root />');


        return $this->arrayToXml($input,$el)->asXML();
    }

    private function arrayToXml(array $data, SimpleXMLElement $xml)
    {
        foreach ($data as $k => $v) {
            is_array($v)
                ? $this->arrayToXml($v, $xml->addChild($k))
                : $xml->addChild($k, $v);
        }
        return $xml;
    }
}