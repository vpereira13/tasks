<?php

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
