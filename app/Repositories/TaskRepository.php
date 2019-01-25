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
        $tasksDB = $this->model::all();
        $taskCollection = new TaskCollection();

        foreach ($tasksDB as $taskDB) {
            $task = new \Task\Modules\Tasks\TaskList\Entities\Task(
                $taskDB->id,
                (new \DateTime($taskDB->creation)),
                $taskDB->description,
                $taskDB->owner
            );
            $taskCollection->add($task);
        }

        return $taskCollection;
    }
}
