<?php

namespace Task\Modules\Tasks\TaskList\Presenters;

use Task\Modules\Tasks\TaskList\Collections\TaskCollection;

interface ResponseInterface
{
    public function getData(): TaskCollection;
}
