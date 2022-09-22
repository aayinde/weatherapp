<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Library\Rest;

use Curl\Curl as PhpCurl;

final class OpenWeatherApi extends WeatherAppBase
{
    private string $currentCountry = 'landon';

    private mixed $finalReponses;

    private PhpCurl $objCurl;

    /**
     * @param string $api_key
     * @param string $api_host
     * @param string $api_url
     */
    public function __construct(string $api_key = null, string $api_host = null, string $api_url = null)
    {
        $this->setApi_key($api_key)
            ->setApi_host($api_host)
            ->setApi_url($api_url);
        $this->objCurl = new PhpCurl();
    }

    private function prepareData() : void
    {
        $this->setApi_host('open-weather13.p.rapidapi.cfom');
        $this->setApi_key('647c0a89bdmsh9bf74b25404334cp17c32ajsn88bb16af812d');
        $this->setApi_url('https://open-weather13.p.rapidapi.com/city/');
        $this->objCurl->setHeader('X-RapidAPI-Host', $this->getApi_host());
        $this->objCurl->setHeader('X-RapidAPI-Key', $this->getApi_key());
    }

    private function init() : void
    {
        $this->prepareData();
        $this->objCurl->get($this->getApi_url() . $this->getCurrentCountry());
    }

    /**
     * @return string
     */
    public function getCurrentCountry()
    {
        return $this->currentCountry;
    }

    /**
     * @param string $currentCountry
     */
    public function setCurrentCountry($currentCountry) : self
    {
        $this->currentCountry = $currentCountry;
        return $this;
    }

    /**
     * @return mixed
     */
    public function result()
    {
        $this->init();
        $this->finalReponses = $this->objCurl->response;
        return $this->finalReponses;
    }
}
