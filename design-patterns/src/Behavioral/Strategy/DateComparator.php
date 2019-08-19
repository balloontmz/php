<?php

namespace DesignPatterns\Behavioral\Strategy;

class DateComparator implements ComparatorInterface
{
    public function compare($a, $b): int
    {
        $a_date = new \DateTime($a['date']);
        $b_date = new \DateTime($b['date']);

        return $a_date <=> $b_date;
    }
}