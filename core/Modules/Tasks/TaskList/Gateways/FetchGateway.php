<?php

namespace Task\Modules\Tasks\TaskList\Gateways;

use Task\Modules\Tasks\TaskList\Collections\TaskCollection;

interface FetchGateway
{
    public function findAll(): TaskCollection;
}
