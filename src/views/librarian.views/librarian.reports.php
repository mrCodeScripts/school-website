<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Reports</title>
    <link rel="stylesheet" href="library-reports.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Library Panel</h2>
        <ul>
            <li><a href="/librarian/dashboard">Dashboard</a></li>
            <li><a href="/librarian/book-inventory">Book Inventory</a></li>
            <li><a href="/librarian/borrow-return">Borrow & Return</a></li>
            <li><a href="/librarian/reports" class="active">Library Reports</a></li>
            <li><a href="/librarian/resources">Digital Resources</a></li>
            <li><a href="/librarian/cards">Library Cards</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="page-header">
            <h1>📊 Library Reports</h1>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <h2>Filter Reports</h2>
            <form>
                <div class="form-group">
                    <label for="report-type">Report Type:</label>
                    <select id="report-type">
                        <option value="borrowed">Borrowed Books</option>
                        <option value="returned">Returned Books</option>
                        <option value="overdue">Overdue Books</option>
                        <option value="lost">Lost Books</option>
                        <option value="popular">Most Popular Books</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="start-date">Start Date:</label>
                    <input type="date" id="start-date">
                </div>
                <div class="form-group">
                    <label for="end-date">End Date:</label>
                    <input type="date" id="end-date">
                </div>
                <button type="submit" class="filter-btn">Generate Report</button>
            </form>
        </div>

        <!-- Reports Table -->
        <div class="report-table">
            <h2>Report Results</h2>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Book Title</th>
                        <th>Student Name</th>
                        <th>Borrowed Date</th>
                        <th>Return Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>The Great Gatsby</td>
                        <td>John Doe</td>
                        <td>2025-02-10</td>
                        <td>2025-02-17</td>
                        <td class="returned">Returned</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1984</td>
                        <td>Jane Smith</td>
                        <td>2025-02-05</td>
                        <td class="overdue">Overdue</td>
                        <td class="overdue">Overdue</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Export & Print Options -->
        <div class="export-section">
            <button class="export-btn">Export as PDF</button>
            <button class="print-btn">Print Report</button>
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
    background-color: #f4f4f4;
    display: flex;
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
    flex: 1;
    padding: 20px;
}

.page-header h1 {
    margin: 0;
    color: #333;
    padding-bottom: 10px;
    border-bottom: 3px solid #1abc9c;
}

/* Filter Section */
.filter-section {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.filter-section h2 {
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group select,
.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.filter-btn {
    background: #1abc9c;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    width: 100%;
    margin-top: 10px;
    transition: 0.3s;
}

.filter-btn:hover {
    background: #16a085;
}

/* Report Table */
.report-table {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.report-table h2 {
    margin-bottom: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table thead {
    background: #1abc9c;
    color: white;
}

table th, table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

.returned {
    color: green;
    font-weight: bold;
}

.overdue {
    color: red;
    font-weight: bold;
}

/* Export & Print Buttons */
.export-section {
    margin-top: 20px;
    display: flex;
    gap: 10px;
}

.export-btn,
.print-btn {
    background: #3498db;
    color: white;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.export-btn:hover {
    background: #2980b9;
}

.print-btn {
    background: #e67e22;
}

.print-btn:hover {
    background: #d35400;
}

</style>