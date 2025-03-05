<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library Resources</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Library Panel</h2>
            <ul>
                <li><a href="/librarian/dashboard">Dashboard</a></li>
                <li><a href="/librarian/book-inventory">Book Inventory</a></li>
                <li><a href="/librarian/borrow-return">Borrow & Return</a></li>
                <li><a href="/librarian/reports">Library Reports</a></li>
                <li><a href="/librarian/resources" class="active">Digital Resources</a></li>
                <li><a href="/librarian/cards">Library Cards</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>📂 Digital Library Resources</h1>
            </header>

            <!-- Upload Digital Resource -->
            <section class="upload-section">
                <h2>📤 Upload New Resource</h2>
                <form class="upload-form">
                    <label>Title:</label>
                    <input type="text" placeholder="Enter resource title" required>

                    <label>Author:</label>
                    <input type="text" placeholder="Enter author name" required>

                    <label>Category:</label>
                    <select>
                        <option>E-Book</option>
                        <option>Research Paper</option>
                        <option>Journal</option>
                        <option>Article</option>
                        <option>Thesis</option>
                    </select>

                    <label>Upload File:</label>
                    <input type="file" required>

                    <button type="submit">Upload Resource</button>
                </form>
            </section>

            <!-- Search & Filter -->
            <section class="filter-section">
                <h2>🔍 Search & Filter</h2>
                <input type="text" placeholder="Search by title, author, or category">
                <button>Search</button>

                <label>Filter by:</label>
                <select>
                    <option>All</option>
                    <option>E-Books</option>
                    <option>Research Papers</option>
                    <option>Journals</option>
                    <option>Thesis</option>
                </select>
            </section>

            <!-- Digital Resources Table -->
            <section class="resources-list">
                <h2>📄 Available Digital Resources</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>File Type</th>
                            <th>Size</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Advanced Web Development</td>
                            <td>John Doe</td>
                            <td>E-Book</td>
                            <td>PDF</td>
                            <td>2.5MB</td>
                            <td>
                                <button>📥 Download</button>
                                <button>❌ Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Artificial Intelligence Research</td>
                            <td>Jane Smith</td>
                            <td>Research Paper</td>
                            <td>DOCX</td>
                            <td>1.2MB</td>
                            <td>
                                <button>📥 Download</button>
                                <button>❌ Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Data Science Journal 2024</td>
                            <td>Dr. Alan Turing</td>
                            <td>Journal</td>
                            <td>PDF</td>
                            <td>4.1MB</td>
                            <td>
                                <button>📥 Download</button>
                                <button>❌ Delete</button>
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
/* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #f5f5f5;
    display: flex;
    min-height: 100vh;
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
    width: calc(100% - 270px);
}

header {
    background-color: #3498db;
    color: white;
    padding: 15px;
    text-align: center;
    border-radius: 5px;
    margin-bottom: 20px;
}

/* Upload Section */
.upload-section, .filter-section, .resources-list {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.upload-section h2, .filter-section h2, .resources-list h2 {
    color: #2c3e50;
    margin-bottom: 10px;
}

/* Upload Form */
.upload-form {
    display: grid;
    gap: 10px;
}

.upload-form input, .upload-form select, .upload-form button {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.upload-form button {
    background-color: #27ae60;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.upload-form button:hover {
    background-color: #219150;
}

/* Search & Filter */
.filter-section input, .filter-section select, .filter-section button {
    padding: 10px;
    font-size: 16px;
    margin-right: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.filter-section button {
    background-color: #e67e22;
    color: white;
    cursor: pointer;
    transition: 0.3s;
}

.filter-section button:hover {
    background-color: #d35400;
}

/* Table Styles */
.resources-list table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.resources-list table th, .resources-list table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

.resources-list table th {
    background-color: #3498db;
    color: white;
}

.resources-list table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.resources-list button {
    padding: 8px 12px;
    border: none;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.resources-list button:nth-child(1) {
    background-color: #2ecc71;
    color: white;
}

.resources-list button:nth-child(1):hover {
    background-color: #27ae60;
}

.resources-list button:nth-child(2) {
    background-color: #e74c3c;
    color: white;
    margin-left: 5px;
}

.resources-list button:nth-child(2):hover {
    background-color: #c0392b;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }
    .main-content {
        margin-left: 220px;
        width: calc(100% - 220px);
    }
}

@media (max-width: 600px) {
    body {
        flex-direction: column;
    }
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }
    .main-content {
        margin-left: 0;
        width: 100%;
    }
}

</style>