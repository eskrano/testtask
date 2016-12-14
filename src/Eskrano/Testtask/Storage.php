<?php

namespace Eskrano\Testtask;

use Eskrano\Testtask\Contracts\ConverterContract;
use Eskrano\Testtask\Contracts\StorageContract;

class Storage implements StorageContract
{

    /**
     * @var ConverterContract
     */
    private $converter;

    /**
     * @var string
     */
    private $save_path = __DIR__ . '/../../../result.txt';

    public function __construct(ConverterContract $converter)
    {
        $this->converter = new $converter;
    }

    /**
     * @param array $data
     */
    public function save($data)
    {
        $converted = $this->getConverter()->convert($data);

        _log($converted);

        return $this->saveAsFile($converted, $this->getSavePath());
    }

    /**
     * @return ConverterContract
     */
    public function getConverter()
    {
        return $this->converter;
    }

    /**
     * @param ConverterContract $converter
     * @return $this
     */
    public function setConverter(ConverterContract $converter)
    {
        $this->converter = new $converter;

        return $this;
    }

    /**
     * @return string
     */
    public function getSavePath()
    {
        return $this->save_path;
    }

    /**
     * @param $path
     * @return $this
     */
    public function setSavePath($path)
    {
        $this->save_path = $path;

        return $this;
    }

    /**
     * @param $converted_string
     *
     * @return void
     */
    protected function saveAsFile($converted_string)
    {
        file_put_contents($this->getSavePath(),$converted_string);
    }

}