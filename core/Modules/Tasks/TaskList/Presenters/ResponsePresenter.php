<?php

namespace Task\Modules\Tasks\TaskList\Presenters;

class ResponsePresenter
{
    private $presenter = array();
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function present(): void
    {
        $this->presenter = [
            'data' => (new TaskCollectionPresenter($this->response->getData()))
                ->present()->toArray(),
        ];
    }

    public function toArray(): array
    {
        return $this->presenter;
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}
