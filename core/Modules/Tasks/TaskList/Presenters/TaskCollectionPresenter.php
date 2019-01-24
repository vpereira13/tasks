<?php

namespace Task\Modules\Tasks\TaskList\Presenters;

use Task\Modules\Tasks\TaskList\Collections\TaskCollection;

class TaskCollectionPresenter
{
    private $presenter = array();
    private $taskCollection;

    public function __construct(TaskCollection $taskCollection)
    {
        $this->taskCollection = $taskCollection;
    }

    public function present(): void
    {
        foreach ($this->taskCollection as $task) {
            $this->presenter[$task->getTaskId()] = (new TaskPresenter($task))
                ->present()->toArray();
        }
    }

    public function toArray(): array
    {
        return $this->presenter;
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}
