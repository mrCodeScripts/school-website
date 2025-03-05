<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Academic Records</title>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Registrar Panel</h2>
            <ul>
                <li><a href="/registrar/dashboard">Dashboard</a></li>
                <li><a href="/registrar/studentEnrollment">Enrollment Processing</a></li>
                <li><a href="/registrar/studentRecords">Student Records</a></li>
                <li><a href="/registrar/academicRec" class="active">Academic Records</a></li>
                <li><a href="/registrar/transcripts">Transcripts & Certificates</a></li>
                <li><a href="/registrar/documents">Documents</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h1>Maintain Academic Records</h1>
            
            <!-- Student Search -->
            <div class="search-student">
                <h2>Search Student</h2>
                <input type="text" placeholder="Enter student name or ID">
                <button>Search</button>
            </div>
            
            <!-- Student Academic Records Table -->
            <h2>Student Academic Records</h2>
            <table class="academic-records-table">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Grade Level</th>
                        <th>Subject</th>
                        <th>Final Grade</th>
                        <th>Attendance Record</th>
                        <th>Disciplinary Actions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Grade 10</td>
                        <td>Mathematics</td>
                        <td>89%</td>
                        <td>98%</td>
                        <td>None</td>
                        <td><button class="edit-btn">Edit</button></td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Update Academic Records -->
            <h2>Update Academic Records</h2>
            <form class="update-record-form">
                <label for="student-id">Student ID:</label>
                <input type="text" id="student-id" required>
                
                <label for="subject">Subject:</label>
                <input type="text" id="subject" required>
                
                <label for="grade">Final Grade:</label>
                <input type="text" id="grade" required>
                
                <label for="attendance">Attendance Percentage:</label>
                <input type="text" id="attendance" required>
                
                <label for="disciplinary">Disciplinary Actions:</label>
                <input type="text" id="disciplinary">
                
                <button type="submit">Update Record</button>
            </form>
        </div>
    </div>
</body>
</html>
<style>
/* General Styling */
body {
    width: 100vw;
    height: 100vh;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
}

.dashboard-container {
    display: flex;
    flex-direction: row;
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
    height: 100%;
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
}

/* Tables */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #1abc9c;
    color: white;
}

/* Form Styling */
.academic-records-form {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.academic-records-form label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

.academic-records-form input, .academic-records-form select, .academic-records-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 5px;
}

.academic-records-form button {
    margin-top: 15px;
    padding: 10px;
    width: 100%;
    background-color: #1abc9c;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

/* Buttons */
.edit-btn {
    background-color: #3498db;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

</style>