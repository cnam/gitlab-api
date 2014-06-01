<?php

namespace Gitlab\Api;

use Gitlab\Core\HttpClient;
use Gitlab\Core\HttpClientInterface;

class Issue
{

    /**
     * @var HttpClient
     */
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     */
    public function all()
    {
        $response = $this->client->get('/issues');

        $issues = array();

        foreach ($response->json() as $issue) {
            $issue = new Issue($issue);
            $issues[$issue->getId()] = $issue;
        }

        return $issues;
    }

    /**
     * @param int $projectId
     *
     * @return array
     */
    public function allByProject($projectId)
    {
        $response = $this->client->get('/projects/'.$projectId.'/issues');

        $issues = array();

        foreach ($response->json() as $issue) {
            $issue = new Issue($issue);
            $issues[$issue->getId()] = $issue;
        }

        return $issues;
    }
} 