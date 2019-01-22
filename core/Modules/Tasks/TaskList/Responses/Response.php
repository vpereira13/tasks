<?php

namespace Task\Module\Tasks\TaskList\Presenters;

class Response implements ResponseInterface
{
    private $taskCollection;

    public function __construct(TaskCollection  $taskCollection)
    {
        $this->taskCollection = $taskCollection;
    }

    public function getData(): TaskCollection
    {
        return $this->taskCollection;
    }
}
