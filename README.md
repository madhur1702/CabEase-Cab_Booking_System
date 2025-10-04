# 🚖 CabEase – Cab Booking System  

![Made with PHP](https://img.shields.io/badge/Made%20with-PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Database](https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Hacktoberfest](https://img.shields.io/badge/Hacktoberfest-2025-blueviolet?style=for-the-badge&logo=hackaday)
![Open Source Love](https://img.shields.io/badge/Open%20Source-%E2%9D%A4-red?style=for-the-badge)
![Contributions Welcome](https://img.shields.io/badge/Contributions-Welcome-brightgreen?style=for-the-badge)

---

**CabEase** is a simple and user-friendly **Cab Booking System** web application designed for **learning and prototyping** purposes.  
It allows **users** to register, log in, book cabs, view ride history, and manage their rides — while **drivers** can register, accept ride requests, and manage ride statuses.

---

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  

---

## ✨ Key Features
- ✅ **User & Driver Registration/Login System**  
- ✅ **User Dashboard** – Book cabs, view and manage ride history  
- ✅ **Driver Dashboard** – View, accept, and manage ride requests  
- ✅ **Dynamic Ride Booking System** – Seamlessly request and assign rides  
- ✅ **Role Management** – Both users and drivers supported  
- ✅ **Secure Authentication** – Passwords stored securely (MD5 or bcrypt)  
- ✅ **Responsive Design** – Mobile-friendly layout  

---

## 🚀 Getting Started – Run Locally

Follow these steps to set up **CabEase** on your local machine:

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/madhur1702/CabEase-Cab_Booking_System.git
```

### 2️⃣ Create the MySQL Database
Create a database named `cab_booking`.

Create tables for users and rides according to your system design.

### 3️⃣ Configure Database Connection
Edit the file `includes/db.php` and update your database credentials:

```php
$conn = mysqli_connect("localhost", "root", "your_password", "cab_booking");
```

💡 Ensure your MySQL server is running locally.

### 4️⃣ Run the Project
- Place the project in your web root folder (e.g., `htdocs` for XAMPP).
- Start Apache and MySQL in XAMPP.
- Open your browser and go to:  
  👉 http://localhost/CabEase/pages/index.php

🎉 You’re now ready to book rides using CabEase!

---

## 🤝 Contributing

This project is open for learning and collaboration!  
To contribute:

1. Fork this repository
2. Create your feature branch  
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes  
   ```bash
   git commit -m "feat: add new feature"
   ```
4. Push to your branch  
   ```bash
   git push origin feature-name
   ```
5. Open a Pull Request

💬 Contributions for Hacktoberfest are welcome!  
Add the label `hacktoberfest-accepted` for valid PRs.

---

## 📜 License
This project is licensed under the MIT License.

---

## 💡 Acknowledgements
Special thanks to all contributors participating in Hacktoberfest 2025 💖  
Built with 💻 and ☕ using PHP + MySQL.
