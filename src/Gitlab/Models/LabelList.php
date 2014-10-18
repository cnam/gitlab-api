<?php

namespace Gitlab\Models;

use Gitlab\Core\Models\BaseList;

class LabelList extends BaseList
{
    public function __construct(array $items)
    {
        foreach ($items as $item) {
            $issue = new Label($item);
            $this->storage[] = $issue;
        }
    }
}