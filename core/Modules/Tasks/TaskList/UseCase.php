<?php

namespace Task\Modules\Tasks\TaskList;

use Task\Module\Tasks\TaskList\Builders\Builder;
use Task\Modules\Tasks\TaskList\Gateways\FetchGateway;
use Task\Modules\Tasks\TaskList\Presenters\Response;
use Task\Modules\Tasks\TaskList\Rules\TaskFinderRule;

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
            $this->response = (new Builder())
                ->withTaskFinder(new TaskFinderRule($this->fetchGateway))
                ->build();
        } catch (\Throwable $exception) {
            // TODO lançar exceção
        }
    }

    public function getResponse(): Response
    {
        return $this->response;
    }
}
