<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarian Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>📖 Librarian Panel</h2>
        <ul>
            <li><a href="/librarian/dashboard" class="active">Dashboard</a></li>
            <li><a href="/librarian/book-inventory">Book Inventory</a></li>
            <li><a href="/librarian/borrow-return">Borrow & Return</a></li>
            <li><a href="/librarian/reports">Library Reports</a></li>
            <li><a href="/librarian/resources">Digital Resources</a></li>
            <li><a href="/librarian/cards">Library Cards</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="dashboard-header">
            <h1>Welcome, Librarian 📚</h1>
            <button class="notifications-btn">🔔 Notifications</button>
        </header>

        <!-- Overview Section -->
        <section class="overview">
            <div class="stat-box books">
                <h3>📚 Total Books</h3>
                <p>4,320</p>
            </div>
            <div class="stat-box borrowed">
                <h3>🔄 Borrowed Books</h3>
                <p>1,025</p>
            </div>
            <div class="stat-box available">
                <h3>✅ Available Books</h3>
                <p>3,295</p>
            </div>
            <div class="stat-box overdue">
                <h3>⚠ Overdue Books</h3>
                <p>78</p>
            </div>
        </section>

        <!-- Recent Transactions -->
        <section class="recent-transactions">
            <h2>📋 Recent Borrowing Activity</h2>
            <table>
                <thead>
                    <tr>
                        <th>Student/Staff</th>
                        <th>Book Title</th>
                        <th>Borrowed Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Introduction to Algorithms</td>
                        <td>Feb 20, 2025</td>
                        <td>Mar 5, 2025</td>
                        <td class="status on-time">On Time</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Data Science for Beginners</td>
                        <td>Feb 18, 2025</td>
                        <td>Mar 3, 2025</td>
                        <td class="status overdue">Overdue</td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Web Development with PHP</td>
                        <td>Feb 25, 2025</td>
                        <td>Mar 10, 2025</td>
                        <td class="status on-time">On Time</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

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
.main-content {
    margin-left: 250px;
    padding: 20px;
    width: calc(100% - 250px);
}

.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.notifications-btn {
    background: #e74c3c;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.notifications-btn:hover {
    background: #c0392b;
}

/* Overview Section */
.overview {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.stat-box {
    width: 23%;
    background: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.stat-box h3 {
    margin-bottom: 10px;
    font-size: 18px;
}

.stat-box p {
    font-size: 24px;
    font-weight: bold;
}

.books { background: #3498db; color: white; }
.borrowed { background: #f39c12; color: white; }
.available { background: #2ecc71; color: white; }
.overdue { background: #e74c3c; color: white; }

/* Recent Transactions */
.recent-transactions {
    margin-top: 30px;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.recent-transactions h2 {
    margin-bottom: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

th {
    background: #2c3e50;
    color: white;
}

.status {
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 5px;
    text-align: center;
}

.status.on-time {
    background: #2ecc71;
    color: white;
}

.status.overdue {
    background: #e74c3c;
    color: white;
}

</style>