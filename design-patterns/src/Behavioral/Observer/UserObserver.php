<?php

namespace DesignPatterns\Behavioral\Observer;

class UserObserver implements \SplObserver
{
    private $changeUsers = [];

    public function update(\SplSubject $subject)
    {
        $this->changeUsers[] = $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changeUsers;
    }
}