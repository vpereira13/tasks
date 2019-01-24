<?php

namespace Task\Modules\Tasks\TaskList\Collections;

use Task\Modules\Tasks\TaskList\Entities\Task;

class TaskCollection
{
    private $collector = array();

    public function add(Task $task): TaskCollection
    {
        array_push($this->collector, $task);
        return $this;
    }

    public function all(): array
    {
        return $this->collector;
    }
}
