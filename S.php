<?php

// Single Responsibility Principle
// A class should have a single responsibility
// This principle aims to separate behaviors so that if bugs arise as a result of your change, it won't affect other unrelated behaviors.

/**
 * In this example, we have four classes, each with a single responsibility.
 */

class Chef {
    public function makeBurger() {
        // ...
    }

    public function makeFries() {
        // ...
    }

    public function makeCombo() {
        $this->makeBurger();
        $this->makeFries();
    }
}

class Gardener {
    public function waterPlants() {
        // ...
    }

    public function trimPlants() {
        // ...
    }

    public function tendGarden() {
        $this->waterPlants();
        $this->trimPlants();
    }
}

class Painter {
    public function paintHouse() {
        // ...
    }

    public function paintFence() {
        // ...
    }

    public function paintOutside() {
        $this->paintHouse();
        $this->paintFence();
    }
}

class Driver {
    public function driveToWork() {
        // ...
    }

    public function driveHome() {
        // ...
    }

    public function drive() {
        $this->driveToWork();
        $this->driveHome();
    }
}