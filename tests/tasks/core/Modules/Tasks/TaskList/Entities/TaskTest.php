<?php

use PHPUnit\Framework\TestCase;
use Task\Modules\Tasks\TaskList\Entities\Task;

class TaskTest extends TestCase
{
    public function testInstanceOf()
    {
        $task = new Task();
        $task->setTaskId(1);
        $task->setTaskDescription('asd');
        $task->setTaskOwner('asd');
        $task->setTaskCrerationDate((new \DateTime()));

        $this->assertInstanceOf(Task::class, $task);
    }
}
