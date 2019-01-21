<?php

interface FetchGateway
{
    public function findAll(): TaskCollection;
}
