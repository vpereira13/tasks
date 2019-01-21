<?php

use App\Task;
use tasks\core\Modules\Tasks\TaskList\Gateways\FetchGateway;

class TaskRepository implements FetchGateway
{
    private $model = Task::class;

    public function __construct()
    {
        $this->model = new $this->model;
    }

    public function findAll()
    {
        $tasks = $this->model::all();

        $tasks->save();

        return $tasks;
    }
}
