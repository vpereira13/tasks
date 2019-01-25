<?php

namespace Tests\Tasks\Core\Modules\Tasks\TaskList;

use PHPUnit\Framework\TestCase;
use Task\Modules\Tasks\TaskList\Gateways\FetchGateway;
use Task\Modules\Tasks\TaskList\UseCase;

class UseClassTest extends TestCase
{
    public function testInstanceOf(): void
    {
        $useCase = new UseCase($this->createMock(FetchGateway::class));

        $this->assertInstanceOf(UseCase::class, $useCase);
    }

    public function task(): void
    {

    }
}
