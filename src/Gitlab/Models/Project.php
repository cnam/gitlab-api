<?php
namespace Gitlab\Models;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

class Project implements ResponseClassInterface
{

    protected $id;
    protected $description;
    protected $default_branch;
    protected $public;
    protected $visible_level;
    protected $ssh_url_to_repo;
    protected $http_url_to_repo;
    protected $web_url;
    protected $owner;
    protected $name;
    protected $name_with_namespace;
    protected $path;
    protected $path_with_namespace;
    protected $wiki_enabled;
    protected $merge_request_enabled;
    protected $issues_enabled;
    protected $snippets_enabled;
    protected $created_at;
    protected $last_activity_at;
    protected $namespace;
    protected $permissions;
    protected $archive;
    protected $avatar_url;

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
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * @param mixed $archive
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;
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
    public function getDefaultBranch()
    {
        return $this->default_branch;
    }

    /**
     * @param mixed $default_branch
     */
    public function setDefaultBranch($default_branch)
    {
        $this->default_branch = $default_branch;
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

    /**
     * @return mixed
     */
    public function getHttpUrlToRepo()
    {
        return $this->http_url_to_repo;
    }

    /**
     * @param mixed $http_url_to_repo
     */
    public function setHttpUrlToRepo($http_url_to_repo)
    {
        $this->http_url_to_repo = $http_url_to_repo;
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

    /**
     * @return mixed
     */
    public function getIssuesEnabled()
    {
        return $this->issues_enabled;
    }

    /**
     * @param mixed $issues_enabled
     */
    public function setIssuesEnabled($issues_enabled)
    {
        $this->issues_enabled = $issues_enabled;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivityAt()
    {
        if (! $this->last_activity_at instanceof \DateTime) {
            $this->last_activity_at = new \DateTime($this->last_activity_at);
        }

        return $this->last_activity_at;
    }

    /**
     * @param mixed $last_activity_at
     */
    public function setLastActivityAt($last_activity_at)
    {
        $this->last_activity_at = $last_activity_at;
    }

    /**
     * @return mixed
     */
    public function getMergeRequestEnabled()
    {
        return $this->merge_request_enabled;
    }

    /**
     * @param mixed $merge_request_enabled
     */
    public function setMergeRequestEnabled($merge_request_enabled)
    {
        $this->merge_request_enabled = $merge_request_enabled;
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
    public function getNameWithNamespace()
    {
        return $this->name_with_namespace;
    }

    /**
     * @param mixed $name_with_namespace
     */
    public function setNameWithNamespace($name_with_namespace)
    {
        $this->name_with_namespace = $name_with_namespace;
    }

    /**
     * @return mixed
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param mixed $namespace
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getPathWithNamespace()
    {
        return $this->path_with_namespace;
    }

    /**
     * @param mixed $path_with_namespace
     */
    public function setPathWithNamespace($path_with_namespace)
    {
        $this->path_with_namespace = $path_with_namespace;
    }

    /**
     * @return mixed
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param mixed $permissions
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * @return mixed
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @param mixed $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * @return mixed
     */
    public function getSnippetsEnabled()
    {
        return $this->snippets_enabled;
    }

    /**
     * @param mixed $snippets_enabled
     */
    public function setSnippetsEnabled($snippets_enabled)
    {
        $this->snippets_enabled = $snippets_enabled;
    }

    /**
     * @return mixed
     */
    public function getSshUrlToRepo()
    {
        return $this->ssh_url_to_repo;
    }

    /**
     * @param mixed $ssh_url_to_repo
     */
    public function setSshUrlToRepo($ssh_url_to_repo)
    {
        $this->ssh_url_to_repo = $ssh_url_to_repo;
    }

    /**
     * @return mixed
     */
    public function getVisibleLevel()
    {
        return $this->visible_level;
    }

    /**
     * @param mixed $visible_level
     */
    public function setVisibleLevel($visible_level)
    {
        $this->visible_level = $visible_level;
    }

    /**
     * @return mixed
     */
    public function getWebUrl()
    {
        return $this->web_url;
    }

    /**
     * @param mixed $web_url
     */
    public function setWebUrl($web_url)
    {
        $this->web_url = $web_url;
    }

    /**
     * @return mixed
     */
    public function getWikiEnabled()
    {
        return $this->wiki_enabled;
    }

    /**
     * @param mixed $wiki_enabled
     */
    public function setWikiEnabled($wiki_enabled)
    {
        $this->wiki_enabled = $wiki_enabled;
    }

    /**
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatar_url;
    }

    /**
     * @param mixed $avatar_url
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->avatar_url = $avatar_url;
    }
}
