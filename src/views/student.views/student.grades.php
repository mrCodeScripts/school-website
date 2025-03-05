<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <link rel="stylesheet" href="grades.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Student Panel</h2>
        <ul>
            <li><a href="/student/dashboard">🏠 Dashboard</a></li>
            <li><a href="/student/assignments">📑 Assignments</a></li>
            <li><a href="/student/tasks">✅ Tasks</a></li>
            <li><a href="/student/grades" class="active">📊 Grades</a></li>
            <li><a href="/student/learningMaterials">📚 Learning Materials</a></li>
            <li><a href="/student/attendance">🕒 Attendance</a></li>
            <li><a href="/student/message-forums">💬 Messages & Forums</a></li>
            <li><a href="/student/schedules">📅 Schedule</a></li>
            <li><a href="/student/settings">⚙️ Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="page-header">
            <h1>📊 Grades Overview</h1>
            <p>Track your academic performance and view detailed grade breakdowns.</p>
        </div>

        <!-- Filters Section -->
        <div class="filters">
            <label for="filter-term">Select Term:</label>
            <select id="filter-term">
                <option value="all">All Terms</option>
                <option value="term1">Term 1</option>
                <option value="term2">Term 2</option>
                <option value="final">Final Term</option>
            </select>

            <label for="filter-subject">Select Subject:</label>
            <select id="filter-subject">
                <option value="all">All Subjects</option>
                <option value="math">Mathematics</option>
                <option value="science">Science</option>
                <option value="history">History</option>
                <option value="english">English</option>
            </select>

            <button class="filter-btn">Apply Filter</button>
        </div>

        <!-- Grades Table -->
        <div class="grades-list">
            <h2>📜 Grade Report</h2>
            <table>
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Term 1</th>
                        <th>Term 2</th>
                        <th>Final</th>
                        <th>Overall Grade</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mathematics</td>
                        <td>89</td>
                        <td>85</td>
                        <td>90</td>
                        <td>88</td>
                        <td><span class="pass">Passed</span></td>
                    </tr>
                    <tr>
                        <td>Science</td>
                        <td>76</td>
                        <td>80</td>
                        <td>78</td>
                        <td>78</td>
                        <td><span class="pass">Passed</span></td>
                    </tr>
                    <tr>
                        <td>History</td>
                        <td>65</td>
                        <td>70</td>
                        <td>72</td>
                        <td>69</td>
                        <td><span class="fail">Failed</span></td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>92</td>
                        <td>88</td>
                        <td>90</td>
                        <td>90</td>
                        <td><span class="pass">Passed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Grade Breakdown Section -->
        <div class="grade-breakdown">
            <h2>📑 Grade Breakdown</h2>
            <p>Select a subject to view detailed breakdown.</p>
            <select id="breakdown-subject">
                <option value="math">Mathematics</option>
                <option value="science">Science</option>
                <option value="history">History</option>
                <option value="english">English</option>
            </select>
            <button class="view-details">View Details</button>
            
            <div class="breakdown-content">
                <h3>Mathematics Breakdown</h3>
                <p>Assignments: 40% | Quizzes: 30% | Exams: 30%</p>
                <p>Final Score: <strong>88%</strong></p>
                <p>Teacher's Comment: <em>"Great improvement! Keep up the hard work."</em></p>
            </div>
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
    background-color: #f4f7fc;
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
.content {
    margin-left: 270px;
    padding: 20px;
    width: calc(100% - 270px);
}

.page-header h1 {
    font-size: 28px;
    color: #2c3e50;
}

.page-header p {
    font-size: 16px;
    color: #666;
    margin-top: 5px;
}

/* Filters Section */
.filters {
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    display: flex;
    gap: 15px;
    align-items: center;
    margin-top: 20px;
}

.filters label {
    font-weight: bold;
    color: #333;
}

.filters select {
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.filter-btn {
    background-color: #1abc9c;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: 0.3s;
}

.filter-btn:hover {
    background-color: #16a085;
}

/* Grades Table */
.grades-list {
    margin-top: 30px;
}

.grades-list h2 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #2c3e50;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

table th,
table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

table th {
    background: #1abc9c;
    color: white;
}

table tr:nth-child(even) {
    background: #f9f9f9;
}

.pass {
    color: green;
    font-weight: bold;
}

.fail {
    color: red;
    font-weight: bold;
}

/* Grade Breakdown */
.grade-breakdown {
    margin-top: 30px;
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.grade-breakdown h2 {
    font-size: 22px;
    color: #2c3e50;
    margin-bottom: 10px;
}

.breakdown-content {
    margin-top: 10px;
    background: #ecf0f1;
    padding: 10px;
    border-radius: 6px;
}

.breakdown-content h3 {
    font-size: 18px;
    color: #333;
}

.view-details {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
    transition: 0.3s;
}

.view-details:hover {
    background-color: #2980b9;
}

</style>