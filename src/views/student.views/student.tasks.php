<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Tasks</title>
    <link rel="stylesheet" href="tasks.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Student Panel</h2>
        <ul>
            <li><a href="/student/dashboard">🏠 Dashboard</a></li>
            <li><a href="/student/assignments">📑 Assignments</a></li>
            <li><a href="/student/tasks" class="active">✅ Tasks</a></li>
            <li><a href="/student/grades">📊 Grades</a></li>
            <li><a href="/student/learningMaterials">📚 Learning Materials</a></li>
            <li><a href="/student/attendance">🕒 Attendance</a></li>
            <li><a href="/student/message-forums">💬 Messages & Forums</a></li>
            <li><a href="/student/schedules">📅 Schedule</a></li>
            <li><a href="/student/settings">⚙️ Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">

        <!-- Page Header -->
        <div class="page-header">
            <h1>Daily Tasks</h1>
            <p>Manage and complete your daily school tasks efficiently.</p>
        </div>

        <!-- Filters Section -->
        <div class="filters">
            <label for="filter">Filter by:</label>
            <select id="filter">
                <option value="all">All Tasks</option>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="high-priority">High Priority</option>
            </select>
            <button class="filter-btn">Apply</button>
        </div>

        <!-- Tasks Table -->
        <div class="task-list">
            <h2>Task List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Deadline</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Complete Math Homework</td>
                        <td>March 5, 2025</td>
                        <td><span class="priority high">High</span></td>
                        <td><span class="status pending">Pending</span></td>
                        <td>
                            <button class="mark-complete">✔ Mark Complete</button>
                            <button class="view-details">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Read Chapter 4 - History</td>
                        <td>March 6, 2025</td>
                        <td><span class="priority medium">Medium</span></td>
                        <td><span class="status pending">Pending</span></td>
                        <td>
                            <button class="mark-complete">✔ Mark Complete</button>
                            <button class="view-details">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Science Experiment Report</td>
                        <td>March 7, 2025</td>
                        <td><span class="priority low">Low</span></td>
                        <td><span class="status completed">Completed</span></td>
                        <td>
                            <button class="view-details">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Task Submission Panel -->
        <div class="task-submission">
            <h2>Add a New Task</h2>
            <form>
                <label for="task-title">Task Title</label>
                <input type="text" id="task-title" placeholder="Enter task title">

                <label for="task-deadline">Deadline</label>
                <input type="date" id="task-deadline">

                <label for="task-priority">Priority</label>
                <select id="task-priority">
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>

                <label for="task-notes">Notes</label>
                <textarea id="task-notes" placeholder="Add details..."></textarea>

                <button type="submit">Add Task</button>
            </form>
        </div>

    </div>

</body>
</html>
<style>
/* General Page Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #f4f4f9;
    display: flex;
}

.sidebar {
    position: fixed;
    width: 220px;
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
    padding: 20px;
    width: calc(100% - 270px);
}

/* Page Header */
.page-header {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.page-header h1 {
    margin: 0;
    font-size: 24px;
}

/* Filters Section */
.filters {
    background: #ffffff;
    padding: 15px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.filters select {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.filter-btn {
    padding: 8px 15px;
    background: #3498db;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.filter-btn:hover {
    background: #2980b9;
}

/* Task List */
.task-list {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.task-list h2 {
    margin-top: 0;
}

.task-list table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.task-list th, 
.task-list td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.task-list th {
    background: #f1f1f1;
}

.priority {
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
}

.priority.high {
    background: #e74c3c;
    color: white;
}

.priority.medium {
    background: #f39c12;
    color: white;
}

.priority.low {
    background: #2ecc71;
    color: white;
}

.status {
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
}

.status.pending {
    background: #f1c40f;
    color: black;
}

.status.completed {
    background: #2ecc71;
    color: white;
}

.mark-complete {
    background: #27ae60;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s;
}

.mark-complete:hover {
    background: #219150;
}

.view-details {
    background: #3498db;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s;
}

.view-details:hover {
    background: #2980b9;
}

/* Task Submission Form */
.task-submission {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.task-submission h2 {
    margin-top: 0;
}

.task-submission form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.task-submission input,
.task-submission select,
.task-submission textarea {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 100%;
}

.task-submission textarea {
    height: 80px;
    resize: none;
}

.task-submission button {
    padding: 10px;
    background: #27ae60;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.task-submission button:hover {
    background: #219150;
}

</style>