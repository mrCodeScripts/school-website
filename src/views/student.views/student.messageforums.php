<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages & Forums</title>
    <link rel="stylesheet" href="messages_forums.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Student Dashboard</h2>
        <ul>
            <li><a href="/student/dashboard">🏠 Dashboard</a></li>
            <li><a href="/student/assignments">📑 Assignments</a></li>
            <li><a href="/student/tasks">✅ Tasks</a></li>
            <li><a href="/student/grades">📊 Grades</a></li>
            <li><a href="/student/learningMaterials">📚 Learning Materials</a></li>
            <li><a href="/student/attendance">🕒 Attendance</a></li>
            <li><a href="/student/message-forums" class="active">💬 Messages & Forums</a></li>
            <li><a href="/student/schedules">📅 Schedule</a></li>
            <li><a href="/student/settings">⚙️ Settings</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="page-header">
            <h1>📬 Messages & Forums</h1>
        </div>

        <!-- Messages Section -->
        <div class="messages-section">
            <h2>📩 Private Messages</h2>
            <div class="messages-container">
                <div class="contacts">
                    <input type="text" placeholder="🔍 Search Contacts...">
                    <ul>
                        <li class="active">📖 Teacher John</li>
                        <li>🎓 Admin Office</li>
                        <li>👥 Classmate Mike</li>
                    </ul>
                </div>
                <div class="chat-window">
                    <div class="chat-header">
                        <h3>Chat with 📖 Teacher John</h3>
                    </div>
                    <div class="chat-body">
                        <p class="received">Hello, John. I need help with my assignment.</p>
                        <p class="sent">Sure! What part do you need help with?</p>
                    </div>
                    <div class="chat-footer">
                        <input type="text" placeholder="Type a message...">
                        <button>📤 Send</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Forums Section -->
        <div class="forums-section">
            <h2>📢 Classroom Forums</h2>
            <div class="forum-container">
                <div class="forum-list">
                    <input type="text" placeholder="🔍 Search Forums...">
                    <ul>
                        <li class="active">📌 Math Homework Discussion</li>
                        <li>💡 Science Project Ideas</li>
                        <li>📖 Literature Club</li>
                    </ul>
                </div>
                <div class="forum-thread">
                    <div class="forum-header">
                        <h3>📌 Math Homework Discussion</h3>
                    </div>
                    <div class="forum-body">
                        <div class="post">
                            <h4>👩‍🎓 Sarah:</h4>
                            <p>Can anyone explain the quadratic formula?</p>
                        </div>
                        <div class="post">
                            <h4>👨‍🏫 Teacher John:</h4>
                            <p>Yes! The formula is -b ± √(b² - 4ac) / 2a.</p>
                        </div>
                    </div>
                    <div class="forum-footer">
                        <input type="text" placeholder="Write a reply...">
                        <button>📝 Post</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
<style>
/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    display: flex;
    height: 100vh;
    background: #f4f4f9;
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
    margin-left: 270px;
    flex: 1;
    padding: 20px;
}

.page-header {
    margin-bottom: 20px;
}

.page-header h1 {
    color: #333;
}

/* Messages Section */
.messages-section {
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.messages-container {
    display: flex;
    height: 350px;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
}

/* Contacts List */
.contacts {
    width: 30%;
    background: #ecf0f1;
    padding: 10px;
    border-right: 1px solid #ddd;
}

.contacts input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

.contacts ul {
    list-style: none;
}

.contacts ul li {
    padding: 10px;
    background: #fff;
    margin-bottom: 5px;
    border-radius: 5px;
    cursor: pointer;
}

.contacts ul li:hover,
.contacts ul li.active {
    background: #1abc9c;
    color: #fff;
}

/* Chat Window */
.chat-window {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.chat-header {
    background: #1abc9c;
    color: white;
    padding: 10px;
    text-align: center;
}

.chat-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
    background: #fafafa;
}

.chat-body p {
    padding: 8px;
    margin: 5px 0;
    border-radius: 5px;
    width: fit-content;
    max-width: 80%;
}

.received {
    background: #ecf0f1;
    align-self: flex-start;
}

.sent {
    background: #1abc9c;
    color: white;
    align-self: flex-end;
}

.chat-footer {
    display: flex;
    padding: 10px;
    background: #ecf0f1;
}

.chat-footer input {
    flex: 1;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.chat-footer button {
    padding: 8px 15px;
    background: #1abc9c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 5px;
}

.chat-footer button:hover {
    background: #16a085;
}

/* Forums Section */
.forums-section {
    background: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.forum-container {
    display: flex;
    height: 350px;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
}

/* Forum List */
.forum-list {
    width: 30%;
    background: #ecf0f1;
    padding: 10px;
    border-right: 1px solid #ddd;
}

.forum-list input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

.forum-list ul {
    list-style: none;
}

.forum-list ul li {
    padding: 10px;
    background: #fff;
    margin-bottom: 5px;
    border-radius: 5px;
    cursor: pointer;
}

.forum-list ul li:hover,
.forum-list ul li.active {
    background: #1abc9c;
    color: #fff;
}

/* Forum Thread */
.forum-thread {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.forum-header {
    background: #1abc9c;
    color: white;
    padding: 10px;
    text-align: center;
}

.forum-body {
    flex: 1;
    padding: 10px;
    overflow-y: auto;
    background: #fafafa;
}

.post {
    background: #ecf0f1;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 5px;
}

.post h4 {
    margin-bottom: 5px;
}

.forum-footer {
    display: flex;
    padding: 10px;
    background: #ecf0f1;
}

.forum-footer input {
    flex: 1;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.forum-footer button {
    padding: 8px 15px;
    background: #1abc9c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 5px;
}

.forum-footer button:hover {
    background: #16a085;
}

/* Responsive */
@media (max-width: 768px) {
    .messages-container, .forum-container {
        flex-direction: column;
        height: auto;
    }

    .contacts, .forum-list {
        width: 100%;
        border-right: none;
    }
}

</style>