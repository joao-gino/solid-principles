<?php

// Open/Closed Principle
// Classes should be open for extension, but closed for modification
// This principle aims to extend a Class’s behavior without changing the existing behavior of that Class. This is to avoid causing bugs wherever the Class is being used.

/**
 * In this modified example, we have applied the Open/Closed Principle by introducing an Operation interface. This interface defines the perform method that represents 
 * a generic operation that can be performed on a material. The Painter and Cutter classes both implement the Operation interface and provide their specific 
 * implementation of the perform method.
 */

interface Operation {
    public function perform($material);
}

class Painter implements Operation {
    public function perform($material) {
        // Perform painting operation
        // ...
    }
}

class Cutter implements Operation {
    public function perform($material) {
        // Perform cutting operation
        // ...
    }
}

class Driller implements Operation {
    public function perform($material) {
        // Perform drilling operation
        // ...
    }
}