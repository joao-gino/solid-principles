<?php

// Interface Segregation Principle
// Clients should not be forced to depend on methods that they do not use.
// This principle aims at splitting a set of actions into smaller sets so that a Class executes ONLY the set of actions it requires.

/**
 * In this example, we have a RobotOne that can spin around, rotate arms and wiggle antennas.
 * We have a RobotTwo that can spin around and rotate arms.
 * Imagine that someone ask a RobotTwo to wiggle antennas. This is a violation of Interface Segregation Principle.
 */

interface RobotSpin {
    public function spinAround();
}

interface RobotRotateArms {
    public function rotateArms();
}

interface RobotWiggleAntennas {
    public function wiggleAntennas();
}

class RobotOne implements RobotSpin, RobotRotateArms, RobotWiggleAntennas {
    public function spinAround() {
        return "RobotOne is spinning around";
    }

    public function rotateArms() {
        return "RobotOne is rotating arms";
    }

    public function wiggleAntennas() {
        return "RobotOne is wiggling antennas";
    }
}

class RobotTwo implements RobotSpin, RobotRotateArms {
    public function spinAround() {
        return "RobotTwo is spinning around";
    }

    public function rotateArms() {
        return "RobotTwo is rotating arms";
    }
}