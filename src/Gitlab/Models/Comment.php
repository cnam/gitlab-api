<?php
namespace Gitlab\Models;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

class Comment implements ResponseClassInterface
{

    protected $id;
    protected $body;
    protected $attachment;
    /**
     * @var array
     */
    protected $author;
    protected $created_at;

    public static function fromCommand(OperationCommand $command)
    {
        $response = $command->getResponse();
        $item = $response->json();

        return new self($item);
    }

    public function __construct(array $item)
    {
        foreach ($item as $name => $content) {
            $this->{$name} = $content;
        }
    }

    /**
     * @return mixed
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param mixed $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * @return array
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param array $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        if (! $this->created_at instanceof \DateTime) {
            $this->created_at = new \DateTime($this->created_at);
        }

        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}