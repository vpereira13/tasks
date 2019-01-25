<?php

namespace Tests\Tasks\Core\Modules\Tasks\TaskList\Collections;

use PHPUnit\Framework\TestCase;
use Task\Modules\Tasks\TaskList\Collections\TaskCollection;

class TaskCollectionTest extends TestCase
{
    public function testInstanceOf(): void
    {
        $taskCollection = new TaskCollection();

        $this->assertInstanceOf(TaskCollection::class, $taskCollection);
    }
}
