<?php
namespace Gitlab\Models;

use Gitlab\Core\Models\BaseModel;

class CompareBranch extends BaseModel
{
    /**
     * @var array
     */
    protected $commit;
    /**
     * @var array
     */
    protected $commits;
    /**
     * @var array
     */
    protected $diffs;
    /**
     * @var bool
     */
    protected $compare_timeout;
    /**
     * @var bool
     */
    protected $compare_same_ref;

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
     * @return array
     */
    public function getCommits()
    {
        return $this->commits;
    }

    /**
     * @param array $commits
     */
    public function setCommits($commits)
    {
        $this->commits = $commits;
    }

    /**
     * @return array
     */
    public function getDiffs()
    {
        return $this->diffs;
    }

    /**
     * @param array $diffs
     */
    public function setDiffs($diffs)
    {
        $this->diffs = $diffs;
    }

    /**
     * @return boolean
     */
    public function isCompareTimeout()
    {
        return $this->compare_timeout;
    }

    /**
     * @param boolean $compare_timeout
     */
    public function setCompareTimeout($compare_timeout)
    {
        $this->compare_timeout = $compare_timeout;
    }

    /**
     * @return boolean
     */
    public function isCompareSameRef()
    {
        return $this->compare_same_ref;
    }

    /**
     * @param boolean $compare_same_ref
     */
    public function setCompareSameRef($compare_same_ref)
    {
        $this->compare_same_ref = $compare_same_ref;
    }


}