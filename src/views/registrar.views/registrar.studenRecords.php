<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Student Records</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <h2>Registrar Panel</h2>
            <ul>
                <li><a href="/registrar/dashboard">Dashboard</a></li>
                <li><a href="/registrar/studentEnrollment">Enrollment Processing</a></li>
                <li><a href="/registrar/studentRecords" class="active">Student Records</a></li>
                <li><a href="/registrar/academicRec">Academic Records</a></li>
                <li><a href="/registrar/transcripts">Transcripts & Certificates</a></li>
                <li><a href="/registrar/documents">Documents</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>

        <div class="content">
            <h1>Student Records</h1>
            <div class="search-container">
                <input type="text" placeholder="Search student by name or ID...">
                <button>Search</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Grade Level</th>
                        <th>Section</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>20231001</td>
                        <td>John Doe</td>
                        <td>10</td>
                        <td>A</td>
                        <td>Active</td>
                        <td class="action-buttons">
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>20231002</td>
                        <td>Jane Smith</td>
                        <td>11</td>
                        <td>B</td>
                        <td>Inactive</td>
                        <td class="action-buttons">
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="student-record-form">
                <h2>Add / Update Student Record</h2>
                <form>
                    <label for="student-id">Student ID</label>
                    <input type="text" id="student-id" placeholder="Enter student ID">
                    
                    <label for="student-name">Full Name</label>
                    <input type="text" id="student-name" placeholder="Enter full name">
                    
                    <label for="grade-level">Grade Level</label>
                    <select id="grade-level">
                        <option value="">Select grade level</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>

                    <label for="section">Section</label>
                    <input type="text" id="section" placeholder="Enter section">
                    
                    <label for="status">Status</label>
                    <select id="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>

                    <button type="submit">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<style>
/* General Styling */
body {
    width: 100vw;
    height: 100%;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
}

.dashboard-container {
    display: flex;
    width: 100%;
    height: 100%;
}

/* Sidebar */
.sidebar {
    width: 250px;
    height: 100%;
    background: #2c3e50;
    color: white;
    padding: 20px;
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
    margin: 10px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 12px;
    border-radius: 5px;
    transition: background 0.3s;
}

.sidebar ul li a:hover, .sidebar ul li a.active {
    background: #34495e;
}


/* Content Styling */
.content {
    flex: 1;
    padding: 20px;
}

h1, h2 {
    color: #2c3e50;
}

/* Search Bar */
.search-container {
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.search-container input {
    width: 250px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.search-container button {
    padding: 10px 15px;
    background-color: #1abc9c;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.search-container button:hover {
    background-color: #16a085;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background: white;
    border-radius: 5px;
    overflow: hidden;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #1abc9c;
    color: white;
}

/* Form Styling */
.student-record-form {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    max-width: 700px;
    margin: auto;
}

.student-record-form label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

.student-record-form input, 
.student-record-form select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 5px;
    box-sizing: border-box;
    font-size: 14px;
}

.student-record-form button {
    margin-top: 15px;
    padding: 12px;
    width: 100%;
    background-color: #1abc9c;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    transition: 0.3s;
}

.student-record-form button:hover {
    background-color: #16a085;
}

/* Buttons */
.action-buttons {
    display: flex;
    gap: 10px;
}

.edit-btn, .delete-btn {
    padding: 8px 12px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    color: white;
    font-size: 14px;
    font-weight: bold;
    transition: 0.3s;
}

.edit-btn {
    background-color: #3498db;
}

.edit-btn:hover {
    background-color: #2980b9;
}

.delete-btn {
    background-color: #e74c3c;
}

.delete-btn:hover {
    background-color: #c0392b;
}

</style>