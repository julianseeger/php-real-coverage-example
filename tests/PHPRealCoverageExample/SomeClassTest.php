<?php

namespace PHPRealCoverageExample;

class SomeClassTest extends \PHPUnit_Framework_TestCase
{
    public function testThisTestIsStupid()
    {
        $sut = new SomeClass();
        $instance = $sut->someFunction();

        $this->assertEquals("important message!!!" , $instance);
    }
}
