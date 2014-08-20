<?php

require __DIR__.'/../vendor/autoload.php';

$request_options = array(
    "base_url" => "http://gitlab.com/api/v3",
    "request.options" => array(
        "verify" => false,
        'auth' => array('login', 'pass'),
        'query' => array(
            'private_token' => 'You_secret_key'
        ),
    )
);

$api = new Gitlab\Api($request_options);

echo 'GetIssuesByProject'.PHP_EOL;

$issues = $api->executeCommand('GetIssuesByProject', array('project_id' => 10, "per_page"=>10));

echo $issues->count();