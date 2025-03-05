<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                <li><a href="/administrator/studentStaffRec">📂 Student & Staff Records</a></li>
                <li><a href="/administrator/enrollment">📝 Enrollment Processing</a></li>
                <li><button class="logout">🚪 Logout</button></li>
            </ul>
        </aside>
        
        <main class="content">
            <header class="dashboard-header">
                <h1>Administrator Panel</h1>
            </header>
            
            <section id="users">
                <h2>Manage User Accounts</h2>
                <button class="add-user">➕ Add User</button>
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Teacher</td>
                            <td>johndoe@email.com</td>
                            <td>
                                <button class="edit">✏️ Edit</button>
                                <button class="delete">🗑️ Remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            
            <section id="records">
                <h2>Student & Staff Records</h2>
                <form class="record-form">
                    <input type="text" placeholder="Search by name or ID">
                    <button type="submit">🔍 Search</button>
                </form>
                <table class="record-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jane Smith</td>
                            <td>Student</td>
                            <td>Active</td>
                            <td>
                                <button class="edit">✏️ Edit</button>
                                <button class="delete">🗑️ Remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            
            <section id="enrollment">
                <h2>Enrollment Processing</h2>
                <button class="view-applications">📜 View Applications</button>
                <table class="enrollment-table">
                    <thead>
                        <tr>
                            <th>Applicant</th>
                            <th>Program</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Michael Lee</td>
                            <td>Computer Science</td>
                            <td>Pending</td>
                            <td>
                                <button class="approve">✅ Approve</button>
                                <button class="reject">❌ Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            
            <section id="documents">
                <h2>Official School Documents</h2>
                <button class="generate-doc">📄 Generate Document</button>
                <table class="document-table">
                    <thead>
                        <tr>
                            <th>Document Type</th>
                            <th>Requested By</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Transcript</td>
                            <td>Emily Watson</td>
                            <td>Processing</td>
                            <td>
                                <button class="process">⚙️ Process</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>

<style>
    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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




.content {
    flex: 1;
    padding: 20px;
}
.dashboard-header {
    background: #f4f4f4;
    padding: 15px;
    text-align: center;
    border-radius: 8px;
    margin-bottom: 20px;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}
th {
    background: #f4f4f4;
}
button {
    padding: 5px 10px;
    margin: 2px;
    border: none;
    cursor: pointer;
}
.approve { background: #2ECC71; color: white; }
.reject { background: #E74C3C; color: white; }
.edit { background: #F1C40F; color: white; }
.delete { background: #E74C3C; color: white; }
</style>