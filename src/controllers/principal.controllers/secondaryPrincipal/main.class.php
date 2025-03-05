<?php

declare(strict_types=1);

class SecondaryPrincipal {
    private $principalId;
    private $principalUUID;
    
    public function __construct(string $principalId, string $principalUUID) 
    {
        $this->principalId = $principalId; 
        $this->principalUUID = $principalUUID; 
    }

    // For Student disciplinary 
    public function addDisciplinaryRecord () {

    }

    public function viewStudentBehaviourReports ():void {

    }

    public function issueStudentBehaviourWarnings (): void {

    }

    public function notifyParentOnStudentBehaviour (): void {

    }

    public function generateStudentBehaviourReports (): void {

    }

    // For Teacher performance
    public function addScheduleClassroomObservations (): void {

    }

    public function cancelScheduleClassroomObservations (): void {

    }

    public function recordTeacherPerformance (): void {

    }

    public function manageTeacherEvaluationReports (): void {

    }

    // For teachers and staff
    public function approveLeaveRequests (): void {

    }

    public function rejectLeaveRequests (): void {

    }

    public function viewLeaveBalances (): void {

    }
}