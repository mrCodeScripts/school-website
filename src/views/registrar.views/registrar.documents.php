<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Documents</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>Registrar Panel</h2>
            <ul>
                <li><a href="/registrar/dashboard" class="active">Dashboard</a></li>
                <li><a href="/registrar/studentEnrollment">Enrollment Processing</a></li>
                <li><a href="/registrar/studentRecords">Student Records</a></li>
                <li><a href="/registrar/academicRec">Academic Records</a></li>
                <li><a href="/registrar/transcripts">Transcripts & Certificates</a></li>
                <li><a href="/registrar/documents">Documents</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </aside>
        
        <main class="content">
            <h1>Official Documents Management</h1>
            
            <div class="search-container">
                <input type="text" placeholder="Search student name or ID">
                <button>Search</button>
            </div>
            
            <section class="document-requests">
                <h2>Pending Document Requests</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Document Type</th>
                            <th>Request Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Transcript</td>
                            <td>March 1, 2025</td>
                            <td>Pending</td>
                            <td>
                                <button class="approve-btn">Approve</button>
                                <button class="reject-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>Certificate</td>
                            <td>March 2, 2025</td>
                            <td>Pending</td>
                            <td>
                                <button class="approve-btn">Approve</button>
                                <button class="reject-btn">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            
            <section class="document-generation">
                <h2>Generate Official Documents</h2>
                <form>
                    <label for="student-id">Student ID:</label>
                    <input type="text" id="student-id" placeholder="Enter Student ID">
                    
                    <label for="document-type">Select Document:</label>
                    <select id="document-type">
                        <option value="transcript">Transcript</option>
                        <option value="certificate">Certificate</option>
                        <option value="report-card">Report Card</option>
                    </select>
                    
                    <button type="submit" class="generate-btn">Generate</button>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
<style>
/* Official Documents Page Styles */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.dashboard-container {
    display: flex;
}

.sidebar {
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

.content {
    flex: 1;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #2c3e50;
}

.search-container {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.search-container input {
    padding: 10px;
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px;
}

.search-container button {
    padding: 10px 15px;
    background-color: #2980b9;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.search-container button:hover {
    background-color: #1c6691;
}

.document-requests, .document-generation {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

h2 {
    color: #2c3e50;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

table th {
    background-color: #2c3e50;
    color: white;
}

button {
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.approve-btn {
    background-color: #27ae60;
    color: white;
}

.approve-btn:hover {
    background-color: #1e8449;
}

.reject-btn {
    background-color: #e74c3c;
    color: white;
}

.reject-btn:hover {
    background-color: #c0392b;
}

.generate-btn {
    background-color: #2980b9;
    color: white;
}

.generate-btn:hover {
    background-color: #1c6691;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    max-width: 400px;
    margin: auto;
}

form label {
    font-weight: bold;
}

form input, form select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
}

form button {
    margin-top: 10px;
}

</style>