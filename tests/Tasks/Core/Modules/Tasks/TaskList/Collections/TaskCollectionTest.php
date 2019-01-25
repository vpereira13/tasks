<?php

namespace Tests\Tasks\Core\Modules\Tasks\TaskList\Collections;

use PHPUnit\Framework\TestCase;
use Task\Modules\Tasks\TaskList\Collections\TaskCollection;
use Task\Modules\Tasks\TaskList\Entities\Task;

class TaskCollectionTest extends TestCase
{
    public function testInstanceOf(): void
    {
        $taskCollection = new TaskCollection();

        $this->assertInstanceOf(TaskCollection::class, $taskCollection);
    }

    public function testPushTask(): void
    {
        $taskCollection = new TaskCollection();
        $task = new Task(0, (new \DateTime()), 'test', 'test');

        $taskCollection->add($task);
        $this->assertEquals(1, count($taskCollection->all()));
    }

    public function testGenericAdd(): void
    {
        $taskMock = $this->createMock(Task::class);
        $taskCollection = new TaskCollection();

        $taskCollection->add($taskMock);
        $this->assertEquals(1, count($taskCollection->all()));
    }

    /**
     * @dataProvider paramsAddProvider
     */
    public function testInvalidParamsAdd($task): void
    {
        $this->expectException(\TypeError::class);

        (new TaskCollection())->add($task);
    }

    public function paramsAddProvider(): array
    {
        return [
            'int' => [1],
            'string' => ['test'],
            'null' => [null],
            'float' => [1.0],
            'array' => [[]],
        ];
    }
}
