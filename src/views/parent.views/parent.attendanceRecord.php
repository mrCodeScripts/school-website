<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent - Attendance Record</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Parent Panel</h2>
        <ul>
            <li><a href="/parent/dashboard">Dashboard</a></li>
            <li><a href="/parent/grade-performance">Grades & Performance</a></li>
            <li><a href="/parent/attendance-record" class="active">Attendance Records</a></li>
            <li><a href="/parent/assignment-tasks">Assignments & Tasks</a></li>
            <li><a href="/parent/school-announcements">School Announcements</a></li>
            <li><a href="/parent/message-communication">Messages & Communication</a></li>
            <li><a href="/parent/disciplinary-reports">Disciplinary Reports</a></li>
            <li><a href="/parent/fee-billing">Fee & Billing</a></li>
            <li><a href="/parent/settings">Settings</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <section class="main-content">
        
        <!-- Header -->
        <div class="header">
            <h1>Attendance Records</h1>
            <p>Track your child's attendance and punctuality.</p>
        </div>

        <!-- Attendance Filters -->
        <div class="attendance-filters">
            <label for="date">Select Date:</label>
            <input type="date" id="date">

            <label for="subject">Filter by Subject:</label>
            <select id="subject">
                <option value="">All Subjects</option>
                <option value="Math">Math</option>
                <option value="Science">Science</option>
                <option value="English">English</option>
                <option value="History">History</option>
            </select>

            <label for="status">Attendance Status:</label>
            <select id="status">
                <option value="">All</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
                <option value="Late">Late</option>
            </select>

            <button class="filter-btn">Apply Filters</button>
        </div>

        <!-- Attendance Table -->
        <div class="attendance-section">
            <h2>Attendance Overview</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>Period</th>
                        <th>Status</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>March 1, 2025</td>
                        <td>Math</td>
                        <td>Morning</td>
                        <td class="present">Present</td>
                        <td>On time</td>
                    </tr>
                    <tr>
                        <td>March 1, 2025</td>
                        <td>Science</td>
                        <td>Afternoon</td>
                        <td class="late">Late</td>
                        <td>Arrived 15 mins late</td>
                    </tr>
                    <tr>
                        <td>March 2, 2025</td>
                        <td>English</td>
                        <td>Morning</td>
                        <td class="absent">Absent</td>
                        <td>Excused - Medical</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Attendance Chart -->
        <div class="attendance-report">
            <h2>Attendance Report</h2>
            <div class="chart-container">
                <img src="attendance-chart-placeholder.png" alt="Attendance Chart">
            </div>
        </div>

    </section>

</body>
</html>
<style>
/* Import Google Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    background-color: #f5f7fa;
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
    margin-left: 250px;
    width: calc(100% - 250px);
    padding: 20px;
    font-family: 'Poppins', sans-serif;
}

/* Header */
.header {
    background: #2980b9;
    color: white;
    padding: 15px 20px;
    border-radius: 8px;
}

.header h1 {
    font-size: 22px;
    font-weight: 600;
}

.header p {
    font-size: 14px;
    opacity: 0.8;
}

/* Attendance Filters */
.attendance-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    background: white;
    padding: 15px;
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.attendance-filters label {
    font-weight: 600;
}

.attendance-filters select, .attendance-filters input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.filter-btn {
    background: #27ae60;
    color: white;
    border: none;
    padding: 8px 15px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.filter-btn:hover {
    background: #219150;
}

/* Attendance Table */
.attendance-section {
    background: white;
    padding: 15px;
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.attendance-section h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.attendance-section table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.attendance-section table th, .attendance-section table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.attendance-section table th {
    background: #2980b9;
    color: white;
}

.present {
    color: #27ae60;
    font-weight: bold;
}

.late {
    color: #f39c12;
    font-weight: bold;
}

.absent {
    color: #c0392b;
    font-weight: bold;
}

/* Attendance Report */
.attendance-report {
    background: white;
    padding: 15px;
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.attendance-report h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.chart-container {
    text-align: center;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

</style>