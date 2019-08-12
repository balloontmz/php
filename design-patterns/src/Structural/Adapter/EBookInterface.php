<?php

namespace DesignPatterns\Structural\Adapter;

interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * 返回当前页码和总页数的数组
     */
    public function getPage(): array;
}