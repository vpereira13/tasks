<?php

class TaskPresenter
{
    private $task;
    private $presenter = array();

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function present(): TaskPresenter
    {
        $this->presenter = [
            'id' => $this->task->getTaskId(),
            'date' => $this->task->getTaskCreationDate(),
            'description' => $this->task->getTaskDescription(),
            'owner' => $this->task->getTaskOwner(),
        ];

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
