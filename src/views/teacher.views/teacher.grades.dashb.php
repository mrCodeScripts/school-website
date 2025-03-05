<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Management | Teacher Dashboard</title>
    <link rel="stylesheet" href="grades.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Teacher Panel</h2>
        <ul>
            <li><a href="/teacher/dashboard">Dashboard</a></li>
            <li><a href="/teacher/attendance">Attendance</a></li>
            <li><a href="/teacher/grades" class="active">Grade Management</a></li>
            <li><a href="/teacher/studentReports">Student Reports</a></li>
            <li><a href="/teacher/messages">Messages</a></li>
            <li><a href="/teacher/schedule">Schedule</a></li>
            <li><a href="/teacher/settings">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Grade Management</h1>
            <button class="export-btn">Export Grades</button>
        </div>

        <!-- Filter & Search -->
        <div class="filter-section">
            <label for="class">Class:</label>
            <select id="class">
                <option value="math">Math</option>
                <option value="science">Science</option>
                <option value="history">History</option>
            </select>

            <label for="term">Term:</label>
            <select id="term">
                <option value="Q1">Quarter 1</option>
                <option value="Q2">Quarter 2</option>
                <option value="Q3">Quarter 3</option>
                <option value="Q4">Quarter 4</option>
            </select>

            <input type="text" id="search-student" placeholder="Search student...">
            <button class="filter-btn">Filter</button>
        </div>

        <!-- Grade Table -->
        <div class="grades-container">
            <table class="grades-table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Subject</th>
                        <th>Grade</th>
                        <th>Remarks</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024001</td>
                        <td>John Doe</td>
                        <td>Math</td>
                        <td><input type="number" class="grade-input" value="85"></td>
                        <td><input type="text" class="remark-input" value="Good"></td>
                        <td>
                            <button class="save-btn">Save</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2024002</td>
                        <td>Jane Smith</td>
                        <td>Science</td>
                        <td><input type="number" class="grade-input" value="90"></td>
                        <td><input type="text" class="remark-input" value="Excellent"></td>
                        <td>
                            <button class="save-btn">Save</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Bulk Actions -->
        <div class="bulk-actions">
            <button class="bulk-save">Save All Changes</button>
            <button class="bulk-clear">Clear All</button>
        </div>

        <!-- Grade Summary -->
        <div class="grade-summary">
            <h2>Grade Summary</h2>
            <p>Average Grade: <span id="avg-grade">87</span></p>
            <p>Top Performer: <span id="top-student">Jane Smith</span></p>
            <p>Lowest Grade: <span id="low-grade">85</span></p>
        </div>
    </div>

</body>
</html>
<style>
    /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Body Styling */
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
    margin-left: 260px;
    width: calc(100% - 260px);
    padding: 20px;
}


/* Main Content */
.main-content {
    margin-left: 250px;
    padding: 20px;
    width: calc(100% - 250px);
}

/* Header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.header h1 {
    font-size: 24px;
}

.export-btn {
    background: #27ae60;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.export-btn:hover {
    background: #219150;
}

/* Filter Section */
.filter-section {
    background: white;
    padding: 15px;
    margin: 20px 0;
    display: flex;
    align-items: center;
    border-radius: 8px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.filter-section label {
    margin: 0 10px;
    font-weight: bold;
}

.filter-section select,
.filter-section input {
    padding: 8px;
    margin-right: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.filter-btn {
    background: #2980b9;
    color: white;
    border: none;
    padding: 8px 15px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.filter-btn:hover {
    background: #1c6691;
}

/* Grades Table */
.grades-container {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.grades-table {
    width: 100%;
    border-collapse: collapse;
}

.grades-table thead {
    background: #34495e;
    color: white;
}

.grades-table th,
.grades-table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.grades-table th {
    font-size: 16px;
}

.grades-table input {
    padding: 8px;
    width: 80px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Buttons */
.save-btn,
.delete-btn {
    padding: 8px 12px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.save-btn {
    background: #2ecc71;
    color: white;
}

.save-btn:hover {
    background: #27ae60;
}

.delete-btn {
    background: #e74c3c;
    color: white;
}

.delete-btn:hover {
    background: #c0392b;
}

/* Bulk Actions */
.bulk-actions {
    margin-top: 20px;
    text-align: right;
}

.bulk-save,
.bulk-clear {
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
    margin-left: 10px;
}

.bulk-save {
    background: #27ae60;
    color: white;
}

.bulk-save:hover {
    background: #219150;
}

.bulk-clear {
    background: #e74c3c;
    color: white;
}

.bulk-clear:hover {
    background: #c0392b;
}

/* Grade Summary */
.grade-summary {
    background: white;
    padding: 15px;
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.grade-summary h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.grade-summary p {
    font-size: 16px;
    margin: 5px 0;
}

.grade-summary span {
    font-weight: bold;
    color: #2980b9;
}

</style>