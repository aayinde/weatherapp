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
     * @param string $apiKey
     * @param string $apiHost
     * @param string $apiUrl
     */
    public function __construct(string $apiKey = null, string $apiHost = null, string $apiUrl = null)
    {
        $this->setApiKey($apiKey)
        ->setApiHost($apiHost)
        ->setApiUrl($apiUrl);
        $this->objCurl = new PhpCurl();
    }

    private function prepareData() : void
    {
        $this->setApiHost('open-weather13.p.rapidapi.cfom');
        $this->setApiKey('647c0a89bdmsh9bf74b25404334cp17c32ajsn88bb16af812d');
        $this->setApiUrl('https://open-weather13.p.rapidapi.com/city/');
        $this->objCurl->setHeader('X-RapidAPI-Host', $this->getApiHost());
        $this->objCurl->setHeader('X-RapidAPI-Key', $this->getApiKey());
    }

    private function init() : void
    {
        $this->prepareData();
        $this->objCurl->get($this->getApiUrl() . $this->getCurrentCountry());
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
