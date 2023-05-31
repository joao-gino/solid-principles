<?php

// Liskov Substitution Principle
// If S is a subtype of T, then objects of type T in a program may be replaced with objects of type S without altering any of the desirable properties of that program.
// This principle aims to enforce consistency so that the parent Class or its child Class can be used in the same way without any errors.

/**
 * In this example, we have a Sam that makes coffee. We have a Sam's child class Eden that makes latte.
 * Imagine that when someone ask a coffee for Eden and Eden gives a water instead of latte. This is a violation of Liskov Substitution Principle.
 */

class Sam {
    protected $sugar = 1;
    protected $coffee = 1;
    protected $milk = 0;

    public function setSugar($sugar) {
        $this->sugar = $sugar;
    }

    public function setCoffee($coffee) {
        $this->coffee = $coffee;
    }

    public function setMilk($milk) {
        $this->milk = $milk;
    }

    public function getSugar() {
        return $this->sugar;
    }

    public function getCoffee() {
        return $this->coffee;
    }

    public function getMilk() {
        return $this->milk;
    }

    public function make() {
        return "Coffee is ready";
    }
}

class Eden extends Sam {
    public function setMilk($milk) {
        $this->milk = $milk;
    }

    public function make() {
        $this->milk = 1;
        return "Latte is ready";
    }
}