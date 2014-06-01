<?php

namespace Gitlab\Api;

use Gitlab\Core\HttpClient;
use Gitlab\Core\HttpClientInterface;
use Gitlab\Entity\Project;

class Projects
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
        $response = $this->client->get('/projects');
        $projects = array();

        /**
         * @var $project Project
         */
        foreach ($response->json() as $project) {
            $project = new Project($project);
            $projects[] = $project;
        }

        return $projects;
    }
} 