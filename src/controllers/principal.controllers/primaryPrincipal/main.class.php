<?php

declare(strict_types=1);

class MainPrincipal {
    private $principalId;
    private $principalUUID;
    
    public function __construct(string $principalId, string $principalUUID)
    {
        $this->principalId = $principalId;
        $this->principalUUID = $principalUUID;
    }

    // Reports
    public function viewWideReports (): void {

    }

    public function viewAttendanceStatistics (): void {

    }

    public function viewSchoolFinanceReports (): void {

    }

    public function generateSummaryReports (): void {

    }

    // Dicisions
    public function approveSchoolDecisions (): void {

    }

    // Events 
    public function addSchoolCalendarEvents (): void {

    }

    // Announcements
    public function createAnnouncements (): void {

    }

    public function canceAnnouncements (): void {

    }
}