<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Reports</title>
    <link rel="stylesheet" href="student-reports.css">
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Teacher Panel</h2>
        <ul>
            <li><a href="/teacher/dashboard">Dashboard</a></li>
            <li><a href="/teacher/attendance">Attendance</a></li>
            <li><a href="/teacher/grades">Grade Management</a></li>
            <li><a href="/teacher/studentReports" class="active">Student Reports</a></li>
            <li><a href="/teacher/messages">Messages</a></li>
            <li><a href="/teacher/schedule">Schedule</a></li>
            <li><a href="/teacher/settings">Settings</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="header">
            <h1>Student Reports</h1>
            <button class="export-btn">Download Report</button>
        </header>

        <!-- Search & Filter Section -->
        <section class="filter-section">
            <label for="student-search">Search Student:</label>
            <input type="text" id="student-search" placeholder="Enter student name or ID">
            
            <label for="class-filter">Class:</label>
            <select id="class-filter">
                <option value="all">All Classes</option>
                <option value="grade-1">Grade 1</option>
                <option value="grade-2">Grade 2</option>
                <option value="grade-3">Grade 3</option>
            </select>

            <label for="report-type">Report Type:</label>
            <select id="report-type">
                <option value="grades">Grades</option>
                <option value="attendance">Attendance</option>
                <option value="discipline">Disciplinary</option>
            </select>

            <button class="filter-btn">Filter</button>
        </section>

        <!-- Student Report Table -->
        <section class="report-container">
            <h2>Student Report Overview</h2>
            <table class="report-table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Average Grade</th>
                        <th>Attendance</th>
                        <th>Remarks</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>John Doe</td>
                        <td>Grade 3</td>
                        <td>89%</td>
                        <td>95%</td>
                        <td>Excellent Performance</td>
                        <td><button class="view-btn">View Full Report</button></td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Jane Smith</td>
                        <td>Grade 3</td>
                        <td>76%</td>
                        <td>88%</td>
                        <td>Needs Improvement</td>
                        <td><button class="view-btn">View Full Report</button></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Graphical Performance Summary -->
        <section class="performance-chart">
            <h2>Performance Summary</h2>
            <canvas id="performanceChart"></canvas>
        </section>

        <!-- Teacher Remarks Section -->
        <section class="remarks-section">
            <h2>Teacher Remarks</h2>
            <textarea placeholder="Enter remarks for the student..."></textarea>
            <button class="save-remarks">Save Remarks</button>
        </section>

        <!-- Parent Communication -->
        <section class="parent-communication">
            <h2>Communicate with Parents</h2>
            <button class="message-parent">Send Message</button>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="student-reports.js"></script>
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
    background-color: #f4f6f9;
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
    margin-left: 250px;
    width: calc(100% - 250px);
    padding: 20px;
}

/* Header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.header h1 {
    font-size: 22px;
}

.export-btn {
    background: #27ae60;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.export-btn:hover {
    background: #219150;
}

/* Filter Section */
.filter-section {
    background: white;
    padding: 15px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.filter-section label {
    font-size: 14px;
    font-weight: bold;
}

.filter-section input,
.filter-section select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.filter-btn {
    background: #2980b9;
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.filter-btn:hover {
    background: #216a94;
}

/* Report Table */
.report-container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.report-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.report-table th,
.report-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.report-table th {
    background: #3498db;
    color: white;
    font-size: 14px;
}

.report-table td {
    font-size: 14px;
}

.view-btn {
    background: #e67e22;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
}

.view-btn:hover {
    background: #d36200;
}

/* Performance Chart */
.performance-chart {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    text-align: center;
}

/* Remarks Section */
.remarks-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.remarks-section textarea {
    width: 100%;
    height: 100px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    resize: none;
}

.save-remarks {
    background: #16a085;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.save-remarks:hover {
    background: #12806d;
}

/* Parent Communication */
.parent-communication {
    background: white;
    padding: 20px;
    border-radius: 8px;
}

.message-parent {
    background: #c0392b;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.message-parent:hover {
    background: #a93122;
}

</style>