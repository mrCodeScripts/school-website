<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Assignments</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Student Panel</h2>
            <ul>
                <li><a href="/student/dashboard">🏠 Dashboard</a></li>
                <li><a href="/student/assignments" class="active">📑 Assignments</a></li>
                <li><a href="/student/tasks">✅ Tasks</a></li>
                <li><a href="/student/grades">📊 Grades</a></li>
                <li><a href="/student/learningMaterials">📚 Learning Materials</a></li>
                <li><a href="/student/attendance">🕒 Attendance</a></li>
                <li><a href="/student/message-forums">💬 Messages & Forums</a></li>
                <li><a href="/student/schedules">📅 Schedule</a></li>
                <li><a href="/student/settings">⚙️ Settings</a></li>

            </ul>
        </aside>

        <!-- Main Content -->
        <main class="content">
            <header class="page-header">
                <h1>📑 Assignments</h1>
                <p>Manage and submit your assignments here.</p>
            </header>

            <!-- Assignment Filters -->
            <section class="filters">
                <label for="subject">📘 Subject:</label>
                <select id="subject">
                    <option>All Subjects</option>
                    <option>Mathematics</option>
                    <option>Science</option>
                    <option>English</option>
                    <option>History</option>
                </select>

                <label for="status">📌 Status:</label>
                <select id="status">
                    <option>All</option>
                    <option>Pending</option>
                    <option>Submitted</option>
                    <option>Graded</option>
                </select>

                <button class="filter-btn">🔍 Apply Filter</button>
            </section>

            <!-- Assignment List -->
            <section class="assignment-list">
                <table>
                    <thead>
                        <tr>
                            <th>📘 Subject</th>
                            <th>📑 Title</th>
                            <th>📅 Due Date</th>
                            <th>📌 Status</th>
                            <th>⚡ Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mathematics</td>
                            <td>Algebra Homework</td>
                            <td>March 5, 2025</td>
                            <td class="status pending">Pending</td>
                            <td><button class="submit-btn">📤 Submit</button></td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td>Physics Experiment Report</td>
                            <td>March 7, 2025</td>
                            <td class="status submitted">Submitted</td>
                            <td><button class="view-btn">🔍 View</button></td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td>Essay on Literature</td>
                            <td>March 8, 2025</td>
                            <td class="status graded">Graded (88%)</td>
                            <td><button class="view-btn">🔍 View</button></td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Assignment Submission Panel -->
            <section class="assignment-submission">
                <h2>📤 Submit Assignment</h2>
                <form>
                    <label for="assignment-title">📑 Assignment Title:</label>
                    <input type="text" id="assignment-title" placeholder="Enter title">

                    <label for="file-upload">📂 Upload File:</label>
                    <input type="file" id="file-upload">

                    <label for="comments">💬 Additional Comments:</label>
                    <textarea id="comments" placeholder="Write any additional comments..."></textarea>

                    <button type="submit" class="submit-btn">📤 Submit Assignment</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
<style>
/* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

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
.content {
    margin-left: 270px;
    padding: 20px;
    flex: 1;
}

/* Page Header */
.page-header {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.page-header h1 {
    color: #2c3e50;
}

/* Filters Section */
.filters {
    display: flex;
    align-items: center;
    gap: 15px;
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.filters label {
    font-weight: bold;
}

.filters select,
.filters .filter-btn {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: #ecf0f1;
    cursor: pointer;
}

.filters .filter-btn {
    background: #3498db;
    color: white;
    border: none;
    padding: 10px 15px;
    transition: 0.3s;
}

.filters .filter-btn:hover {
    background: #2980b9;
}

/* Assignments Table */
.assignment-list {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.assignment-list table {
    width: 100%;
    border-collapse: collapse;
}

.assignment-list th,
.assignment-list td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.assignment-list th {
    background: #2c3e50;
    color: white;
}

.assignment-list .status {
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 5px;
}

.status.pending {
    background: #f1c40f;
    color: black;
}

.status.submitted {
    background: #3498db;
    color: white;
}

.status.graded {
    background: #27ae60;
    color: white;
}

.assignment-list button {
    padding: 8px 12px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.submit-btn {
    background: #27ae60;
    color: white;
}

.submit-btn:hover {
    background: #219150;
}

.view-btn {
    background: #3498db;
    color: white;
}

.view-btn:hover {
    background: #217dbb;
}

/* Assignment Submission Panel */
.assignment-submission {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.assignment-submission h2 {
    color: #2c3e50;
    margin-bottom: 15px;
}

.assignment-submission form {
    display: flex;
    flex-direction: column;
}

.assignment-submission label {
    font-weight: bold;
    margin-top: 10px;
}

.assignment-submission input,
.assignment-submission textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 5px;
}

.assignment-submission textarea {
    height: 100px;
    resize: none;
}

.assignment-submission button {
    margin-top: 15px;
    background: #27ae60;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.assignment-submission button:hover {
    background: #219150;
}
</style>