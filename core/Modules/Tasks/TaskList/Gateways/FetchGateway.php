<?php

namespace Task\Module\Tasks\TaskList\Gateways;

interface FetchGateway
{
    public function findAll(): TaskCollection;
}
