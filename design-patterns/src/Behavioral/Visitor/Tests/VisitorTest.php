<?php

namespace DesignPatterns\Behavioral\Visitor\Tests;

use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor\RoleVisitor;
use DesignPatterns\Behavioral\Visitor\User;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    private $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RoleVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Admin')],
        ];
    }

    /**
     * @dataProvider provideRoles
     * 
     * @param Role $role
     */
    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}