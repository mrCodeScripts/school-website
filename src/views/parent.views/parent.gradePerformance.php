<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades & Performance</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Parent Portal</h2>
        <ul>
            <li><a href="/parent/dashboard">Dashboard</a></li>
            <li><a href="/parent/grade-performance" class="active">Grades & Performance</a></li>
            <li><a href="/parent/attendance-record">Attendance Records</a></li>
            <li><a href="/parent/assignment-tasks">Assignments & Tasks</a></li>
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
            <h1>Student Grades & Performance</h1>
            <p>Monitor your child's academic progress</p>
        </div>

        <!-- Grade Summary -->
        <div class="grade-summary">
            <div class="grade-card">
                <h3>Overall GPA</h3>
                <p>3.8 / 4.0</p>
            </div>
            <div class="grade-card">
                <h3>Current Term Grade</h3>
                <p>92%</p>
            </div>
            <div class="grade-card">
                <h3>Last Term Grade</h3>
                <p>89%</p>
            </div>
        </div>

        <!-- Detailed Grade Table -->
        <div class="grades-section">
            <h2>Detailed Grades</h2>
            <table>
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Midterm</th>
                        <th>Final</th>
                        <th>Overall</th>
                        <th>Teacher Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mathematics</td>
                        <td>91%</td>
                        <td>94%</td>
                        <td>92.5%</td>
                        <td>Excellent improvement!</td>
                    </tr>
                    <tr>
                        <td>Science</td>
                        <td>88%</td>
                        <td>90%</td>
                        <td>89%</td>
                        <td>Keep up the hard work!</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>85%</td>
                        <td>89%</td>
                        <td>87%</td>
                        <td>Great participation in class!</td>
                    </tr>
                    <tr>
                        <td>History</td>
                        <td>92%</td>
                        <td>95%</td>
                        <td>93.5%</td>
                        <td>Outstanding effort!</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Performance Trends -->
        <div class="performance-section">
            <h2>Performance Trends</h2>
            <div class="chart-container">
                <img src="performance-chart-placeholder.png" alt="Performance Chart">
            </div>
        </div>

        <!-- Teacher Feedback -->
        <div class="feedback-section">
            <h2>Teacher Feedback</h2>
            <p>Here are some comments from teachers regarding your child's academic performance:</p>
            <ul>
                <li>Mathematics: "Strong understanding of concepts, but should work on speed in problem-solving."</li>
                <li>Science: "Very curious and asks great questions in class."</li>
                <li>English: "Needs to focus on writing structure, but has good creativity."</li>
                <li>History: "Participates actively and engages in discussions."</li>
            </ul>
        </div>

    </div>

</body>
</html>
<style>
/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    display: flex;
    background-color: #f4f6f9;
    color: #333;
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
    padding: 20px;
    width: calc(100% - 250px);
}

/* Header */
.header {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.header h1 {
    font-size: 24px;
    color: #2c3e50;
}

.header p {
    font-size: 14px;
    color: #7f8c8d;
}

/* Grade Summary Cards */
.grade-summary {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.grade-card {
    background: white;
    flex: 1;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.grade-card h3 {
    font-size: 18px;
    color: #2c3e50;
}

.grade-card p {
    font-size: 24px;
    font-weight: bold;
    color: #1abc9c;
}

/* Grade Table */
.grades-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.grades-section h2 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #2c3e50;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table thead {
    background: #1abc9c;
    color: white;
}

table th, table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

table tr:hover {
    background: #f1f1f1;
}

/* Performance Trends */
.performance-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.performance-section h2 {
    font-size: 20px;
    color: #2c3e50;
}

.chart-container {
    text-align: center;
    margin-top: 10px;
}

.chart-container img {
    width: 100%;
    max-width: 600px;
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

/* Teacher Feedback */
.feedback-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.feedback-section h2 {
    font-size: 20px;
    color: #2c3e50;
    margin-bottom: 10px;
}

.feedback-section ul {
    list-style: none;
}

.feedback-section ul li {
    background: #ecf0f1;
    padding: 10px;
    margin-bottom: 5px;
    border-left: 5px solid #1abc9c;
    font-size: 14px;
}

</style>