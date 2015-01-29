<?php

namespace Gitlab\Models;

use Gitlab\Core\Models\BaseModel;

class Branch  extends BaseModel
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $commit;

    /**
     * @var bool
     */
    protected $protected;

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
     * @return array
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * @param array $commit
     */
    public function setCommit($commit)
    {
        $this->commit = $commit;
    }

    /**
     * @return boolean
     */
    public function isProtected()
    {
        return $this->protected;
    }

    /**
     * @param boolean $protected
     */
    public function setProtected($protected)
    {
        $this->protected = $protected;
    }
}
