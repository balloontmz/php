<?php

namespace DesignPatterns\Behavioral\Strategy;

class Context
{
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements): array
    {
        // print_r($elements);
        uasort($elements, [$this->comparator, 'compare']);
        // print_r($elements);
        return $elements;
    }
}