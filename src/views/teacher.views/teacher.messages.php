<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Messages</title>
    <link rel="stylesheet" href="teacher-messages.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Teacher Panel</h2>
        <ul>
            <li><a href="/teacher/dashboard">Dashboard</a></li>
            <li><a href="/teacher/attendance">Attendance</a></li>
            <li><a href="/teacher/grades" >Grade Management</a></li>
            <li><a href="/teacher/studentReports">Student Reports</a></li>
            <li><a href="/teacher/messages" class="active">Messages</a></li>
            <li><a href="/teacher/schedule">Schedule</a></li>
            <li><a href="/teacher/settings">Settings</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <section class="main-content">
        
        <!-- Header -->
        <header class="header">
            <h1>Messages & Communication</h1>
            <button class="new-message-btn">New Message</button>
        </header>

        <!-- Chat & Messages Panel -->
        <div class="chat-container">
            
            <!-- Contacts List -->
            <div class="contacts-panel">
                <h3>Contacts</h3>
                <input type="text" class="search-bar" placeholder="Search contacts...">
                <ul class="contact-list">
                    <li class="contact active">
                        <img src="profile1.jpg" alt="User">
                        <div>
                            <p class="contact-name">Principal Johnson</p>
                            <p class="last-message">"Please send me the report..."</p>
                        </div>
                    </li>
                    <li class="contact">
                        <img src="profile2.jpg" alt="User">
                        <div>
                            <p class="contact-name">Ms. Anne (Registrar)</p>
                            <p class="last-message">"Enrollment update completed."</p>
                        </div>
                    </li>
                    <li class="contact">
                        <img src="profile3.jpg" alt="User">
                        <div>
                            <p class="contact-name">Student - James</p>
                            <p class="last-message">"I need help with my grades..."</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Chat Box -->
            <div class="chat-box">
                <div class="chat-header">
                    <img src="profile1.jpg" alt="User">
                    <p class="chat-name">Principal Johnson</p>
                </div>
                
                <div class="chat-messages">
                    <div class="message received">
                        <p>Good morning! Please send me the latest student performance reports.</p>
                        <span class="time">08:30 AM</span>
                    </div>
                    <div class="message sent">
                        <p>Good morning! I'll send the reports shortly.</p>
                        <span class="time">08:32 AM</span>
                    </div>
                </div>

                <!-- Chat Input -->
                <div class="chat-input">
                    <input type="text" placeholder="Type a message...">
                    <button class="send-btn">Send</button>
                </div>
            </div>

        </div>

    </section>

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

/* Body */
body {
    display: flex;
    background-color: #f4f6f9;
    height: 100vh;
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
    flex-grow: 1;
    padding: 20px;
}

/* Header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #ffffff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.header h1 {
    font-size: 20px;
    color: #333;
}

.new-message-btn {
    padding: 10px 15px;
    border: none;
    background-color: #3498DB;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.new-message-btn:hover {
    background-color: #2980B9;
}

/* Chat Container */
.chat-container {
    display: flex;
    height: calc(100vh - 100px);
    margin-top: 15px;
}

/* Contacts Panel */
.contacts-panel {
    width: 300px;
    background: #ffffff;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.contacts-panel h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.search-bar {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

.contact-list {
    list-style: none;
    overflow-y: auto;
    max-height: 400px;
}

.contact {
    display: flex;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #eee;
    cursor: pointer;
    transition: background 0.3s;
}

.contact:hover {
    background: #f1f1f1;
}

.contact img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.contact-name {
    font-size: 16px;
    font-weight: bold;
}

.last-message {
    font-size: 12px;
    color: #888;
}

/* Chat Box */
.chat-box {
    flex-grow: 1;
    background: #ffffff;
    margin-left: 15px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.chat-header {
    display: flex;
    align-items: center;
    padding: 15px;
    border-bottom: 1px solid #eee;
    background: #3498DB;
    color: #fff;
    border-radius: 8px 8px 0 0;
}

.chat-header img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
}

.chat-name {
    font-size: 18px;
}

/* Chat Messages */
.chat-messages {
    flex-grow: 1;
    padding: 15px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
}

.message {
    max-width: 60%;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1.5;
}

.received {
    background: #EAEAEA;
    align-self: flex-start;
}

.sent {
    background: #3498DB;
    color: white;
    align-self: flex-end;
}

.time {
    font-size: 12px;
    color: #555;
    margin-top: 5px;
}

/* Chat Input */
.chat-input {
    display: flex;
    padding: 15px;
    border-top: 1px solid #eee;
}

.chat-input input {
    flex-grow: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

.send-btn {
    padding: 10px 15px;
    border: none;
    background: #3498DB;
    color: #fff;
    border-radius: 5px;
    margin-left: 10px;
    cursor: pointer;
    transition: 0.3s;
}

.send-btn:hover {
    background: #2980B9;
}

</style>