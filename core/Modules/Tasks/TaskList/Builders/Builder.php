<?php

namespace Task\Module\Tasks\TaskList\Builders;

use Task\Modules\Tasks\TaskList\Presenters\Response;
use Task\Modules\Tasks\TaskList\Presenters\ResponseInterface;
use Task\Modules\Tasks\TaskList\Rules\TaskFinderRule;

class Builder
{
    private $taskFinderRule;

    public function withTaskFinder(TaskFinderRule $taskFinderRule): Builder
    {
        $this->taskFinderRule = $taskFinderRule;
        return $this;
    }

    public function build(): ResponseInterface
    {
        $taskCollection = $this->taskFinderRule()->apply;

        return (new Response($taskCollection));
    }
}
