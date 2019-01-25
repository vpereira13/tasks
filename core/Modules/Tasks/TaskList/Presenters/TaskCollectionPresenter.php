<?php

namespace Task\Modules\Tasks\TaskList\Presenters;

use Task\Modules\Tasks\TaskList\Collections\TaskCollection;

class TaskCollectionPresenter
{
    private $presenter = [];
    private $taskCollection;

    public function __construct(TaskCollection $taskCollection)
    {
        $this->taskCollection = $taskCollection;
    }

    public function present(): TaskCollectionPresenter
    {
        foreach ($this->taskCollection->all() as $task) {
            $this->presenter[] = (new TaskPresenter($task))
                ->present()->toArray();
        }

        return $this;
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
