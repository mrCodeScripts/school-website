<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Schedule</title>
    <link rel="stylesheet" href="schedule.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Student Panel</h2>
        <ul>
            <li><a href="/student/dashboard">🏠 Dashboard</a></li>
            <li><a href="/student/assignments">📑 Assignments</a></li>
            <li><a href="/student/tasks">✅ Tasks</a></li>
            <li><a href="/student/grades">📊 Grades</a></li>
            <li><a href="/student/learningMaterials">📚 Learning Materials</a></li>
            <li><a href="/student/attendance">🕒 Attendance</a></li>
            <li><a href="/student/message-forums">💬 Messages & Forums</a></li>
            <li><a href="/student/schedules" class="active">📅 Schedule</a></li>
            <li><a href="/student/settings">⚙️ Settings</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="content">
        <header class="page-header">
            <h1>📅 My Class Schedule</h1>
            <p>View and manage your weekly schedule.</p>
        </header>

        <!-- Schedule Controls -->
        <div class="schedule-controls">
            <label for="week-select">Select Week:</label>
            <input type="week" id="week-select">
            <button class="btn">Load Schedule</button>
        </div>

        <!-- Schedule Table -->
        <section class="schedule-section">
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>08:00 - 09:00</td>
                        <td>Math</td>
                        <td>English</td>
                        <td>History</td>
                        <td>Science</td>
                        <td>PE</td>
                    </tr>
                    <tr>
                        <td>09:00 - 10:00</td>
                        <td>Physics</td>
                        <td>Biology</td>
                        <td>Chemistry</td>
                        <td>Literature</td>
                        <td>Music</td>
                    </tr>
                    <tr>
                        <td>10:00 - 11:00</td>
                        <td colspan="5" class="break">Break</td>
                    </tr>
                    <tr>
                        <td>11:00 - 12:00</td>
                        <td>Computer Science</td>
                        <td>Art</td>
                        <td>Geography</td>
                        <td>Physics</td>
                        <td>English</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Add Custom Schedule -->
        <section class="add-schedule">
            <h2>Add Custom Schedule</h2>
            <form>
                <label for="subject">Subject:</label>
                <input type="text" id="subject" placeholder="Enter subject">

                <label for="day">Day:</label>
                <select id="day">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>

                <label for="time">Time:</label>
                <input type="time" id="time">

                <button type="submit" class="btn">Add to Schedule</button>
            </form>
        </section>

    </main>
</body>
</html>
<style>
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
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
    padding: 30px;
    width: calc(100% - 270px);
}

/* Page Header */
.page-header {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.page-header h1 {
    font-size: 24px;
    color: #333;
}

.page-header p {
    color: #666;
    margin-top: 5px;
}

/* Schedule Controls */
.schedule-controls {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 20px;
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.schedule-controls label {
    font-weight: bold;
}

.schedule-controls input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.schedule-controls .btn {
    background: #2980b9;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.schedule-controls .btn:hover {
    background: #1f618d;
}

/* Schedule Table */
.schedule-section {
    margin-top: 20px;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.schedule-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.schedule-table th,
.schedule-table td {
    border: 1px solid #ccc;
    padding: 15px;
    text-align: center;
}

.schedule-table th {
    background: #2980b9;
    color: white;
}

.schedule-table td {
    background: #ecf0f1;
}

.schedule-table .break {
    background: #f39c12;
    color: white;
    font-weight: bold;
}

/* Add Custom Schedule */
.add-schedule {
    margin-top: 20px;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.add-schedule h2 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
}

.add-schedule form {
    display: grid;
    gap: 15px;
}

.add-schedule label {
    font-weight: bold;
}

.add-schedule input,
.add-schedule select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
}

.add-schedule .btn {
    background: #27ae60;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.add-schedule .btn:hover {
    background: #219150;
}

</style>