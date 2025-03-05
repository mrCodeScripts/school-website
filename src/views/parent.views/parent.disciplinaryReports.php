<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinary Reports</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Parent Dashboard</h2>
        <ul>
            <li><a href="/parent/dashboard">Dashboard</a></li>
            <li><a href="/parent/grade-performance">Grades & Performance</a></li>
            <li><a href="/parent/attendance-record">Attendance Records</a></li>
            <li><a href="/parent/assignment-tasks">Assignments & Tasks</a></li>
            <li><a href="/parent/school-announcements">School Announcements</a></li>
            <li><a href="/parent/message-communication">Messages & Communication</a></li>
            <li><a href="/parent/disciplinary-reports" class="active">Disciplinary Reports</a></li>
            <li><a href="/parent/fee-billing">Fee & Billing</a></li>
            <li><a href="/parent/settings">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Disciplinary Reports</h1>
            <p>Monitor your child's disciplinary record and any related actions.</p>
        </div>

        <!-- Reports Section -->
        <div class="reports-container">
            <h2>Student Name: <span class="student-name">John Doe</span></h2>

            <table class="report-table">
                <thead>
                    <tr>
                        <th>Incident Date</th>
                        <th>Infraction Type</th>
                        <th>Description</th>
                        <th>Action Taken</th>
                        <th>Status</th>
                        <th>Teacher Comments</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025-03-01</td>
                        <td>Disruptive Behavior</td>
                        <td>Talking loudly in class, ignoring instructions.</td>
                        <td>Verbal Warning</td>
                        <td class="status pending">Pending Review</td>
                        <td>Needs improvement in following class rules.</td>
                        <td><button class="view-btn">📄 View</button></td>
                    </tr>
                    <tr>
                        <td>2025-02-20</td>
                        <td>Fighting</td>
                        <td>Engaged in a physical altercation with another student.</td>
                        <td>3-Day Suspension</td>
                        <td class="status resolved">Resolved</td>
                        <td>Attended counseling session.</td>
                        <td><button class="view-btn">📄 View</button></td>
                    </tr>
                </tbody>
            </table>

            <!-- Acknowledgment & Appeal Section -->
            <div class="acknowledge-section">
                <h3>Acknowledge or Appeal</h3>
                <p>If you believe a report is incorrect or needs review, you may file an appeal.</p>
                <textarea placeholder="Write your appeal or acknowledgment here..."></textarea>
                <button class="submit-btn">Submit</button>
            </div>

            <!-- Downloadable Report -->
            <div class="download-section">
                <h3>Download Reports</h3>
                <button class="download-btn">📥 Download PDF</button>
                <button class="print-btn">🖨️ Print Report</button>
            </div>
        </div>
    </div>

</body>
</html>
<style>
/* General Styles */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    display: flex;
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
    margin-left: 280px;
    flex: 1;
    padding: 20px;
}

.header {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.header h1 {
    margin: 0;
    color: #333;
}

.header p {
    color: #666;
    font-size: 14px;
}

/* Reports Container */
.reports-container {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.reports-container h2 {
    color: #333;
    margin-bottom: 15px;
}

/* Report Table */
.report-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.report-table thead {
    background: #34495e;
    color: white;
}

.report-table th,
.report-table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.report-table tbody tr:hover {
    background: #f1f1f1;
}

.status {
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 5px;
}

.status.pending {
    background: #f39c12;
    color: white;
}

.status.resolved {
    background: #2ecc71;
    color: white;
}

/* View Button */
.view-btn {
    background: #2980b9;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.view-btn:hover {
    background: #1f618d;
}

/* Acknowledgment Section */
.acknowledge-section {
    margin-top: 20px;
}

.acknowledge-section h3 {
    margin-bottom: 10px;
    color: #333;
}

.acknowledge-section textarea {
    width: 100%;
    height: 100px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: none;
}

.submit-btn {
    margin-top: 10px;
    background: #27ae60;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.submit-btn:hover {
    background: #219150;
}

/* Download Section */
.download-section {
    margin-top: 20px;
    display: flex;
    gap: 10px;
}

.download-btn,
.print-btn {
    background: #8e44ad;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.download-btn:hover,
.print-btn:hover {
    background: #732d91;
}

</style>