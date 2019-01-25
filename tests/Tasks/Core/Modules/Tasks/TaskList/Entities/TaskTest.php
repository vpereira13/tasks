<?php

namespace Tests\Tasks\Core\Modules\Tasks\TaskList\Entities;

use PHPUnit\Framework\TestCase;
use Task\Modules\Tasks\TaskList\Entities\Task;

class TaskTest extends TestCase
{
    public function testInstanceOf(): void
    {
        $task = new Task(1, (new \DateTime()), 'test', 'test');

        $this->assertInstanceOf(Task::class, $task);
    }

    public function testParams(): void
    {
        $task = new Task(1, (new \DateTime()), 'test', 'test');

        $this->assertTrue(!empty($task->getTaskId()));
        $this->assertTrue(!empty($task->getTaskCreationDate()));
        $this->assertTrue(!empty($task->getTaskDescription()));
        $this->assertTrue(!empty($task->getTaskOwner()));
    }

    public function testParamsEquals(): void
    {
        $now = new \DateTime();
        $task = new Task(1, $now, 'test', 'test');

        $this->assertEquals(1, $task->getTaskId());
        $this->assertEquals($now, $task->getTaskCreationDate());
        $this->assertEquals('test', $task->getTaskDescription());
        $this->assertEquals('test', $task->getTaskOwner());
    }

    /**
     * @dataProvider paramsProvider
     */
    public function testInvalidParams($id, $date, $description, $owner): void
    {
        $this->expectException(\TypeError::class);

        new Task($id, $date, $description, $owner);
    }

    public function paramsProvider(): array
    {
        return  [
            'id params' => [
                [], 'date', 'description', 'owner'
            ],
            'date params' => [
                'id', [], 'description', 'owner'
            ],
            'description params' => [
                'id', 'date', [], 'owner'
            ],
            'owner params' => [
                'id', 'date', 'description', []
            ],
        ];
    }
}
