<?php

require __DIR__.'/../vendor/autoload.php';

$client = new \Gitlab\Core\HttpClient('http://gitlab.v3.com/v3', 'your_secret_key', ['user', 'password']);

$projects = new \Gitlab\Api\Projects($client);

/**
 * list all projects
 */

foreach ($projects->all() as $project) {
    var_dump($project);
}

$issues = new \Gitlab\Api\Issue($client);

/**
 * list all issues
 */

foreach ($issues->all() as $issue) {
    var_dump($issue);
}

$projectId = 1;

var_dump($issues->allByProject($projectId));

foreach ($issues->allByProject($projectId) as $issue) {
    var_dump($issue);
}

