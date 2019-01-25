<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use Task\Modules\Tasks\TaskList\Presenters\ResponsePresenter;
use Task\Modules\Tasks\TaskList\UseCase;

class TaskController extends Controller
{
    public function index()
    {
        $useCase = new UseCase(new TaskRepository());
        $useCase->execute();

        $response = (new ResponsePresenter($useCase->getResponse()))
            ->present()->toArray();

        return response($response, 200);
    }
}
