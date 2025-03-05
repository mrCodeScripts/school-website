<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Inventory Management</title>
    <link rel="stylesheet" href="book-inventory.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>📖 Librarian Panel</h2>
        <ul>
            <li><a href="/librarian/dashboard">Dashboard</a></li>
            <li><a href="/librarian/book-inventory" class="active">Book Inventory</a></li>
            <li><a href="/librarian/borrow-return">Borrow & Return</a></li>
            <li><a href="/librarian/reports">Library Reports</a></li>
            <li><a href="/librarian/resources">Digital Resources</a></li>
            <li><a href="/librarian/cards">Library Cards</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="inventory-header">
            <h1>📚 Book Inventory Management</h1>
            <button class="add-book-btn">➕ Add New Book</button>
        </header>

        <!-- Search and Filter -->
        <section class="search-filter">
            <input type="text" id="search-book" placeholder="🔍 Search for books...">
            <select id="filter-category">
                <option value="all">All Categories</option>
                <option value="fiction">Fiction</option>
                <option value="non-fiction">Non-Fiction</option>
                <option value="science">Science</option>
                <option value="history">History</option>
            </select>
        </section>

        <!-- Book Inventory Table -->
        <section class="book-inventory">
            <h2>📖 Book List</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>The Great Gatsby</td>
                        <td>F. Scott Fitzgerald</td>
                        <td>Fiction</td>
                        <td class="available">Available</td>
                        <td>
                            <button class="edit">✏ Edit</button>
                            <button class="delete">❌ Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>A Brief History of Time</td>
                        <td>Stephen Hawking</td>
                        <td>Science</td>
                        <td class="borrowed">Borrowed</td>
                        <td>
                            <button class="edit">✏ Edit</button>
                            <button class="delete">❌ Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>The Art of War</td>
                        <td>Sun Tzu</td>
                        <td>History</td>
                        <td class="available">Available</td>
                        <td>
                            <button class="edit">✏ Edit</button>
                            <button class="delete">❌ Delete</button>
                        </td>
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