<?php

namespace Gitlab\Core\Models;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

class BaseList implements ResponseClassInterface, \ArrayAccess, \Iterator
{
    protected $storage = array();

    protected $pointer = 0;

    public static function fromCommand(OperationCommand $command)
    {
        $response = $command->getResponse();
        $items = $response->json();

        return new static($items);
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->storage);
    }

    public function offsetGet($offset)
    {
        return $this->storage[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->storage[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->storage[$offset]);
    }


    public function current()
    {
        return $this->storage[$this->pointer];
    }

    public function next()
    {
        return $this->storage[$this->pointer++];
    }

    public function key()
    {
        return $this->pointer;
    }

    public function valid()
    {
        return isset($this->storage[$this -> pointer]);
    }

    public function rewind()
    {
        $this->pointer = 0;
    }

    public function count()
    {
        return count($this->storage);
    }
}
