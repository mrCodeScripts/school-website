<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Cards</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Library Panel</h2>
        <ul>
            <li><a href="/librarian/dashboard">Dashboard</a></li>
            <li><a href="/librarian/book-inventory">Book Inventory</a></li>
            <li><a href="/librarian/borrow-return">Borrow & Return</a></li>
            <li><a href="/librarian/reports">Library Reports</a></li>
            <li><a href="/librarian/resources">Digital Resources</a></li>
            <li><a href="/librarian/cards" class="active">Library Cards</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Library Cards</h1>
        </header>

        <!-- Library Card Details -->
        <section class="library-card-info">
            <h2>Your Library Card</h2>
            <div class="card-details">
                <p><strong>Card Number:</strong> 1234-5678-9012</p>
                <p><strong>Issued Date:</strong> Jan 10, 2025</p>
                <p><strong>Expiration Date:</strong> Jan 10, 2027</p>
                <p><strong>Status:</strong> <span class="status active">Active</span></p>
                <p><strong>Borrowing Limit:</strong> 5 Books</p>
            </div>
            <button class="renew-card">Renew Card</button>
            <button class="deactivate-card">Deactivate Card</button>
        </section>

        <!-- Apply for a New Card -->
        <section class="apply-card">
            <h2>Apply for a Library Card</h2>
            <form class="card-application">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" required>

                <label for="studentID">Student/Employee ID:</label>
                <input type="text" id="studentID" required>

                <label for="department">Department:</label>
                <input type="text" id="department" required>

                <button type="submit">Submit Application</button>
            </form>
        </section>

        <!-- Borrowing History -->
        <section class="borrow-history">
            <h2>Library Usage History</h2>
            <table>
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>Borrowed Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The Art of Coding</td>
                        <td>Feb 20, 2025</td>
                        <td>Mar 5, 2025</td>
                        <td class="returned">Returned</td>
                    </tr>
                    <tr>
                        <td>Machine Learning Basics</td>
                        <td>Mar 1, 2025</td>
                        <td>Mar 15, 2025</td>
                        <td class="overdue">Overdue</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

</body>
</html>
<style>
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Body Styling */
body {
    display: flex;
    background-color: #f4f4f9;
    color: #333;
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
    margin-left: 270px;
    padding: 20px;
    flex-grow: 1;
}

/* Header */
header {
    background: #2980b9;
    color: white;
    padding: 15px;
    text-align: center;
    border-radius: 5px;
}

/* Section Styling */
section {
    background: white;
    padding: 20px;
    margin: 20px 0;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Library Card Info */
.card-details {
    font-size: 18px;
    line-height: 1.8;
}

.card-details .status {
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 5px;
}

.status.active {
    color: white;
    background: green;
}

.status.inactive {
    color: white;
    background: red;
}

/* Buttons */
button {
    background: #2980b9;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    transition: background 0.3s;
}

button:hover {
    background: #1c6692;
}

.renew-card {
    background: #27ae60;
}

.renew-card:hover {
    background: #1e8449;
}

.deactivate-card {
    background: #c0392b;
}

.deactivate-card:hover {
    background: #922b21;
}

/* Apply for Library Card Form */
.card-application {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.card-application label {
    font-weight: bold;
}

.card-application input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Borrowing History Table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background: #2c3e50;
    color: white;
}

td.returned {
    color: green;
    font-weight: bold;
}

td.overdue {
    color: red;
    font-weight: bold;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 220px;
    }
}

@media (max-width: 480px) {
    .sidebar {
        display: none;
    }

    .main-content {
        margin-left: 0;
    }
}

</style>