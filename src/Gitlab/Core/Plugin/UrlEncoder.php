<?php

namespace Gitlab\Core\Plugin;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Guzzle\Common\Event;

/**
 * Hack for encoding . for requests to gitlab
 *
 * @package Gitlab\Core\Plugin
 */
class UrlEncoder  implements EventSubscriberInterface
{

    public function onRequestBeforeSend(Event $event)
    {
        $path = $event['request']->getPath();
        $event['request']->setPath(str_replace(['.'],['%2E'], $path));
    }

    public static function getSubscribedEvents()
    {
        return array(
            'request.before_send' => 'onRequestBeforeSend'
        );
    }

}