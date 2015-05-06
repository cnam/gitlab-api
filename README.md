#gitlab APi
=========

Allow oAuth gitlab autorization

## Usage

### Set config

```php

<?php

require __DIR__.'/../vendor/autoload.php';

$request_options = array(
    "base_url" => "http://gitlab.com/api/v3",
    "request.options" => array(
        "verify" => false,
        // basic autorisation
        'auth' => array('login', 'pass'),
        'query' => array(
            'private_token' => 'You_secret_key'
        ),
        "oauth2" => array(
            "client_id" => 'CLIENT_ID',
            "client_secret" => 'CLIENT_SECRET',
            "redirect_uri"  => 'REDIRECT_URL'
        )
    )
);

```

### request for resources

```php

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

```

## Full list command in the json allow directory /clients
