<?php

namespace Gitlab\Core;

use GuzzleHttp\Client;

class HttpClient implements HttpClientInterface
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * Create new httpClient with basic params
     *
     * @param string $baseUrl
     * @param string $accessToken
     * @param array $basicAuth
     */
    public function __construct($baseUrl, $accessToken, array $basicAuth = [])
    {
        $this->client = new Client([
            'base_url' => $baseUrl,
            'defaults' => [
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'query' => [
                    'token' => $accessToken
                ],
                'auth' => $basicAuth
            ]
        ]);
    }

    /**
     * @param string $url
     * @param array $options
     *
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function get($url, array $options = [])
    {
        return $this->client->get($url, $options);
    }

    /**
     * @param $url
     * @param array $options
     *
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function post($url, array $options = [])
    {
        return $this->client->post($url, $options);
    }

    /**
     * @param $url
     * @param array $options
     *
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function delete($url, array $options = [])
    {
        return $this->client->delete($url, $options);
    }

    /**
     * @param $url
     * @param array $options
     *
     * @return \GuzzleHttp\Message\ResponseInterface
     */
    public function put($url, array $options = [])
    {
        return $this->client->put($url, $options);
    }
} 