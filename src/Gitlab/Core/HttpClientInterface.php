<?php

namespace Gitlab\Core;

interface HttpClientInterface
{
    /**
     * @param $url
     * @param array $options
     * @return mixed
     */
    public function get($url, array $options = []);

    /**
     * @param $url
     * @param array $options
     * @return mixed
     */
    public function post($url, array $options = []);

    /**
     * @param $url
     * @param array $options
     * @return mixed
     */
    public function put($url, array $options = []);

    /**
     * @param $url
     * @param array $options
     * @return mixed
     */
    public function delete($url, array $options = []);
} 