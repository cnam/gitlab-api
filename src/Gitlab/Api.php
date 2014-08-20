<?php

namespace Gitlab;

use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;

class Api
{


    /**
     * @var ServiceDescription
     */
    protected $description;

    /**
     * @var Client
     */
    protected $client;

    public function __construct($request_options)
    {
        $description = ServiceDescription::factory(__DIR__."/../../clients/command.json");
        $this->client = new Client($request_options['base_url']);
        $this->client->setDescription($description);
        $this->client->setConfig($request_options);
    }

    /**
     * @param       $command
     * @param array $arguments
     *
     * @return array
     */
    public function executeCommand($command, $arguments = array())
    {
        $command = $this->client->getCommand($command, $arguments);
        return $this->client->execute($command);/*$command->getResponse()->json();*/
    }
} 