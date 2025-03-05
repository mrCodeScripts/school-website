<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent - Assignments & Tasks</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Parent Dashboard</h2>
        <ul>
            <li><a href="/parent/dashboard">Dashboard</a></li>
            <li><a href="/parent/grade-performance">Grades & Performance</a></li>
            <li><a href="/parent/attendance-record">Attendance Records</a></li>
            <li><a href="/parent/assignment-tasks" class="active">Assignments & Tasks</a></li>
            <li><a href="/parent/school-announcements">School Announcements</a></li>
            <li><a href="/parent/message-communication">Messages & Communication</a></li>
            <li><a href="/parent/disciplinary-reports">Disciplinary Reports</a></li>
            <li><a href="/parent/fee-billing">Fee & Billing</a></li>
            <li><a href="/parent/settings">Settings</a></li>

        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Assignments & Tasks</h1>
            <p>Track your child's assignments, deadlines, and daily tasks.</p>
        </div>

        <!-- Assignments Section -->
        <div class="assignments-section">
            <h2>📌 Assignments Overview</h2>
            <table>
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Title</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Teacher Feedback</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Math</td>
                        <td>Algebra Worksheet</td>
                        <td>March 5, 2025</td>
                        <td class="pending">Pending</td>
                        <td>-</td>
                        <td><a href="#">⬇️ Download</a></td>
                    </tr>
                    <tr>
                        <td>Science</td>
                        <td>Physics Lab Report</td>
                        <td>March 3, 2025</td>
                        <td class="submitted">Submitted</td>
                        <td>Well done!</td>
                        <td><a href="#">⬇️ Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Daily Tasks Section -->
        <div class="tasks-section">
            <h2>✅ Daily Tasks</h2>
            <ul class="task-list">
                <li>
                    <input type="checkbox" id="task1" checked>
                    <label for="task1">Review Math Assignment</label>
                </li>
                <li>
                    <input type="checkbox" id="task2">
                    <label for="task2">Prepare Science Notes</label>
                </li>
                <li>
                    <input type="checkbox" id="task3">
                    <label for="task3">Complete Reading for English</label>
                </li>
            </ul>
        </div>
    </div>

</body>
</html>
<style>
/* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    display: flex;
    background: #f4f6f9;
}

.sidebar {
    position: fixed;
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    min-height: 100vh;
    font-family: sans-serif;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
    transition: background 0.3s;
}

.sidebar ul li a.active, .sidebar ul li a:hover {
    background-color: #34495e;
}


/* Main Content */
.main-content {
    margin-left: 260px;
    padding: 30px;
    width: calc(100% - 260px);
}

.header h1 {
    font-size: 28px;
    color: #2c3e50;
}

.header p {
    font-size: 16px;
    color: #7f8c8d;
    margin-bottom: 20px;
}

/* Assignments Table */
.assignments-section h2, 
.tasks-section h2 {
    font-size: 22px;
    margin-bottom: 10px;
    color: #2c3e50;
}

table {
    width: 100%;
    background: white;
    border-collapse: collapse;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

table thead {
    background: #2c3e50;
    color: white;
}

table th, table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table td a {
    text-decoration: none;
    color: #3498db;
    font-weight: bold;
}

table tr:hover {
    background: #f1f1f1;
}

/* Status Colors */
.pending {
    color: #e67e22;
    font-weight: bold;
}

.submitted {
    color: #27ae60;
    font-weight: bold;
}

/* Task List */
.task-list {
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    list-style: none;
}

.task-list li {
    padding: 10px;
    font-size: 16px;
    display: flex;
    align-items: center;
}

.task-list input[type="checkbox"] {
    margin-right: 10px;
    transform: scale(1.3);
    cursor: pointer;
}

.task-list input[type="checkbox"]:checked + label {
    text-decoration: line-through;
    color: #27ae60;
    transition: 0.3s;
}
</style>