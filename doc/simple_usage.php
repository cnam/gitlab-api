<?php

require __DIR__.'/../vendor/autoload.php';

$request_options = array(
    "base_url" => "https://gitlab.com/api/v3",
    "request.options" => array(
        "verify" => false,
        // basic auth
        "auth" => ['LOGIN', 'PASSSWORD'],
    ),
    // private user token for usage api
    "private_token" => 'PRIVATE_USER_TOKEN',
    // oauth 2 for usage api
    "oauth2" => array(
        "client_id" => 'CLIENT_ID',
        "client_secret" => 'CLIENT_SECRET',
        "redirect_uri"  => 'REDIRECT_URL'
    )
);

$api = new Gitlab\Api($request_options);

echo 'GetIssuesByProject'.PHP_EOL;

$issues = $api->executeCommand('GetIssuesByProject', array('project_id' => 10, "per_page"=>10));

echo $issues->count();