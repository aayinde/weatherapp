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
    private ?string $api_key = null;

    /**
     * @var string
     */
    private ?string $api_url = null;

    /**
     * @var string
     */
    private ?string $api_host = null;

    /**
     * @return string
     */
    public function getApi_key()
    {
        return $this->api_key;
    }

    /**
     * @return string
     */
    public function getApi_url()
    {
        return $this->api_url;
    }

    /**
     * @return string
     */
    public function getApi_host()
    {
        return $this->api_host;
    }

    /**
     * @param string $api_key
     */
    public function setApi_key($api_key) : self
    {
        $this->api_key = $api_key;
        return $this;
    }

    /**
     * @param string $api_url
     */
    public function setApi_url($api_url) : self
    {
        $this->api_url = $api_url;
        return $this;
    }

    /**
     * @param string $api_host
     */
    public function setApi_host($api_host) : self
    {
        $this->api_host = $api_host;
        return $this;
    }
}
