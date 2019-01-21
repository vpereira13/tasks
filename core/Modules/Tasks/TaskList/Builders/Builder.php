<?php

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

        return (new Response)
            ->setData($taskCollection);
    }
}
