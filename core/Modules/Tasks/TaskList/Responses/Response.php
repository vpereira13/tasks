<?php

namespace Task\Modules\Tasks\TaskList\Presenters;

use Task\Modules\Tasks\TaskList\Collections\TaskCollection;

class Response implements ResponseInterface
{
    private $taskCollection;

    public function __construct(TaskCollection $taskCollection)
    {
        $this->taskCollection = $taskCollection;
    }

    public function getData(): TaskCollection
    {
        return $this->taskCollection;
    }
}
