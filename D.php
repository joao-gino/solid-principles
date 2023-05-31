<?php

// Dependency Inversion Principle
// High-level modules should not depend on low-level modules. Both should depend on the abstraction. Abstractions should not depend on details. Details should depend on abstractions.
// This principle aims at reducing the dependency of a high-level Class on the low-level Class by introducing an interface.

/**
 * In this example, we have a CutterRobot that can cut with any tool given to it.
 * We have a Scissors and a Knife that can cut.
 * Imagine that CutterRobot just cut with Scissors. This is a violation of Dependency Inversion Principle.
 */

interface ToolInterface {
    public function cut();
}

class Scissors implements ToolInterface {
    public function cut() {
        echo "Cut with scissors";
    }
}

class Knife implements ToolInterface {
    public function cut() {
        echo "Cut with knife";
    }
}

class CutterRobot {
    private $tool;

    public function __construct(ToolInterface $tool) {
        $this->tool = $tool;
    }

    public function performCut() {
        $this->tool->cut();
    }
}

$scissors = new Scissors();
$knife = new Knife();

$robot1 = new CutterRobot($scissors);
$robot1->performCut(); // Output: Cutting with scissors.

$robot2 = new CutterRobot($knife);
$robot2->performCut(); // Output: Cutting with a knife.