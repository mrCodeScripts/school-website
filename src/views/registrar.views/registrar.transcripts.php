<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcripts & Certificates</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <h2>Registrar Dashboard</h2>
            <ul>
                <li><a href="/registrar/dashboard">Dashboard</a></li>
                <li><a href="/registrar/studentEnrollment">Enrollment Processing</a></li>
                <li><a href="/registrar/studentRecords">Student Records</a></li>
                <li><a href="/registrar/academicRec">Academic Records</a></li>
                <li><a href="/registrar/transcripts" class="active">Transcripts & Certificates</a></li>
                <li><a href="/registrar/documents">Documents</a></li>
                <li><a href="#">Logout</a></li>

            </ul>
        </nav>
        <main class="content">
            <h1>Transcripts & Certificates</h1>
            
            <!-- Search Student Section -->
            <div class="search-container">
                <input type="text" placeholder="Search student by name or ID">
                <button>Search</button>
            </div>
            
            <!-- Student Transcripts Section -->
            <section class="transcript-section">
                <h2>Student Transcripts</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Grade Level</th>
                            <th>GPA</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023001</td>
                            <td>John Doe</td>
                            <td>Grade 12</td>
                            <td>3.8</td>
                            <td>
                                <button class="view-btn">View</button>
                                <button class="generate-btn">Generate</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            
            <!-- Student Certificates Section -->
            <section class="certificate-section">
                <h2>Certificates</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Certificate Type</th>
                            <th>Date Issued</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023001</td>
                            <td>John Doe</td>
                            <td>Graduation</td>
                            <td>2025-05-20</td>
                            <td>
                                <button class="download-btn">Download</button>
                                <button class="print-btn">Print</button>
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
/* Transcripts & Certificates Page Styles */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.dashboard-container {
    display: flex;
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

.transcript-section, .certificate-section {
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

.view-btn, .generate-btn {
    background-color: #27ae60;
    color: white;
}

.view-btn:hover, .generate-btn:hover {
    background-color: #1e8449;
}

.download-btn {
    background-color: #f39c12;
    color: white;
}

.download-btn:hover {
    background-color: #c87f0a;
}

.print-btn {
    background-color: #e74c3c;
    color: white;
}

.print-btn:hover {
    background-color: #c0392b;
}

</style>