<?php

namespace Gitlab\Models;

use Gitlab\Core\Models\BaseModel;

class MergeRequest extends BaseModel
{
    protected $id;
    protected $iid;
    protected $target_branch;
    protected $source_branch;
    protected $project_id;
    protected $title;
    protected $state;
    protected $upvotes;
    protected $downvotes;
    protected $author;
    protected $assignee;
    protected $description;

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

    /**
     * @return mixed
     */
    public function getIid()
    {
        return $this->iid;
    }

    /**
     * @param mixed $iid
     */
    public function setIid($iid)
    {
        $this->iid = $iid;
    }

    /**
     * @return mixed
     */
    public function getTargetBranch()
    {
        return $this->target_branch;
    }

    /**
     * @param mixed $target_branch
     */
    public function setTargetBranch($target_branch)
    {
        $this->target_branch = $target_branch;
    }

    /**
     * @return mixed
     */
    public function getSourceBranch()
    {
        return $this->source_branch;
    }

    /**
     * @param mixed $source_branch
     */
    public function setSourceBranch($source_branch)
    {
        $this->source_branch = $source_branch;
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

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getUpvotes()
    {
        return $this->upvotes;
    }

    /**
     * @param mixed $upvotes
     */
    public function setUpvotes($upvotes)
    {
        $this->upvotes = $upvotes;
    }

    /**
     * @return mixed
     */
    public function getDownvotes()
    {
        return $this->downvotes;
    }

    /**
     * @param mixed $downvotes
     */
    public function setDownvotes($downvotes)
    {
        $this->downvotes = $downvotes;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * @param mixed $assignee
     */
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}