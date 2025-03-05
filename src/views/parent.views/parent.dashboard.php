<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Parent Portal</h2>
            <ul>
                <li><a href="/parent/dashboard" class="active">Dashboard</a></li>
                <li><a href="/parent/grade-performance">Grades & Performance</a></li>
                <li><a href="/parent/attendance-record">Attendance Records</a></li>
                <li><a href="/parent/assignment-tasks">Assignments & Tasks</a></li>
                <li><a href="/parent/school-announcements">School Announcements</a></li>
                <li><a href="/parent/message-communication">Messages & Communication</a></li>
                <li><a href="/parent/disciplinary-reports">Disciplinary Reports</a></li>
                <li><a href="/parent/fee-billing">Fee & Billing</a></li>
                <li><a href="/parent/settings">Settings</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="dashboard-header">
                <h1>Welcome, Parent!</h1>
                <p>Stay updated on your child's progress and school activities.</p>
            </header>

            <!-- Overview Sections -->
            <section class="dashboard-overview">
                <div class="overview-card grades">
                    <h3>📊 Academic Performance</h3>
                    <p>Latest GPA: <strong>3.8</strong></p>
                    <a href="#">View Full Report</a>
                </div>

                <div class="overview-card attendance">
                    <h3>📅 Attendance</h3>
                    <p>Attendance Rate: <strong>95%</strong></p>
                    <a href="#">View Attendance Records</a>
                </div>

                <div class="overview-card assignments">
                    <h3>📝 Assignments & Tasks</h3>
                    <p>Pending Assignments: <strong>2</strong></p>
                    <a href="#">Check Assignments</a>
                </div>

                <div class="overview-card announcements">
                    <h3>📢 School Announcements</h3>
                    <p>Upcoming Event: <strong>PTA Meeting on March 10</strong></p>
                    <a href="#">View Announcements</a>
                </div>

                <div class="overview-card messages">
                    <h3>💬 Messages</h3>
                    <p>New Messages: <strong>1</strong></p>
                    <a href="#">Open Inbox</a>
                </div>
            </section>

            <!-- Recent Activity Section -->
            <section class="recent-activity">
                <h2>Recent Updates</h2>
                <ul>
                    <li><strong>Math Quiz:</strong> Your child scored 92% (A).</li>
                    <li><strong>Science Project:</strong> Submitted on time, awaiting grading.</li>
                    <li><strong>Attendance:</strong> Present for all classes last week.</li>
                    <li><strong>New Message:</strong> Teacher sent feedback on assignment.</li>
                </ul>
            </section>
        </main>
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
    background-color: #f5f6fa;
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
    margin-left: 270px;
    padding: 20px;
    width: calc(100% - 270px);
}

/* Dashboard Header */
.dashboard-header {
    background-color: #3498db;
    color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    margin-bottom: 20px;
}

/* Overview Section */
.dashboard-overview {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.overview-card {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: 0.3s;
}

.overview-card h3 {
    margin-bottom: 10px;
}

.overview-card p {
    font-size: 16px;
    color: #555;
}

.overview-card a {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    color: #3498db;
    font-weight: bold;
    transition: 0.3s;
}

.overview-card a:hover {
    text-decoration: underline;
}

.overview-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

/* Recent Activity */
.recent-activity {
    margin-top: 30px;
}

.recent-activity h2 {
    font-size: 22px;
    margin-bottom: 15px;
}

.recent-activity ul {
    list-style: none;
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.recent-activity ul li {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.recent-activity ul li:last-child {
    border-bottom: none;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }
    .main-content {
        margin-left: 220px;
        width: calc(100% - 220px);
    }
    .dashboard-overview {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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