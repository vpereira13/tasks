<?php

namespace Task\Modules\Tasks\TaskList\Rules;

use Task\Modules\Tasks\TaskList\Collections\TaskCollection;
use Task\Modules\Tasks\TaskList\Gateways\FetchGateway;

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
            // TODO lançar exceção
        }
    }
}
