<?php

class Task
{
    private $taskId;
    private $taskCreationDate;
    private $taskDescription;
    private $taskOwner;

    public function getTaskId(): int
    {
        return $this->taskId;
    }

    public function setTaskId(int $taskId): void
    {
        $this->taskId = $taskId;
    }

    public function getTaskCreationDate(): \DateTime
    {
        return $this->taskCreationDate;
    }

    public function setTaskCrerationDate(\DateTime $taskCreationDate): void
    {
        $this->taskCreationDate = $taskCreationDate;
    }

    public function getTaskDescription(): string
    {
        return $this->taskDescription;
    }

    public function setTaskDescription(string $taskDescription): void
    {
        $this->taskDescription = $taskDescription;
    }

    public function getTaskOwner(): string
    {
        return $this->taskOwner;
    }

    public function setTaskOwner(string $taskOwner): void
    {
        $this->taskOwner = $taskOwner;
    }
}
