<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Materials</title>
    <link rel="stylesheet" href="learning-materials.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Student Dashboard</h2>
        <ul>
            <li><a href="/student/dashboard">🏠 Dashboard</a></li>
            <li><a href="/student/assignments">📑 Assignments</a></li>
            <li><a href="/student/tasks">✅ Tasks</a></li>
            <li><a href="/student/grades">📊 Grades</a></li>
            <li><a href="/student/learningMaterials" class="active">📚 Learning Materials</a></li>
            <li><a href="/student/attendance">🕒 Attendance</a></li>
            <li><a href="/student/message-forums">💬 Messages & Forums</a></li>
            <li><a href="/student/schedules">📅 Schedule</a></li>
            <li><a href="/student/settings">⚙️ Settings</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="content">
        <header class="page-header">
            <h1>📚 Learning Materials</h1>
            <p>Access, download, and interact with study resources uploaded by your teachers.</p>
        </header>

        <!-- Filters Section -->
        <section class="filters">
            <label for="subject">Filter by Subject:</label>
            <select id="subject">
                <option value="all">All Subjects</option>
                <option value="math">Mathematics</option>
                <option value="science">Science</option>
                <option value="english">English</option>
                <option value="history">History</option>
            </select>

            <label for="type">Material Type:</label>
            <select id="type">
                <option value="all">All Types</option>
                <option value="pdf">PDF</option>
                <option value="video">Video</option>
                <option value="ppt">PowerPoint</option>
                <option value="doc">Documents</option>
            </select>

            <button class="filter-btn">Apply Filters</button>
        </section>

        <!-- Learning Materials Table -->
        <section class="materials-list">
            <h2>Available Learning Materials</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Subject</th>
                        <th>Type</th>
                        <th>Uploaded By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Algebra Basics</td>
                        <td>Mathematics</td>
                        <td>📄 PDF</td>
                        <td>Mr. Smith</td>
                        <td>
                            <button class="view-btn">👀 View</button>
                            <button class="download-btn">⬇️ Download</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Newton's Laws</td>
                        <td>Science</td>
                        <td>🎥 Video</td>
                        <td>Ms. Johnson</td>
                        <td>
                            <button class="view-btn">👀 View</button>
                            <button class="download-btn">⬇️ Download</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Shakespearean Literature</td>
                        <td>English</td>
                        <td>📜 Document</td>
                        <td>Dr. Adams</td>
                        <td>
                            <button class="view-btn">👀 View</button>
                            <button class="download-btn">⬇️ Download</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Uploaded Files Section -->
        <section class="upload-section">
            <h2>Upload Learning Material</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="title">Material Title:</label>
                <input type="text" id="title" name="title" placeholder="Enter title" required>

                <label for="subject">Select Subject:</label>
                <select id="subject" name="subject">
                    <option value="math">Mathematics</option>
                    <option value="science">Science</option>
                    <option value="english">English</option>
                    <option value="history">History</option>
                </select>

                <label for="file">Choose File:</label>
                <input type="file" id="file" name="file" required>

                <button type="submit" class="upload-btn">📤 Upload</button>
            </form>
        </section>
    </main>

</body>
</html>
<style>
/* Reset Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    background-color: #f4f6f9;
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
.content {
    margin-left: 260px;
    padding: 20px;
    flex-grow: 1;
}

.page-header {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.page-header h1 {
    font-size: 24px;
}

.page-header p {
    color: #555;
}

/* Filters */
.filters {
    display: flex;
    align-items: center;
    gap: 15px;
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.filters label {
    font-weight: bold;
}

.filters select {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}

.filter-btn {
    background: #1abc9c;
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.filter-btn:hover {
    background: #16a085;
}

/* Materials Table */
.materials-list {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.materials-list h2 {
    margin-bottom: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

thead {
    background: #34495e;
    color: white;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tbody tr:hover {
    background: #f1f1f1;
}

.view-btn, .download-btn {
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.view-btn {
    background: #3498db;
    color: white;
}

.view-btn:hover {
    background: #2980b9;
}

.download-btn {
    background: #2ecc71;
    color: white;
}

.download-btn:hover {
    background: #27ae60;
}

/* Upload Section */
.upload-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.upload-section h2 {
    margin-bottom: 15px;
}

.upload-section form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.upload-section label {
    font-weight: bold;
}

.upload-section input, .upload-section select {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}

.upload-btn {
    background: #e67e22;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.upload-btn:hover {
    background: #d35400;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .content {
        margin-left: 210px;
    }

    .filters {
        flex-direction: column;
    }

    table {
        font-size: 14px;
    }
}

</style>