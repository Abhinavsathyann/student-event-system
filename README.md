# 🎓 Campus Event Portal 2.0

A full-stack **PHP & MySQL web application** that simplifies campus event management.  
Students can register, log in, browse upcoming events, and register for them — while admins can manage users, events, and view analytics through an interactive dashboard.

---

## 🚀 Features

### 👩‍🎓 Student Side
- Register and log in securely (with password hashing)
- Browse upcoming college events
- View event details (date, venue, and description)
- Register for events
- Receive confirmation emails (via PHPMailer)

### 🧑‍💼 Admin Side
- Admin login and role-based access
- Add, update, and delete events
- Manage registered students
- Dashboard with analytics using Chart.js
- View total users, events, and registrations

---

## 🧱 Tech Stack

| Layer | Technology |
|--------|-------------|
| Frontend | HTML5, CSS3, Bootstrap 5, JavaScript (ES6), SweetAlert2 |
| Backend | PHP 8 (OOP + MVC architecture) |
| Database | MySQL |
| Libraries | PHPMailer, Chart.js, DataTables.js |
| Server | Apache (XAMPP / LAMP) |

---


---

## ⚙️ Setup Instructions

### 1️⃣ Prerequisites
Make sure these are installed on your system:
- [XAMPP](https://www.apachefriends.org)
- PHP 8+
- MySQL
- A modern browser (Chrome, Edge, Firefox)

---

### 2️⃣ Installation

1. Clone or download this repository:
   ```bash
   git clone https://github.com/abhinavsathyann/campus-event-portal.git

## Or manually extract it into:

C:\xampp\htdocs\campus-event-portal

## Start XAMPP and activate:

- Apache

- MySQL

## Open phpMyAdmin:

http://localhost/phpmyadmin

## Create a new database:

campus_event_portal

## Import the provided SQL file:

/database/campus_event_portal.sql


## Configure the database connection in:

app/config/database.php


- Example:

private $host = "localhost";

private $db_name = "campus_event_portal";

private $username = "root";

private $password = "";


## 3️⃣ Run the Project

- Student Portal:
👉 http://localhost/campus-event-portal/public/

- Admin Dashboard:
👉 http://localhost/campus-event-portal/admin/

## 4️⃣ Default Admin Account
If you imported the sample SQL:

Email: admin@portal.com

Password: admin123

- If not, create it manually:
  
INSERT INTO users (name, email, password, role)

VALUES ('Admin', 'admin@portal.com', 

'$2y$10$N4HkCKU6eWcV5lgh8kN6TOeBGfgmkhMps/fBChY3pJKlRtu8ngU0u', 'admin');

## ✉️ Email Configuration (PHPMailer)
- Go to vendor/PHPMailer/

- Configure PHPMailer credentials in your event registration handler:

$mail->Username = 'your_email@gmail.com';
  
$mail->Password = 'your_app_password';

-Enable “Less Secure App Access” or use Gmail App Passwords.

## 🧩 Future Enhancements

✅ AJAX search and filtering

✅ Image preview before upload

✅ Event approval system

✅ Notification system for updates

✅ Responsive mobile-friendly UI
