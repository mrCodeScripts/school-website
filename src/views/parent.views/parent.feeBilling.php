<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment & Billing</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Parent Dashboard</h2>
        <ul>
            <li><a href="/parent/dashboard">Dashboard</a></li>
            <li><a href="/parent/grade-performance">Grades & Performance</a></li>
            <li><a href="/parent/attendance-record">Attendance Records</a></li>
            <li><a href="/parent/assignment-tasks">Assignments & Tasks</a></li>
            <li><a href="/parent/school-announcements">School Announcements</a></li>
            <li><a href="/parent/message-communication">Messages & Communication</a></li>
            <li><a href="/parent/disciplinary-reports">Disciplinary Reports</a></li>
            <li><a href="/parent/fee-billing" class="active">Fee & Billing</a></li>
            <li><a href="/parent/settings">Settings</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        
        <header class="header">
            <h1>Payment & Billing</h1>
            <p>Manage payments, view transactions, and track outstanding balances.</p>
        </header>

        <!-- Billing Summary -->
        <section class="billing-summary">
            <h2>Billing Overview</h2>
            <div class="summary-box">
                <div>
                    <p>Total Amount Due</p>
                    <h3>$1,250.00</h3>
                </div>
                <div>
                    <p>Last Payment</p>
                    <h3>$500.00 <span>(Feb 25, 2025)</span></h3>
                </div>
                <div>
                    <p>Pending Fees</p>
                    <h3>$750.00</h3>
                </div>
            </div>
        </section>

        <!-- Transaction History -->
        <section class="transaction-history">
            <h2>Transaction History</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Receipt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Feb 25, 2025</td>
                        <td>Tuition Payment</td>
                        <td>$500.00</td>
                        <td class="paid">Paid</td>
                        <td><button class="download-btn">Download</button></td>
                    </tr>
                    <tr>
                        <td>Jan 15, 2025</td>
                        <td>Library Fees</td>
                        <td>$50.00</td>
                        <td class="paid">Paid</td>
                        <td><button class="download-btn">Download</button></td>
                    </tr>
                    <tr>
                        <td>Dec 10, 2024</td>
                        <td>Extracurricular Fees</td>
                        <td>$200.00</td>
                        <td class="unpaid">Unpaid</td>
                        <td><button class="pay-now-btn">Pay Now</button></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Payment Methods -->
        <section class="payment-methods">
            <h2>Saved Payment Methods</h2>
            <div class="method-box">
                <p>Visa **** 1234 <span>Exp: 12/26</span></p>
                <button class="remove-btn">Remove</button>
            </div>
            <button class="add-method-btn">Add Payment Method</button>
        </section>

        <!-- Make a Payment -->
        <section class="make-payment">
            <h2>Make a Payment</h2>
            <form>
                <label for="amount">Amount</label>
                <input type="text" id="amount" placeholder="$0.00">
                
                <label for="payment-method">Select Payment Method</label>
                <select id="payment-method">
                    <option value="visa">Visa **** 1234</option>
                    <option value="mastercard">Mastercard **** 5678</option>
                </select>

                <button type="submit" class="pay-now-btn">Submit Payment</button>
            </form>
        </section>

    </main>

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

body {
    display: flex;
    background-color: #f8f9fc;
    color: #333;
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
    margin-left: 270px;
    width: calc(100% - 270px);
    padding: 20px;
}

.header {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.header h1 {
    font-size: 24px;
}

.header p {
    color: #555;
}

/* Billing Summary */
.billing-summary {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.billing-summary h2 {
    margin-bottom: 15px;
}

.summary-box {
    display: flex;
    justify-content: space-between;
}

.summary-box div {
    background: #ecf0f1;
    padding: 15px;
    border-radius: 6px;
    text-align: center;
    width: 30%;
}

.summary-box h3 {
    margin-top: 8px;
    color: #e74c3c;
}

/* Transaction History */
.transaction-history {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.transaction-history h2 {
    margin-bottom: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

table th {
    background: #34495e;
    color: white;
}

table tr:nth-child(even) {
    background: #f2f2f2;
}

.paid {
    color: green;
    font-weight: bold;
}

.unpaid {
    color: red;
    font-weight: bold;
}

.download-btn, .pay-now-btn {
    background: #1abc9c;
    color: white;
    padding: 6px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.download-btn:hover, .pay-now-btn:hover {
    background: #16a085;
}

/* Payment Methods */
.payment-methods {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.method-box {
    display: flex;
    justify-content: space-between;
    background: #ecf0f1;
    padding: 15px;
    border-radius: 6px;
    margin-bottom: 10px;
}

.remove-btn {
    background: #e74c3c;
    color: white;
    padding: 6px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.remove-btn:hover {
    background: #c0392b;
}

.add-method-btn {
    background: #2980b9;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    width: 100%;
    text-align: center;
}

.add-method-btn:hover {
    background: #1e6792;
}

/* Make a Payment */
.make-payment {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.make-payment h2 {
    margin-bottom: 15px;
}

.make-payment label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

.make-payment input, .make-payment select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.pay-now-btn {
    width: 100%;
    padding: 10px;
    margin-top: 15px;
    background: #27ae60;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.pay-now-btn:hover {
    background: #219150;
}

</style>