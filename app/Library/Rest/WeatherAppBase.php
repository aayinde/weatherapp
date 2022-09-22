<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace App\Library\Rest;

/**
 * @author aaliyu
 */
abstract class WeatherAppBase
{
    /**
     * @var string
     */
    private ?string $apiKey = null;

    /**
     * @var string
     */
    private ?string $apiUrl = null;

    /**
     * @var string
     */
    private ?string $apiHost = null;

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * @return string
     */
    public function getApiHost()
    {
        return $this->apiHost;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey) : self
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @param string $apiUrl
     */
    public function setApiUrl($apiUrl) : self
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * @param string $apiHost
     */
    public function setApiHost($apiHost) : self
    {
        $this->apiHost = $apiHost;
        return $this;
    }
}
