<?php

declare(strict_types=1);

include_once __DIR__ . "/../src/bootstrap.php";

Router::get("/", function () {
    include __DIR__ . "/../src/views/main.page.php";
    die();
});

Router::get("/login", function () {
    include __DIR__ . "/../src/views/auth.page/login/login.page.php";
    die();
});

Router::get("/signup", function () {
    include __DIR__ . "/../src/views/auth.page/signup/signup.page.php";
    die();
});

Router::get("/teacher/dashboard", function () {
    include __DIR__ . "/../src/views/teacher.views/teacher.dashboard.php";
    die();
});

Router::get("/teacher/grades", function () {
    include __DIR__ . "/../src/views/teacher.views/teacher.grades.dashb.php";
    die();
});

Router::get("/teacher/studentReports", function () {
    include __DIR__ . "/../src/views/teacher.views/teacher.studentReports.php";
    die();
});

Router::get("/teacher/messages", function () {
    include __DIR__ . "/../src/views/teacher.views/teacher.messages.php";
    die();
});

Router::get("/teacher/attendance", function () {
    include __DIR__ . "/../src/views/teacher.views/teacher.attendance.php";
    die();
});

Router::get("/teacher/schedule", function () {
    include __DIR__ . "/../src/views/teacher.views/teacher.schedule.php";
    die();
});

Router::get("/administrator/dashboard", function () {
    include __DIR__ . "/../src/views/administrator.views/administrator.dashboard.php";
    die();
});

Router::get("/administrator/accManager", function () {
    include __DIR__ . "/../src/views/administrator.views/administrator.accManager.php";
    die();
});

Router::get("/administrator/enrollment", function () {
    include __DIR__ . "/../src/views/administrator.views/administrator.enrollmentProcessing.php";
    die();
});

Router::get("/administrator/officialDocs", function () {
    include __DIR__ . "/../src/views/administrator.views/administrator.officialDocs.php";
    die();
});

Router::get("/administrator/studentStaffRec", function () {
    include __DIR__ . "/../src/views/administrator.views/administrator.studentStaffRec.php";
    die();
});

Router::get("/registrar/dashboard", function () {
    include __DIR__ . "/../src/views/registrar.views/registrar.dashboard.php";
    die();
});

Router::get("/registrar/studentEnrollment", function () {
    include __DIR__ . "/../src/views/registrar.views/registrar.studentEnrollment.php";
    die();
});

Router::get("/registrar/academicRec", function () {
    include __DIR__ . "/../src/views/registrar.views/registrar.acadRecords.php";
    die();
});

Router::get("/registrar/studentRecords", function () {
    include __DIR__ . "/../src/views/registrar.views/registrar.studenRecords.php";
    die();
});

Router::get("/registrar/transcripts", function () {
    include __DIR__ . "/../src/views/registrar.views/registrar.transcripts.php";
    die();
});

Router::get("/registrar/documents", function () {
    include __DIR__ . "/../src/views/registrar.views/registrar.documents.php";
    die();
});

Router::get("/student/dashboard", function () {
    include __DIR__ . "/../src/views/student.views/student.dashboard.php";
    die();
});

Router::get("/student/assignments", function () {
    include __DIR__ . "/../src/views/student.views/student.assignments.php";
    die();
});

Router::get("/student/tasks", function () {
    include __DIR__ . "/../src/views/student.views/student.tasks.php";
    die();
});

Router::get("/student/grades", function () {
    include __DIR__ . "/../src/views/student.views/student.grades.php";
    die();
});

Router::get("/student/learningMaterials", function () {
    include __DIR__ . "/../src/views/student.views/student.learningMaterials.php";
    die();
});

Router::get("/student/attendance", function () {
    include __DIR__ . "/../src/views/student.views/student.attendance.php";
    die();
});

Router::get("/student/message-forums", function () {
    include __DIR__ . "/../src/views/student.views/student.messageforums.php";
    die();
});

Router::get("/student/schedules", function () {
    include __DIR__ . "/../src/views/student.views/student.schedule.php";
    die();
});

Router::get("/parent/dashboard", function () {
    include __DIR__ . "/../src/views/parent.views/parent.dashboard.php";
    die();
});

Router::get("/parent/grade-performance", function () {
    include __DIR__ . "/../src/views/parent.views/parent.gradePerformance.php";
    die();
});

Router::get("/parent/attendance-record", function () {
    include __DIR__ . "/../src/views/parent.views/parent.attendanceRecord.php";
    die();
});

Router::get("/parent/assignment-tasks", function () {
    include __DIR__ . "/../src/views/parent.views/parent.assignmentTasks.php";
    die();
});

Router::get("/parent/school-announcements", function () {
    include __DIR__ . "/../src/views/parent.views/parent.schoolAnnouncements.php";
    die();
});

Router::get("/parent/message-communication", function () {
    include __DIR__ . "/../src/views/parent.views/parent.messageCommunication.php";
    die();
});

Router::get("/parent/disciplinary-reports", function () {
    include __DIR__ . "/../src/views/parent.views/parent.disciplinaryReports.php";
    die();
});

Router::get("/parent/fee-billing", function () {
    include __DIR__ . "/../src/views/parent.views/parent.feeBilling.php";
    die();
});

Router::get("/librarian/dashboard", function () {
    include __DIR__ . "/../src/views/librarian.views/librarian.dashboard.php";
    die();
});

Router::get("/librarian/book-inventory", function () {
    include __DIR__ . "/../src/views/librarian.views/librarian.bookInventory.php";
    die();
});

Router::get("/librarian/borrow-return", function () {
    include __DIR__ . "/../src/views/librarian.views/librarian.borrowReturn.php";
    die();
});

Router::get("/librarian/reports", function () {
    include __DIR__ . "/../src/views/librarian.views/librarian.reports.php";
    die();
});

Router::get("/librarian/resources", function () {
    include __DIR__ . "/../src/views/librarian.views/librarian.resources.php";
    die();
});

Router::get("/librarian/cards", function () {
    include __DIR__ . "/../src/views/librarian.views/librarian.cards.php";
    die();
});


Router::dispatch($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);