<?php

namespace Gitlab\Models;

use Guzzle\Service\Command\OperationCommand;
use Guzzle\Service\Command\ResponseClassInterface;

class Milestone implements ResponseClassInterface
{
    protected $id;
    protected $iid;
    protected $project_id;
    protected $title;
    protected $description;
    protected $due_date;
    protected $state;
    protected $updated_at;
    protected $created_at;

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
} 