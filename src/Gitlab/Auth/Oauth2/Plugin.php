<?php

namespace Gitlab\Auth\Oauth2;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Guzzle\Common\Event;

class Plugin implements EventSubscriberInterface
{

    /**
     * @var string
     */
    private $accessToken;


    public function __construct($client, $config)
    {
        $this->accessToken = $config['access_token'];
    }

    public function onRequestBeforeSend(Event $event)
    {
        $accessToken = $this->getAccessToken();
        if ($accessToken) {
            $event['request']->setHeader('Authorization', 'Bearer ' . $accessToken);
        }
    }

    private function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            'request.before_send' => 'onRequestBeforeSend'
        );
    }

}