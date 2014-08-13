<?php
namespace Gitlab\Models;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

class ProjectEvent implements ResponseClassInterface
{

    protected $title;
    protected $project_id;
    protected $action_name;
    protected $target_id;
    protected $target_type;
    protected $author_id;
    protected $data;
    protected $target_url;

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
    public function getActionName()
    {
        return $this->action_name;
    }

    /**
     * @param mixed $action_name
     */
    public function setActionName($action_name)
    {
        $this->action_name = $action_name;
    }

    /**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * @param mixed $author_id
     */
    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
    }

    /**
     * @return mixed
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * @param mixed $target_id
     */
    public function setTargetId($target_id)
    {
        $this->target_id = $target_id;
    }

    /**
     * @return mixed
     */
    public function getTargetType()
    {
        return $this->target_type;
    }

    /**
     * @param mixed $target_type
     */
    public function setTargetType($target_type)
    {
        $this->target_type = $target_type;
    }

    /**
     * @return mixed
     */
    public function getTargetUrl()
    {
        return $this->target_url;
    }

    /**
     * @param mixed $target_url
     */
    public function setTargetUrl($target_url)
    {
        $this->target_url = $target_url;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


}