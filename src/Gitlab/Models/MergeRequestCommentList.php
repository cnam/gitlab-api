<?php
namespace Gitlab\Models;

use Gitlab\Core\Models\BaseList;

class MergeRequestCommentList extends BaseList
{

    public function __construct(array $items)
    {
        foreach ($items as $item) {
            $issue = new MergeRequestComment($item);
            $this->storage[] = $issue;
        }
    }

}