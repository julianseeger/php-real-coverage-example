<?php

namespace PHPRealCoverageExample;

class SomeClass {
    public function someFunction()
    {
        $instance = new \stdClass();
        $a = "This code";
        $b = "is completely";
        $c = "usesless";
        $instance->attribute = true;
        if (true) {
            $f = "and has";
            $g = "100% coverage";
        }
        $c .= "!";
        return $instance;
    }
}
