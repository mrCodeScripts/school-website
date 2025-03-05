<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Student Enrollment</title>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Registrar Panel</h2>
            <ul>
                <li><a href="/registrar/dashboard">Dashboard</a></li>
                <li><a href="/registrar/studentEnrollment" class="active">Enrollment Processing</a></li>
                <li><a href="/registrar/studentRecords">Student Records</a></li>
                <li><a href="/registrar/academicRec">Academic Records</a></li>
                <li><a href="/registrar/transcripts">Transcripts & Certificates</a></li>
                <li><a href="/registrar/documents">Documents</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h1>Student Enrollment & Registration</h1>
            
            <!-- Enrollment Form -->
            <form class="enrollment-form">
                <h2>New Student Application</h2>
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" required>
                
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
                
                <label for="grade">Grade Level Applying For:</label>
                <select id="grade" name="grade">
                    <option value="">Select Grade</option>
                    <option value="1">Grade 1</option>
                    <option value="2">Grade 2</option>
                    <option value="3">Grade 3</option>
                </select>
                
                <label for="documents">Upload Required Documents:</label>
                <input type="file" id="documents" name="documents" multiple>
                
                <button type="submit">Submit Application</button>
            </form>
            
            <!-- Student Assignment Section -->
            <h2>Assign Student Numbers & Class Sections</h2>
            <table class="student-assignment-table">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Application Status</th>
                        <th>Assign Student Number</th>
                        <th>Assign Section</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Pending</td>
                        <td><input type="text" placeholder="Student No"></td>
                        <td>
                            <select>
                                <option value="">Select Section</option>
                                <option value="A">Section A</option>
                                <option value="B">Section B</option>
                            </select>
                        </td>
                        <td><button class="approve-btn">Approve</button></td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Enrollment Slots Overview -->
            <h2>Available Slots</h2>
            <table class="slots-table">
                <thead>
                    <tr>
                        <th>Grade Level</th>
                        <th>Total Slots</th>
                        <th>Available Slots</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Grade 1</td>
                        <td>50</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Grade 2</td>
                        <td>50</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Registration Status Reports -->
            <h2>Registration Status Reports</h2>
            <table class="registration-status-table">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Status</th>
                        <th>Date Processed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Enrolled</td>
                        <td>March 1, 2025</td>
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
    background-color: #f4f4f4;
}

.dashboard-container {
    display: flex;
    height: 100vh;
}


/* Sidebar */
.sidebar {
    width: 250px;
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



/* Main Content */
.content {
    flex: 1;
    padding: 20px;
    background: white;
    overflow-y: auto;
}

h1, h2 {
    color: #34495e;
}

/* Form Styles */
.enrollment-form {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.enrollment-form label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

.enrollment-form input, .enrollment-form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.enrollment-form button {
    background: #1abc9c;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s;
}

.enrollment-form button:hover {
    background: #16a085;
}

/* Tables */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background: #1abc9c;
    color: white;
}

/* Buttons */
.approve-btn {
    background: #27ae60;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    transition: background 0.3s;
}

.approve-btn:hover {
    background: #229954;
}

</style>