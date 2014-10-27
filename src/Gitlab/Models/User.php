<?php
namespace Gitlab\Models;

use Guzzle\Service\Command\ResponseClassInterface;
use Guzzle\Service\Command\OperationCommand;

class User implements ResponseClassInterface
{
    protected $id;
    protected $username;
    protected $email;
    protected $name;
    protected $private_token;
    /**
     * @var bool
     */
    protected $blocked;
    protected $created_at;
    protected $bio;
    protected $skype;
    protected $linkedin;
    protected $twitter;
    protected $website_url;
    protected $avatar_url;
    /**
     * @var bool
     */
    protected $dark_scheme;
    protected $theme_id;
    /**
     * @var bool
     */
    protected $is_admin;
    /**
     * @var bool
     */
    protected $can_create_group;
    /**
     * @var bool
     */
    protected $can_create_team;
    /**
     * @var bool
     */
    protected $can_create_project;

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
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * @return boolean
     */
    public function isBlocked()
    {
        return $this->blocked;
    }

    /**
     * @param boolean $blocked
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;
    }

    /**
     * @return boolean
     */
    public function isCanCreateGroup()
    {
        return $this->can_create_group;
    }

    /**
     * @param boolean $can_create_group
     */
    public function setCanCreateGroup($can_create_group)
    {
        $this->can_create_group = $can_create_group;
    }

    /**
     * @return boolean
     */
    public function isCanCreateProject()
    {
        return $this->can_create_project;
    }

    /**
     * @param boolean $can_create_project
     */
    public function setCanCreateProject($can_create_project)
    {
        $this->can_create_project = $can_create_project;
    }

    /**
     * @return boolean
     */
    public function isCanCreateTeam()
    {
        return $this->can_create_team;
    }

    /**
     * @param boolean $can_create_team
     */
    public function setCanCreateTeam($can_create_team)
    {
        $this->can_create_team = $can_create_team;
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
     * @return boolean
     */
    public function isDarkScheme()
    {
        return $this->dark_scheme;
    }

    /**
     * @param boolean $dark_scheme
     */
    public function setDarkScheme($dark_scheme)
    {
        $this->dark_scheme = $dark_scheme;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * @return boolean
     */
    public function isIsAdmin()
    {
        return $this->is_admin;
    }

    /**
     * @param boolean $is_admin
     */
    public function setIsAdmin($is_admin)
    {
        $this->is_admin = $is_admin;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @param mixed $linkedin
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
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
    public function getPrivateToken()
    {
        return $this->private_token;
    }

    /**
     * @param mixed $private_token
     */
    public function setPrivateToken($private_token)
    {
        $this->private_token = $private_token;
    }

    /**
     * @return mixed
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param mixed $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    }

    /**
     * @return mixed
     */
    public function getThemeId()
    {
        return $this->theme_id;
    }

    /**
     * @param mixed $theme_id
     */
    public function setThemeId($theme_id)
    {
        $this->theme_id = $theme_id;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getWebsiteUrl()
    {
        return $this->website_url;
    }

    /**
     * @param mixed $website_url
     */
    public function setWebsiteUrl($website_url)
    {
        $this->website_url = $website_url;
    }
   
    /**
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatar_url;
    }

    /**
     * @param string $avatar_url
     */
    public function setAvatarUrl($avatar_url)
    {
	$this->avatar_url = $avatar_url;
    }

}
