<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Messages & Communication</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Parent Portal</h2>
        <ul>
            <li><a href="/parent/dashboard">Dashboard</a></li>
            <li><a href="/parent/grade-performance">Grades & Performance</a></li>
            <li><a href="/parent/attendance-record">Attendance Records</a></li>
            <li><a href="/parent/assignment-tasks">Assignments & Tasks</a></li>
            <li><a href="/parent/school-announcements">School Announcements</a></li>
            <li><a href="/parent/message-communication" class="active">Messages & Communication</a></li>
            <li><a href="/parent/disciplinary-reports">Disciplinary Reports</a></li>
            <li><a href="/parent/fee-billing">Fee & Billing</a></li>
            <li><a href="/parent/settings">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1>Messages & Communication</h1>
            <p>Stay connected with teachers and school staff.</p>
        </div>

        <!-- Messaging System -->
        <div class="messaging-container">
            
            <!-- Contact List -->
            <div class="contacts">
                <h3>Contacts</h3>
                <ul class="contact-list">
                    <li class="contact active">
                        <img src="teacher1.jpg" alt="Teacher">
                        <span>Mr. Johnson (Math)</span>
                    </li>
                    <li class="contact">
                        <img src="teacher2.jpg" alt="Teacher">
                        <span>Ms. Smith (English)</span>
                    </li>
                    <li class="contact">
                        <img src="admin.jpg" alt="Admin">
                        <span>School Administrator</span>
                    </li>
                </ul>
            </div>

            <!-- Chat Section -->
            <div class="chat-section">
                <div class="chat-header">
                    <h3>Mr. Johnson (Math)</h3>
                </div>
                <div class="chat-box">
                    <div class="message received">
                        <p>Hello, Mr. and Mrs. Doe. Your child is doing well in class but needs to submit the homework.</p>
                        <span class="timestamp">10:15 AM</span>
                    </div>
                    <div class="message sent">
                        <p>Thank you for the update, Mr. Johnson. We will remind our child.</p>
                        <span class="timestamp">10:18 AM</span>
                    </div>
                </div>
                <div class="message-input">
                    <input type="text" placeholder="Type a message...">
                    <button>Send</button>
                </div>
            </div>

        </div>
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

/* Layout Styling */
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
    font-family: sans-serif;
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
    margin-left: 250px;
    width: calc(100% - 250px);
    padding: 20px;
}

.header {
    background: white;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.header h1 {
    font-size: 24px;
    color: #333;
}

.header p {
    font-size: 14px;
    color: #777;
}

/* Messaging Container */
.messaging-container {
    display: flex;
    margin-top: 20px;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    height: 500px;
}

/* Contact List */
.contacts {
    width: 30%;
    background: #ecf0f1;
    padding: 15px;
    border-right: 2px solid #ddd;
    overflow-y: auto;
}

.contacts h3 {
    font-size: 18px;
    margin-bottom: 15px;
    color: #333;
}

.contact-list {
    list-style: none;
}

.contact {
    display: flex;
    align-items: center;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.contact img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.contact span {
    font-size: 16px;
    color: #333;
}

.contact:hover,
.contact.active {
    background: #d5f5e3;
}

/* Chat Section */
.chat-section {
    width: 70%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.chat-header {
    padding: 15px;
    background: #3498db;
    color: white;
    font-size: 18px;
    font-weight: bold;
}

.chat-box {
    flex-grow: 1;
    padding: 15px;
    overflow-y: auto;
    background: #fafafa;
    height: 400px;
    display: flex;
    flex-direction: column;
}

.message {
    max-width: 70%;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
    font-size: 14px;
}

.message.received {
    background: #d5f5e3;
    align-self: flex-start;
}

.message.sent {
    background: #3498db;
    color: white;
    align-self: flex-end;
}

.timestamp {
    font-size: 12px;
    margin-top: 5px;
    display: block;
    color: #666;
}

/* Message Input */
.message-input {
    display: flex;
    padding: 10px;
    background: white;
    border-top: 2px solid #ddd;
}

.message-input input {
    flex-grow: 1;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.message-input button {
    margin-left: 10px;
    padding: 12px 20px;
    border: none;
    background: #3498db;
    color: white;
    font-size: 14px;
    border-radius: 5px;
    cursor: pointer;
}

.message-input button:hover {
    background: #2980b9;
}

</style>