<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Processing</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="/administrator/dashboard">🏠 Dashboard</a></li>
                <li><a href="/administrator/accManager">👥 Manage Users</a></li>
                <li><a href="/administrator/officialDocs">📜 Official Documents</a></li>
                <li><a href="#enrollment-requests">📄 Enrollment Requests</a></li>
                <li><a href="#approved-enrollments">✅ Approved Enrollments</a></li>
                <li><a href="#rejected-enrollments">❌ Rejected Enrollments</a></li>
                <li><a href="/administrator/studentStaffRec">📂 Student & Staff Records</a></li>
                <li><a href="/administrator/enrollment">📝 Enrollment Processing</a></li>
                <li><a href="#documents">📜 Official Documents</a></li>
                <li><button class="logout">🚪 Logout</button></li>

            </ul>
        </aside>
        
        <main class="content">
            <header class="dashboard-header">
                <h1>Enrollment Processing</h1>
            </header>
            
            <section id="enrollment-requests">
                <h2>Pending Enrollment Requests</h2>
                <table class="enrollment-table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Grade Level</th>
                            <th>Parent Contact</th>
                            <th>Documents</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Michael Brown</td>
                            <td>Grade 10</td>
                            <td>+123 456 789</td>
                            <td><a href="#">View Documents</a></td>
                            <td><span class="status pending">Pending</span></td>
                            <td>
                                <button class="approve">✅ Approve</button>
                                <button class="reject">❌ Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="approved-enrollments">
                <h2>Approved Enrollments</h2>
                <table class="enrollment-table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Grade Level</th>
                            <th>Parent Contact</th>
                            <th>Date Approved</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sarah Johnson</td>
                            <td>Grade 8</td>
                            <td>+987 654 321</td>
                            <td>March 2, 2025</td>
                        </tr>
                    </tbody>
                </table>
            </section>
            
            <section id="rejected-enrollments">
                <h2>Rejected Enrollments</h2>
                <table class="enrollment-table">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Grade Level</th>
                            <th>Parent Contact</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jake Peterson</td>
                            <td>Grade 9</td>
                            <td>+321 987 654</td>
                            <td>Missing Documents</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
<style>
/* General Styles */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

.dashboard-container {
    display: flex;
    height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background: #2c3e50;
    color: white;
    padding: 20px;
    height: 100vh;
    display: flex;
    flex-direction: column;
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
    padding: 10px;
    margin: 5px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
}

.sidebar ul li a:hover, .sidebar ul li a.active {
    background: #34495e;
}

.logout {
    margin-top: auto;
    padding: 10px;
    background: #e74c3c;
    color: white;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 5px;
}

.logout:hover {
    background: #c0392b;
}



/* Main Content */
.content {
    flex-grow: 1;
    padding: 20px;
    background: #ecf0f1;
}

.dashboard-header h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Enrollment Tables */
.enrollment-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 30px;
}

.enrollment-table th, .enrollment-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.enrollment-table th {
    background: #3498db;
    color: #fff;
}

.enrollment-table tr:hover {
    background: #f1f1f1;
}

/* Status Tags */
.status {
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
}

.status.pending {
    background: #f39c12;
    color: #fff;
}

.status.approved {
    background: #2ecc71;
    color: #fff;
}

.status.rejected {
    background: #e74c3c;
    color: #fff;
}

/* Buttons */
button.approve {
    background: #2ecc71;
    color: #fff;
    border: none;
    padding: 7px 12px;
    cursor: pointer;
    border-radius: 5px;
}

button.reject {
    background: #e74c3c;
    color: #fff;
    border: none;
    padding: 7px 12px;
    cursor: pointer;
    border-radius: 5px;
}

button.approve:hover {
    background: #27ae60;
}

button.reject:hover {
    background: #c0392b;
}

</style>