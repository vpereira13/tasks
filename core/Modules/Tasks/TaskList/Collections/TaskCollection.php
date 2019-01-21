<?php

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
