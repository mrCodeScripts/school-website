<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student & Staff Records</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
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
        </aside>

        <main class="content">
            <header class="dashboard-header">
                <h1>Student & Staff Records</h1>
            </header>

            <div class="records-controls">
                <input type="text" placeholder="Search records..." id="search-records">
                <button class="add-record">+ Add New Record</button>
            </div>

            <section class="records-section">
                <h2>Student Records</h2>
                <table class="records-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Grade Level</th>
                            <th>Enrollment Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2025001</td>
                            <td>John Doe</td>
                            <td>Grade 10</td>
                            <td><span class="status active">Active</span></td>
                            <td>
                                <button class="view">View</button>
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="records-section">
                <h2>Staff Records</h2>
                <table class="records-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Employment Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>STF1001</td>
                            <td>Jane Smith</td>
                            <td>Mathematics Teacher</td>
                            <td><span class="status active">Active</span></td>
                            <td>
                                <button class="view">View</button>
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
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

/* Records Controls */
.records-controls {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.records-controls input {
    width: 70%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.records-controls .add-record {
    background: #3498db;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.records-controls .add-record:hover {
    background: #2980b9;
}

/* Records Table */
.records-section {
    margin-top: 20px;
}

.records-section h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.records-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 30px;
}

.records-table th, .records-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.records-table th {
    background: #3498db;
    color: #fff;
}

.records-table tr:hover {
    background: #f1f1f1;
}

/* Status Tags */
.status {
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
}

.status.active {
    background: #2ecc71;
    color: #fff;
}

.status.inactive {
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

button.view {
    background: #3498db;
    color: #fff;
}

button.edit {
    background: #f39c12;
    color: #fff;
}

button.delete {
    background: #e74c3c;
    color: #fff;
}

button.view:hover {
    background: #2980b9;
}

button.edit:hover {
    background: #d68910;
}

button.delete:hover {
    background: #c0392b;
}

</style>
</html>
