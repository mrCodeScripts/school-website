<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management</title>
    <link rel="stylesheet" href="attendance.css">
</head>
<body>

    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h2>Teacher Panel</h2>
        <ul>
            <li><a href="/student/dashboard">🏠 Dashboard</a></li>
            <li><a href="/student/assignments">📑 Assignments</a></li>
            <li><a href="/student/tasks">✅ Tasks</a></li>
            <li><a href="/student/grades">📊 Grades</a></li>
            <li><a href="/student/learningMaterials">📚 Learning Materials</a></li>
            <li><a href="/student/attendance" class="active">🕒 Attendance</a></li>
            <li><a href="/student/message-forums">💬 Messages & Forums</a></li>
            <li><a href="/student/schedules">📅 Schedule</a></li>
            <li><a href="/student/settings">⚙️ Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        
        <!-- Page Header -->
        <div class="page-header">
            <h1>Attendance Management</h1>
            <p>Track student attendance efficiently and manage records.</p>
        </div>

        <!-- Attendance Filters -->
        <div class="filters">
            <label for="date">Date:</label>
            <input type="date" id="date">
            
            <label for="class">Class:</label>
            <select id="class">
                <option value="all">All Classes</option>
                <option value="math">Mathematics</option>
                <option value="science">Science</option>
                <option value="history">History</option>
            </select>

            <label for="period">Period:</label>
            <select id="period">
                <option value="all">All Periods</option>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
            </select>

            <button class="filter-btn">Filter</button>
        </div>

        <!-- Attendance Table -->
        <div class="attendance-list">
            <h2>Student Attendance</h2>
            <table>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Period</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Mathematics</td>
                        <td>Morning</td>
                        <td><span class="status present">Present</span></td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="remove-btn">Remove</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Science</td>
                        <td>Afternoon</td>
                        <td><span class="status absent">Absent</span></td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="remove-btn">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Attendance Submission -->
        <div class="attendance-submit">
            <h2>Mark Attendance</h2>
            <form>
                <label for="student">Student:</label>
                <select id="student">
                    <option>Select Student</option>
                    <option value="john">John Doe</option>
                    <option value="jane">Jane Smith</option>
                </select>

                <label for="attendance-period">Period:</label>
                <select id="attendance-period">
                    <option value="morning">Morning</option>
                    <option value="afternoon">Afternoon</option>
                </select>

                <label for="status">Status:</label>
                <select id="status">
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                    <option value="late">Late</option>
                </select>

                <button type="submit" class="submit-btn">Submit Attendance</button>
            </form>
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
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    background-color: #f4f7fc;
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
    margin-left: 270px !important;
    flex: 1;
    padding: 20px;
}

/* Page Header */
.page-header {
    background: white;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.page-header h1 {
    font-size: 24px;
    color: #333;
}

/* Attendance Filters */
.filters {
    display: flex;
    gap: 15px;
    background: white;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.filters label {
    font-weight: bold;
}

.filters input,
.filters select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.filter-btn {
    background: #3498db;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
}

.filter-btn:hover {
    background: #2980b9;
}

/* Attendance Table */
.attendance-list {
    background: white;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.attendance-list h2 {
    margin-bottom: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background: #3498db;
    color: white;
}

.status {
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
}

.status.present {
    background: #2ecc71;
    color: white;
}

.status.absent {
    background: #e74c3c;
    color: white;
}

.edit-btn,
.remove-btn {
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.edit-btn {
    background: #f1c40f;
    color: black;
}

.remove-btn {
    background: #e74c3c;
    color: white;
}

.edit-btn:hover {
    background: #f39c12;
}

.remove-btn:hover {
    background: #c0392b;
}

/* Attendance Submission */
.attendance-submit {
    background: white;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.attendance-submit h2 {
    margin-bottom: 15px;
}

.attendance-submit form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.attendance-submit label {
    font-weight: bold;
}

.attendance-submit select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-btn {
    background: #2ecc71;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.submit-btn:hover {
    background: #27ae60;
}

</style>