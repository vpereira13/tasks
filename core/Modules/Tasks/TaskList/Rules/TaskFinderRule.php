<?php

namespace Task\Module\Tasks\TaskList\Rules;

class TaskFinderRule
{
    private $fetchGateway;

    public function __construct(FetchGateway $fetchGateway)
    {
        $this->fetchGateway = $fetchGateway;
    }

    public function apply(): TaskCollection
    {
        try {
            return $this->fetchGateway->findAll();
        } catch (\Throwable $exception) {
            //throw new
        }
    }
}
