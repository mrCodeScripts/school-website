<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Attendance Management</title>
    <link rel="stylesheet" href="attendance.css">
</head>
<body>

    <!-- Sidebar (Reused from previous UI) -->
    <div class="sidebar">
        <h2>Teacher Panel</h2>
        <ul>
            <li><a href="/teacher/dashboard">Dashboard</a></li>
            <li><a href="/teacher/attendance" class="active">Attendance</a></li>
            <li><a href="/teacher/grades">Grade Management</a></li>
            <li><a href="/teacher/studentReports">Student Reports</a></li>
            <li><a href="/teacher/messages">Messages</a></li>
            <li><a href="/teacher/schedule">Schedule</a></li>
            <li><a href="/teacher/settings">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header class="attendance-header">
            <h1>Attendance Management</h1>
            <button class="export-btn">Export Report</button>
        </header>

        <!-- Filter Section -->
        <div class="filter-section">
            <label for="class-select">Select Class:</label>
            <select id="class-select">
                <option value="grade-10">Grade 10</option>
                <option value="grade-11">Grade 11</option>
                <option value="grade-12">Grade 12</option>
            </select>

            <label for="date-select">Select Date:</label>
            <input type="date" id="date-select">

            <button class="filter-btn">Apply Filter</button>
        </div>

        <!-- Attendance Table -->
        <div class="attendance-container">
            <table class="attendance-table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>
                            <select class="status-select">
                                <option value="present">Present</option>
                                <option value="absent">Absent</option>
                                <option value="late">Late</option>
                                <option value="excused">Excused</option>
                            </select>
                        </td>
                        <td><input type="text" class="comment-input" placeholder="Add a comment..."></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Jane Smith</td>
                        <td>
                            <select class="status-select">
                                <option value="present">Present</option>
                                <option value="absent">Absent</option>
                                <option value="late">Late</option>
                                <option value="excused">Excused</option>
                            </select>
                        </td>
                        <td><input type="text" class="comment-input" placeholder="Add a comment..."></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <button class="mark-all-btn present">Mark All Present</button>
            <button class="mark-all-btn absent">Mark All Absent</button>
            <button class="clear-btn">Clear Selection</button>
        </div>

        <!-- Attendance Summary -->
        <div class="attendance-summary">
            <h2>Attendance Summary</h2>
            <p><strong>John Doe:</strong> 92% Present</p>
            <p><strong>Jane Smith:</strong> 85% Present</p>
        </div>
    </div>

</body>
</html>
<style>
/* Reset and Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Layout */
body {
    display: flex;
    background-color: #f4f4f9;
}


.sidebar {
    position: fixed;
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    min-height: 100vh;
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
    width: calc(100% - 260px);
    padding: 20px;
}

/* Header */
.attendance-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #1abc9c;
    color: white;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.attendance-header h1 {
    font-size: 24px;
}

.export-btn {
    background: #fff;
    color: #1abc9c;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
}

.export-btn:hover {
    background: #16a085;
    color: #fff;
}

/* Filter Section */
.filter-section {
    display: flex;
    align-items: center;
    background: white;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.filter-section label {
    margin-right: 10px;
    font-weight: bold;
}

.filter-section select,
.filter-section input {
    padding: 8px;
    margin-right: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.filter-btn {
    background: #1abc9c;
    color: white;
    border: none;
    padding: 8px 15px;
    cursor: pointer;
    border-radius: 5px;
}

.filter-btn:hover {
    background: #16a085;
}

/* Attendance Table */
.attendance-container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.attendance-table {
    width: 100%;
    border-collapse: collapse;
}

.attendance-table th, .attendance-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.attendance-table th {
    background: #1abc9c;
    color: white;
}

.status-select {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
}

.comment-input {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
}

/* Quick Actions */
.quick-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

.mark-all-btn {
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
}

.present {
    background: #2ecc71;
    color: white;
}

.absent {
    background: #e74c3c;
    color: white;
}

.clear-btn {
    background: #f39c12;
    color: white;
}

.mark-all-btn:hover {
    opacity: 0.8;
}

/* Attendance Summary */
.attendance-summary {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.attendance-summary h2 {
    margin-bottom: 10px;
}

</style>