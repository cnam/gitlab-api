<?php

namespace Gitlab\Entity;


class Project
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $name_with_namespace;

    /**
     * @var array
     */
    private $namespace;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $path_with_namespace;

    /**
     * @var string
     */
    private $ssh_url_to_repo;

    /**
     * @var string
     */
    private $http_url_to_repo;

    /**
     * @var string
     */
    private $web_url;

    /**
     * @var array
     */
    private $owner;

    /**
     * @var bool
     */
    private $public;

    /**
     * @var string
     */
    private $default_branch;

    /**
     * @var bool
     */
    private $issue_enabled;

    /**
     * @var bool
     */
    private $merge_request_enabled;

    /**
     * @var bool
     */
    private $wall_enabled;

    /**
     * @var bool
     */
    private $wiki_enabled;

    /**
     * @var \DateTime
     */
    private $create_at;

    /**
     * @var \DateTime
     */
    private $last_activity_at;

    /**
     * @var bool
     */
    private $snippets_enabled;

    /**
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * @param \DateTime $create_at
     */
    public function setCreateAt($create_at)
    {
        $this->create_at = $create_at;
    }

    /**
     * @return string
     */
    public function getDefaultBranch()
    {
        return $this->default_branch;
    }

    /**
     * @param string $default_branch
     */
    public function setDefaultBranch($default_branch)
    {
        $this->default_branch = $default_branch;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getHttpUrlToRepo()
    {
        return $this->http_url_to_repo;
    }

    /**
     * @param string $http_url_to_repo
     */
    public function setHttpUrlToRepo($http_url_to_repo)
    {
        $this->http_url_to_repo = $http_url_to_repo;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return boolean
     */
    public function isIssueEnabled()
    {
        return $this->issue_enabled;
    }

    /**
     * @param boolean $issue_enabled
     */
    public function setIssueEnabled($issue_enabled)
    {
        $this->issue_enabled = $issue_enabled;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivityAt()
    {
        return $this->last_activity_at;
    }

    /**
     * @param \DateTime $last_activity_at
     */
    public function setLastActivityAt($last_activity_at)
    {
        $this->last_activity_at = $last_activity_at;
    }

    /**
     * @return boolean
     */
    public function isMergeRequestEnabled()
    {
        return $this->merge_request_enabled;
    }

    /**
     * @param boolean $merge_request_enabled
     */
    public function setMergeRequestEnabled($merge_request_enabled)
    {
        $this->merge_request_enabled = $merge_request_enabled;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameWithNamespace()
    {
        return $this->name_with_namespace;
    }

    /**
     * @param string $name_with_namespace
     */
    public function setNameWithNamespace($name_with_namespace)
    {
        $this->name_with_namespace = $name_with_namespace;
    }

    /**
     * @return array
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param array $namespace
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    /**
     * @return array
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param array $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPathWithNamespace()
    {
        return $this->path_with_namespace;
    }

    /**
     * @param string $path_with_namespace
     */
    public function setPathWithNamespace($path_with_namespace)
    {
        $this->path_with_namespace = $path_with_namespace;
    }

    /**
     * @return boolean
     */
    public function isPublic()
    {
        return $this->public;
    }

    /**
     * @param boolean $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * @return boolean
     */
    public function isSnippetsEnabled()
    {
        return $this->snippets_enabled;
    }

    /**
     * @param boolean $snippets_enabled
     */
    public function setSnippetsEnabled($snippets_enabled)
    {
        $this->snippets_enabled = $snippets_enabled;
    }

    /**
     * @return string
     */
    public function getSshUrlToRepo()
    {
        return $this->ssh_url_to_repo;
    }

    /**
     * @param string $ssh_url_to_repo
     */
    public function setSshUrlToRepo($ssh_url_to_repo)
    {
        $this->ssh_url_to_repo = $ssh_url_to_repo;
    }

    /**
     * @return boolean
     */
    public function isWallEnabled()
    {
        return $this->wall_enabled;
    }

    /**
     * @param boolean $wall_enabled
     */
    public function setWallEnabled($wall_enabled)
    {
        $this->wall_enabled = $wall_enabled;
    }

    /**
     * @return string
     */
    public function getWebUrl()
    {
        return $this->web_url;
    }

    /**
     * @param string $web_url
     */
    public function setWebUrl($web_url)
    {
        $this->web_url = $web_url;
    }

    /**
     * @return boolean
     */
    public function isWikiEnabled()
    {
        return $this->wiki_enabled;
    }

    /**
     * @param boolean $wiki_enabled
     */
    public function setWikiEnabled($wiki_enabled)
    {
        $this->wiki_enabled = $wiki_enabled;
    }
}