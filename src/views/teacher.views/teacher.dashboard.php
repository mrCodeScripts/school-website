<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Teacher Panel</h2>
            <ul>
                <li><a href="/teacher/dashboard" class="active">Dashboard</a></li>
                <li><a href="/teacher/attendance">Attendance</a></li>
                <li><a href="/teacher/grades">Grade Management</a></li>
                <li><a href="/teacher/studentReports">Student Reports</a></li>
                <li><a href="/teacher/messages">Messages</a></li>
                <li><a href="/teacher/schedule">Schedule</a></li>
                <li><a href="/teacher/settings">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="dashboard-header">
                <h1>Welcome, <span class="teacher-name">Mr. Johnson</span></h1>
                <div class="header-info">
                    <span class="date">Monday, March 3, 2025</span>
                    <button class="logout-btn">Logout</button>
                </div>
            </header>

            <!-- Stats Overview -->
            <section class="stats-overview">
                <div class="stat-card">
                    <h3>Attendance Rate</h3>
                    <p>92%</p>
                </div>
                <div class="stat-card">
                    <h3>Pending Assignments</h3>
                    <p>3</p>
                </div>
                <div class="stat-card">
                    <h3>Student Reports</h3>
                    <p>5 New</p>
                </div>
                <div class="stat-card">
                    <h3>Unread Messages</h3>
                    <p>7</p>
                </div>
            </section>

            <!-- Quick Actions -->
            <section class="quick-actions">
                <h2>Quick Actions</h2>
                <div class="action-buttons">
                    <button class="btn">Mark Attendance</button>
                    <button class="btn">Grade Assignments</button>
                    <button class="btn">View Reports</button>
                    <button class="btn">Send Message</button>
                </div>
            </section>

            <!-- Student Performance Graph -->
            <section class="performance-overview">
                <h2>Student Performance Analytics</h2>
                <div class="graph-placeholder">📊 Graphs & Stats Here</div>
            </section>

            <!-- Recent Messages & Notifications -->
            <section class="recent-updates">
                <div class="updates-column">
                    <h2>Recent Messages</h2>
                    <ul class="messages-list">
                        <li>John Doe: "Need help with assignment..."</li>
                        <li>Parent of Sarah: "Concern about grades..."</li>
                        <li>Principal: "Meeting scheduled for Friday."</li>
                    </ul>
                </div>
                <div class="updates-column">
                    <h2>Notifications</h2>
                    <ul class="notifications-list">
                        <li>New assignment submitted by Alex</li>
                        <li>School meeting at 2 PM</li>
                        <li>New student enrolled in your class</li>
                    </ul>
                </div>
            </section>
        </main>
    </div>

</body>
</html>

<style>
/* Reset and Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #f4f7fc;
    display: flex;
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
.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 15px 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.dashboard-header h1 {
    font-size: 24px;
    color: #2c3e50;
}

.dashboard-header .header-info {
    display: flex;
    align-items: center;
}

.header-info .date {
    margin-right: 20px;
    font-weight: bold;
    color: #555;
}

.logout-btn {
    background: #e74c3c;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.logout-btn:hover {
    background: #c0392b;
}

/* Stats Overview */
.stats-overview {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.stat-card {
    flex: 1;
    background: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.stat-card h3 {
    color: #2c3e50;
    font-size: 18px;
}

.stat-card p {
    font-size: 24px;
    font-weight: bold;
    color: #1abc9c;
}

/* Quick Actions */
.quick-actions {
    margin-top: 30px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.quick-actions h2 {
    color: #2c3e50;
    margin-bottom: 10px;
}

.action-buttons {
    display: flex;
    gap: 10px;
}

.btn {
    flex: 1;
    padding: 12px;
    border: none;
    background: #3498db;
    color: #fff;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.btn:hover {
    background: #2980b9;
}

/* Performance Overview */
.performance-overview {
    margin-top: 30px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.performance-overview h2 {
    color: #2c3e50;
    margin-bottom: 10px;
}

.graph-placeholder {
    height: 200px;
    background: #ecf0f1;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #555;
    border-radius: 5px;
}

/* Recent Messages & Notifications */
.recent-updates {
    display: flex;
    gap: 20px;
    margin-top: 30px;
}

.updates-column {
    flex: 1;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.updates-column h2 {
    color: #2c3e50;
    margin-bottom: 10px;
}

.messages-list,
.notifications-list {
    list-style: none;
}

.messages-list li,
.notifications-list li {
    background: #ecf0f1;
    padding: 10px;
    margin-bottom: 5px;
    border-radius: 5px;
}

.messages-list li:hover,
.notifications-list li:hover {
    background: #d5dbdb;
}

/* Responsive */
@media (max-width: 900px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 200px;
        width: calc(100% - 200px);
    }

    .stats-overview {
        flex-direction: column;
    }

    .recent-updates {
        flex-direction: column;
    }
}

@media (max-width: 600px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .main-content {
        margin-left: 0;
        width: 100%;
    }
}

</style>