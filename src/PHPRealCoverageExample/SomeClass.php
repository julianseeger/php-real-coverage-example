<?php

namespace PHPRealCoverageExample;

class SomeClass {
    public function someFunction()
    {
        $instance = "important message";
        $a = "This code";
        $b = "is completely";
        $c = "usesless";
        $instance .= "!!!";
        if (true) {
            $f = "and has";
            $g = "100% coverage";
        }
        $c .= "!";
        return $instance;
    }
}
