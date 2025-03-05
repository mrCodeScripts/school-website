<?php

declare(strict_types=1);

class StudentController {
    private $studentId;
    private $studentUUID;

    public function __construct (string $studentId, $studentUUID) {
        $this->studentId = $studentId;
        $this->studentUUID = $studentUUID;
    }
}
