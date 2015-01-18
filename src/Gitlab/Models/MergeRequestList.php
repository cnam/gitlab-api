<?php

namespace Gitlab\Models;

use Gitlab\Core\Models\BaseList;

class MergeRequestList extends BaseList
{
    public function __construct(array $items)
    {
        foreach ($items as $item) {
            $issue = new MergeRequest($item);
            $this->storage[] = $issue;
        }
    }
}