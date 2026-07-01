🌐 Network Inventory System

📌 Project Overview

The Network Inventory System is a web-based application developed using PHP, MySQL, HTML, CSS, and JavaScript.  
It is designed to manage and track network devices in an organization efficiently.  

Users can log in, add devices, view device details, and monitor device status through a simple dashboard interface.

🚀 Features

🔐 User Login Authentication System
📊 Dashboard with Device Statistics
➕ Add New Network Devices (`add_device.php`)
📋 View Device List (`view_devices.php`)
🔍 Live Search Functionality
🌙 Dark / Light Mode Toggle
📈 Device Status Pie Chart (Active / Inactive / Maintenance)
🚪 Secure Logout System
📱 Responsive UI Design

🛠️ Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- Chart.js
- XAMPP Server

📂 Project Structure

NetworkInventorySystem/
│
├── css/
│   └── style.css
│
├── js/
│   └── validation.js
│
├── images/
│
├── database/
│   └── network_inventory_db.sql
│
├── login.php
├── authenticate.php
├── dashboard.php
├── add_device.php
├── view_devices.php
├── logout.php
├── db.php
├── README.md
└── .gitignore

⚙️ Installation Guide

1. Install XAMPP
Download and install XAMPP from:
https://www.apachefriends.org

2. Copy Project Folder
Move the project folder into:

C:\xampp\htdocs\

3. Start Services
Open XAMPP Control Panel and start:

- Apache
- MySQL

4. Create Database
Go to:

http://localhost/phpmyadmin

Create a database:

network_inventory_db

5. Import Database
Import this file:

database/network_inventory_db.sql

6. Run Project
Open browser and go to:

http://localhost/NetworkInventorySystem

🔑 Default Login

**Username:**
```
admin
```

**Password:**
```
1234
```

📊 Modules

- Login Module
- Dashboard Module
- Add Device Module
- View Devices Module
- Logout Module

🎯 Future Improvements

- Edit Device Feature
- Delete Device Feature
- Role-based Access Control (Admin / User)
- Export Reports (PDF / Excel)
- Email Notifications
- Advanced Filtering & Search

👨‍💻 Developer

**Senali Vihanga**  
General Sir John Kothalawala Defence University  
Information & Communication Technology Undergraduate  

📄 License

This project is developed for educational and portfolio purposes only.