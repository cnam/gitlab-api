<?php

namespace Gitlab\Auth\Token;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Guzzle\Common\Event;

class Plugin implements EventSubscriberInterface
{

    /**
     * @var string
     */
    private $privateToken;


    public function __construct($client, $config)
    {
        $this->privateToken = $config['private_token'];
    }

    public function onRequestBeforeSend(Event $event)
    {
        $privateToken = $this->getAccessToken();
        if ($privateToken) {
            $event['request']->setHeader('PRIVATE-TOKEN', $privateToken);
        }
    }

    private function getAccessToken()
    {
        return $this->privateToken;
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