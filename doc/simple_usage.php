<?php

require __DIR__.'/../vendor/autoload.php';

$request_options = array(
    "request.options" => array(
        "verify" => false,
        'auth' => array('login', 'pass'),
        'query' => array(
            'private_token' => 'You_secret_key'
        ),
    )
);

$api = new Gitlab\Api($request_options);

$issues = $api->executeCommand('GetIssues');

foreach ($issues as $issue) {
    echo($issue->getId().' '.$issue->getTitle()).PHP_EOL;
}


echo 'GetIssuesByProject'.PHP_EOL;

$issues = $api->executeCommand('GetIssuesByProject', array('project_id' => 10));

foreach ($issues as $issue) {
    echo($issue->getId().' '.$issue->getTitle()).PHP_EOL;
}

echo 'GetIssue'.PHP_EOL;

$issue = $api->executeCommand('GetIssue', array('project_id' => 10,'issue_id'=>58));

echo($issue->getId().' '.$issue->getTitle()).PHP_EOL;


$projects = $api->executeCommand('GetProjects');

foreach ($projects as $project) {
    /**
     * @var $project \Gitlab\Models\Project
     */
    echo($project->getId() . " " . $project->getNameWithNamespace()).PHP_EOL;
}

