<?php

namespace Task\Module\Tasks\TaskList;

class UseCase
{
    private $fetchGateway;
    private $response;

    public function __construct(FetchGateway $fetchGateway)
    {
        $this->fetchGateway = $fetchGateway;
    }

    public function execute(): void
    {
        try {
            $this->response = (new Builder)
                ->withTaskFinder(new TaskFinderRule($this->fetchGateway))
                ->build();
        } catch (\Throwable $exception) {
            // algo
        }
    }

    public function getResponse(): Response
    {
        return $this->response;
    }
}
