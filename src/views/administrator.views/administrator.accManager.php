<!-- Account Management UI with Reset Password & Deactivation Features -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="/administrator/studentStaffRec">📂 Student & Staff Records</a></li>
                <li><a href="/administrator/dashboard">🏠 Dashboard</a></li>
                <li><a href="/administrator/accManager">👥 Manage Users</a></li>
                <li><a href="/administrator/officialDocs">📜 Official Documents</a></li>
                <li><a href="/administrator/studentStaffRec">📂 Student & Staff Records</a></li>
                <li><a href="/administrator/enrollment">📝 Enrollment Processing</a></li>
                <li><button class="logout">🚪 Logout</button></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <div class="dashboard-header">
                <h1>Account Management</h1>
            </div>

            <!-- User Search & Filters -->
            <div class="account-controls">
                <input type="text" placeholder="Search user by name or ID">
                <select>
                    <option value="all">All Users</option>
                    <option value="students">Students</option>
                    <option value="teachers">Teachers</option>
                    <option value="staff">Staff</option>
                </select>
                <button class="add-user">Add New User</button>
            </div>

            <!-- User Table -->
            <table class="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>John Doe</td>
                        <td>Student</td>
                        <td><span class="status active">Active</span></td>
                        <td>
                            <button class="reset-password">Reset Password</button>
                            <button class="deactivate">Deactivate</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Jane Smith</td>
                        <td>Teacher</td>
                        <td><span class="status active">Active</span></td>
                        <td>
                            <button class="reset-password">Reset Password</button>
                            <button class="deactivate">Deactivate</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<style>
/* Account Management CSS */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.dashboard-container {
    display: flex;
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

/* Content */
.content {
    flex: 1;
    padding: 20px;
    background: white;
}

.dashboard-header {
    margin-bottom: 20px;
}

/* Account Controls */
.account-controls {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.account-controls input, .account-controls select, .account-controls button {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.add-user {
    background: #3498db;
    color: white;
    border: none;
    cursor: pointer;
}

.add-user:hover {
    background: #2980b9;
}

/* User Table */
.user-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
}

.user-table th, .user-table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.user-table th {
    background: #2c3e50;
    color: white;
}

.user-table .status {
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
}

.status.active {
    background: #2ecc71;
    color: white;
}

.status.inactive {
    background: #e74c3c;
    color: white;
}

/* Buttons */
.reset-password, .deactivate {
    padding: 8px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.reset-password {
    background: #f39c12;
    color: white;
}

.reset-password:hover {
    background: #e67e22;
}

.deactivate {
    background: #e74c3c;
    color: white;
}

.deactivate:hover {
    background: #c0392b;
}

</style>
