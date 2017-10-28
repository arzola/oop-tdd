<?php

use LateStatic\Computer;
use PHPUnit\Framework\TestCase;

class ComputerTest extends TestCase
{
    public function test_if_late_static_binding_works()
    {
        $pc = Computer::getBrand();
        $this->assertEquals('PC', $pc);
        $name = \LateStatic\Mac::getBrand();
        $this->assertEquals('Mac', $name);
    }
}
