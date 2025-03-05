<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Documents Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="/administrator/dashboard">🏠 Dashboard</a></li>
                <li><a href="/administrator/accManager">👥 Manage Users</a></li>
                <li><a href="/administrator/officialDocs">📜 Official Documents</a></li>
                <li><a href="/administrator/studentStaffRec">📂 Student & Staff Records</a></li>
                <li><a href="/administrator/enrollment">📝 Enrollment Processing</a></li>
                <li><a href="/administrator/officialDocs">📜 Official Documents</a></li>
                <li><button class="logout">🚪 Logout</button></li>
            </ul>
        </aside>
        
        <main class="content">
            <div class="dashboard-header">
                <h1>Official Documents Management</h1>
            </div>

            <div class="document-controls">
                <input type="text" placeholder="Search documents...">
                <button class="add-document">+ Add New Document</button>
            </div>

            <table class="document-table">
                <thead>
                    <tr>
                        <th>Document Type</th>
                        <th>Requested By</th>
                        <th>Date Requested</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Report Card</td>
                        <td>John Doe</td>
                        <td>March 1, 2025</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>
                            <button class="approve">Approve</button>
                            <button class="reject">Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Certificate of Enrollment</td>
                        <td>Jane Smith</td>
                        <td>March 2, 2025</td>
                        <td><span class="status approved">Approved</span></td>
                        <td>
                            <button class="view">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Good Moral Certificate</td>
                        <td>Michael Johnson</td>
                        <td>March 3, 2025</td>
                        <td><span class="status rejected">Rejected</span></td>
                        <td>
                            <button class="view">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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

/* Document Controls */
.document-controls {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.document-controls input {
    width: 70%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.document-controls .add-document {
    background: #3498db;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.document-controls .add-document:hover {
    background: #2980b9;
}

/* Document Table */
.document-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 30px;
}

.document-table th, .document-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.document-table th {
    background: #3498db;
    color: #fff;
}

.document-table tr:hover {
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
button {
    border: none;
    padding: 7px 12px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 14px;
}

button.approve {
    background: #2ecc71;
    color: #fff;
}

button.reject {
    background: #e74c3c;
    color: #fff;
}

button.view {
    background: #3498db;
    color: #fff;
}

button.approve:hover {
    background: #27ae60;
}

button.reject:hover {
    background: #c0392b;
}

button.view:hover {
    background: #2980b9;
}

</style>