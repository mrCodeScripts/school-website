<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Student Panel</h2>
            <ul>
                <li><a href="/student/dashboard" class="active">🏠 Dashboard</a></li>
                <li><a href="/student/assignments">📑 Assignments</a></li>
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
            <header class="dashboard-header">
                <h1>Welcome, [Student Name]! 🎓</h1>
                <p>Here's what you need to focus on today:</p>
            </header>

            <section class="overview">
                <div class="overview-box assignments">
                    <h3>📑 Assignments</h3>
                    <p>You have <strong>2</strong> pending assignments.</p>
                    <a href="#">View Details</a>
                </div>

                <div class="overview-box tasks">
                    <h3>✅ Daily Tasks</h3>
                    <p>You have <strong>3</strong> tasks to complete today.</p>
                    <a href="#">Check Tasks</a>
                </div>

                <div class="overview-box grades">
                    <h3>📊 Grades Overview</h3>
                    <p>Average Grade: <strong>89%</strong></p>
                    <a href="#">View Performance</a>
                </div>

                <div class="overview-box attendance">
                    <h3>🕒 Attendance</h3>
                    <p>Attendance Rate: <strong>95%</strong></p>
                    <a href="#">View History</a>
                </div>
            </section>

            <section class="notices">
                <h2>📢 Important Notices</h2>
                <ul>
                    <li>🔔 Upcoming exam on March 10th.</li>
                    <li>📢 New learning materials added for Science.</li>
                    <li>📌 Submit your Math assignment by Friday.</li>
                </ul>
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
    font-family: 'Arial', sans-serif;
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
    margin-left: 250px;
    padding: 30px;
    width: calc(100% - 250px);
}

.dashboard-header h1 {
    font-size: 24px;
    color: #2c3e50;
}

.dashboard-header p {
    color: #7f8c8d;
    margin-top: 5px;
}

/* Overview Boxes */
.overview {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.overview-box {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
}

.overview-box:hover {
    transform: translateY(-5px);
}

.overview-box h3 {
    margin-bottom: 10px;
    color: #2c3e50;
}

.overview-box p {
    color: #7f8c8d;
}

.overview-box a {
    display: inline-block;
    margin-top: 10px;
    color: #3498db;
    text-decoration: none;
    font-weight: bold;
}

.overview-box a:hover {
    text-decoration: underline;
}

/* Notices */
.notices {
    margin-top: 30px;
    background: #ecf0f1;
    padding: 15px;
    border-radius: 8px;
}

.notices h2 {
    margin-bottom: 10px;
    color: #2c3e50;
}

.notices ul {
    list-style: none;
}

.notices ul li {
    background: #fff;
    padding: 10px;
    margin: 5px 0;
    border-radius: 5px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}

</style>