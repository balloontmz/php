<?php

namespace DesignPatterns\Structural\Adapter;

class Kindle implements EBookInterface
{
    private $page = 1;

    private $totalPages = 20;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}