<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow & Return Books</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Library System</h2>
        <ul>
            <li><a href="/librarian/dashboard">Dashboard</a></li>
            <li><a href="/librarian/book-inventory">Book Inventory</a></li>
            <li><a href="/librarian/borrow-return" class="active">Borrow & Return</a></li>
            <li><a href="/librarian/reports">Library Reports</a></li>
            <li><a href="/librarian/resources">Digital Resources</a></li>
            <li><a href="/librarian/cards">Library Cards</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        
        <!-- Page Header -->
        <div class="page-header">
            <h1>📚 Borrow & Return Books</h1>
        </div>

        <!-- Borrow Book Section -->
        <div class="borrow-section">
            <h2>Borrow a Book</h2>
            <form class="borrow-form">
                <div class="form-group">
                    <label for="student-id">Student ID:</label>
                    <input type="text" id="student-id" placeholder="Enter Student ID" required>
                </div>
                <div class="form-group">
                    <label for="book-id">Book ID:</label>
                    <input type="text" id="book-id" placeholder="Enter Book ID" required>
                </div>
                <div class="form-group">
                    <label for="borrow-date">Borrow Date:</label>
                    <input type="date" id="borrow-date" required>
                </div>
                <button type="submit" class="borrow-btn">Borrow Book</button>
            </form>
        </div>

        <!-- Return Book Section -->
        <div class="return-section">
            <h2>Return a Book</h2>
            <form class="return-form">
                <div class="form-group">
                    <label for="return-student-id">Student ID:</label>
                    <input type="text" id="return-student-id" placeholder="Enter Student ID" required>
                </div>
                <div class="form-group">
                    <label for="return-book-id">Book ID:</label>
                    <input type="text" id="return-book-id" placeholder="Enter Book ID" required>
                </div>
                <div class="form-group">
                    <label for="return-date">Return Date:</label>
                    <input type="date" id="return-date" required>
                </div>
                <button type="submit" class="return-btn">Return Book</button>
            </form>
        </div>

        <!-- Borrowed Books List -->
        <div class="borrowed-books">
            <h2>Currently Borrowed Books</h2>
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Book ID</th>
                        <th>Book Title</th>
                        <th>Borrow Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>STU12345</td>
                        <td>BK9876</td>
                        <td>The Great Gatsby</td>
                        <td>2025-03-01</td>
                        <td>2025-03-15</td>
                        <td class="status">Borrowed</td>
                    </tr>
                    <tr>
                        <td>STU67890</td>
                        <td>BK5432</td>
                        <td>1984</td>
                        <td>2025-02-28</td>
                        <td>2025-03-14</td>
                        <td class="status">Overdue</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
<style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    background-color: #f4f4f4;
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
    margin-left: 280px;
    padding: 20px;
    width: calc(100% - 250px);
}

/* Page Header */
.page-header {
    background: #1abc9c;
    padding: 15px;
    color: white;
    text-align: center;
    border-radius: 5px;
    margin-bottom: 20px;
}

/* Forms */
form {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
    display: block;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Buttons */
button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.borrow-btn {
    background: #3498db;
    color: white;
}

.borrow-btn:hover {
    background: #2980b9;
}

.return-btn {
    background: #e74c3c;
    color: white;
}

.return-btn:hover {
    background: #c0392b;
}

/* Borrowed Books Table */
.borrowed-books {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.borrowed-books table {
    width: 100%;
    border-collapse: collapse;
}

.borrowed-books th, .borrowed-books td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
}

.borrowed-books th {
    background: #2c3e50;
    color: white;
}

.status {
    font-weight: bold;
    color: red;
}

</style>