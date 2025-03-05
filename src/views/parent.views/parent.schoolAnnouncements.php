<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Announcements</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Parent Portal</h2>
        <ul>
            <li><a href="/parent/dashboard">Dashboard</a></li>
            <li><a href="/parent/grade-performance">Grades & Performance</a></li>
            <li><a href="/parent/attendance-record">Attendance Records</a></li>
            <li><a href="/parent/assignment-tasks">Assignments & Tasks</a></li>
            <li><a href="/parent/school-announcements" class="active">School Announcements</a></li>
            <li><a href="/parent/message-communication">Messages & Communication</a></li>
            <li><a href="/parent/disciplinary-reports">Disciplinary Reports</a></li>
            <li><a href="/parent/fee-billing">Fee & Billing</a></li>
            <li><a href="/parent/settings">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>📢 School Announcements</h1>
            <p>Stay updated with the latest news and events from the school.</p>
        </div>

        <!-- Filter Options -->
        <div class="announcement-filters">
            <label for="category">Filter by Category:</label>
            <select id="category">
                <option value="all">All</option>
                <option value="general">General</option>
                <option value="academic">Academic</option>
                <option value="events">Events</option>
                <option value="holidays">Holidays</option>
                <option value="urgent">Urgent</option>
            </select>
        </div>

        <!-- Announcements Section -->
        <div class="announcements-container">
            <div class="announcement">
                <div class="announcement-header">
                    <h3>📅 Parent-Teacher Conference</h3>
                    <span class="date">March 10, 2025</span>
                </div>
                <p>We invite all parents to join us for a Parent-Teacher Conference on March 10, where we will discuss student progress and school updates.</p>
                <button class="read-more">Read More</button>
            </div>

            <div class="announcement urgent">
                <div class="announcement-header">
                    <h3>⚠️ Urgent: School Closure Due to Weather</h3>
                    <span class="date">March 3, 2025</span>
                </div>
                <p>Due to severe weather conditions, school will be closed tomorrow. Please stay safe and check for further updates.</p>
                <button class="read-more">Read More</button>
            </div>

            <div class="announcement">
                <div class="announcement-header">
                    <h3>🏆 Academic Excellence Awards</h3>
                    <span class="date">March 1, 2025</span>
                </div>
                <p>Join us in celebrating the achievements of our outstanding students in the upcoming Academic Excellence Awards ceremony.</p>
                <button class="read-more">Read More</button>
            </div>

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

body {
    display: flex;
    background-color: #f4f4f4;
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
    margin-left: 270px;
    padding: 20px;
    width: calc(100% - 270px);
}

.header {
    background: #ffffff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.header h1 {
    font-size: 24px;
    color: #2c3e50;
}

.header p {
    font-size: 14px;
    color: #7f8c8d;
}

/* Filters */
.announcement-filters {
    background: #ffffff;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
}

.announcement-filters label {
    font-weight: bold;
    margin-right: 10px;
    color: #2c3e50;
}

.announcement-filters select {
    padding: 8px;
    border: 1px solid #bdc3c7;
    border-radius: 5px;
    cursor: pointer;
}

/* Announcements Container */
.announcements-container {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Announcement Box */
.announcement {
    background: #ffffff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: 0.3s ease;
}

.announcement:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

/* Announcement Header */
.announcement-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.announcement h3 {
    font-size: 18px;
    color: #2c3e50;
}

.date {
    font-size: 12px;
    color: #7f8c8d;
}

/* Urgent Announcement Styling */
.urgent {
    border-left: 5px solid #e74c3c;
    background-color: #ffebe6;
}

.urgent h3 {
    color: #c0392b;
}

/* Read More Button */
.read-more {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    margin-top: 10px;
    transition: 0.3s;
}

.read-more:hover {
    background-color: #2980b9;
}

</style>