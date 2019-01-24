<?php

namespace App\Repositories;

use App\Task;
use Task\Modules\Tasks\TaskList\Collections\TaskCollection;
use Task\Modules\Tasks\TaskList\Gateways\FetchGateway;

class TaskRepository implements FetchGateway
{
    private $model = Task::class;

    public function findAll(): TaskCollection
    {
        $tasks = $this->model::all();
        $taskCollection = null;

        foreach ($tasks as $task) {
            $taskCollection = $taskCollection->add($task);
        }

        return $taskCollection;
    }
}
