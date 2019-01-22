<?php

namespace Task\Module\Tasks\TaskList\Presenters;

interface ResponseInterface
{
    public function getData(): TaskCollection;
}
