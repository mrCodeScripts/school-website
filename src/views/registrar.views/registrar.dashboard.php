<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <nav class="sidebar">
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
        </nav>
        
        <!-- Main Content -->
        <main class="content">
            <h1>Welcome to the Registrar Dashboard</h1>
            <p>Select a section from the sidebar to manage registrar tasks.</p>
        </main>
    </div>
</body>
</html>
<style>
/* Registrar Dashboard CSS */

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

/* Content */
.content {
    flex: 1;
    padding: 40px;
    background: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.content h1 {
    font-size: 24px;
    color: #2c3e50;
}

.content p {
    font-size: 16px;
    color: #555;
}

</style>