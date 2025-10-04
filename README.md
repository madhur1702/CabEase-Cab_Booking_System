# 🚖 CabEase – Cab Booking System

<p align="center">
  <img src="https://img.shields.io/badge/Made%20with-PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
  <img src="https://img.shields.io/badge/Hacktoberfest-2025-blueviolet?style=for-the-badge&logo=hackaday"/>
  <img src="https://img.shields.io/badge/Open%20Source-%E2%9D%A4-red?style=for-the-badge"/>
  <img src="https://img.shields.io/badge/Contributions-Welcome-brightgreen?style=for-the-badge"/>
</p>

<p align="center">
  <img src="https://cdn.dribbble.com/users/1615584/screenshots/4978087/cab.gif" alt="Cab Booking Illustration" width="300"/>
</p>

---

> **CabEase** is a simple and user-friendly **Cab Booking System** web application designed for **learning and prototyping** purposes.  
> It allows <b>users</b> to register, log in, book cabs, view ride history, and manage their rides — while <b>drivers</b> can register, accept ride requests, and manage ride statuses.

---

## 🛠️ Tech Stack

| Frontend    | Backend | Database |
| ----------- | ------- | -------- |
| HTML, CSS, JavaScript | PHP | MySQL |

---

## ✨ Features

- 🔑 **User & Driver Registration/Login System**
- 🚗 **User Dashboard:** Book cabs, view & manage ride history
- 🚕 **Driver Dashboard:** View, accept, and manage ride requests
- 🔄 **Dynamic Ride Booking:** Seamless request & assignment
- 👥 **Role Management:** User & Driver support
- 🔒 **Secure Authentication:** Passwords with MD5/bcrypt
- 📱 **Responsive Design:** Mobile-friendly

---

## 🚀 Getting Started

**Run Locally in 4 Easy Steps:**

<ol>
  <li>
    <b>Clone the Repository</b><br>
    <pre><code>git clone https://github.com/madhur1702/CabEase-Cab_Booking_System.git</code></pre>
  </li>
  <li>
    <b>Create the MySQL Database</b><br>
    <ul>
      <li>Create a database named <code>cab_booking</code>.</li>
      <li>Create tables for users and rides according to your system design.</li>
    </ul>
  </li>
  <li>
    <b>Configure Database Connection</b><br>
    Edit <code>includes/db.php</code> and update your database credentials:<br>
    <pre><code>php
$conn = mysqli_connect("localhost", "root", "your_password", "cab_booking");
    </code></pre>
    <i>Ensure your MySQL server is running locally.</i>
  </li>
  <li>
    <b>Run the Project</b><br>
    <ul>
      <li>Place the project in your web root folder (e.g. <code>htdocs</code> for XAMPP).</li>
      <li>Start Apache and MySQL in XAMPP.</li>
      <li>Open your browser and go to:<br>
        <a href="http://localhost/CabEase/pages/index.php">http://localhost/CabEase/pages/index.php</a>
      </li>
    </ul>
  </li>
</ol>

🎉 <b>You’re now ready to book rides using CabEase!</b>

---

## 🤝 Contributing

We love contributions from everyone! To get started:

1. **Fork** this repo
2. **Create your feature branch:**  
   ```bash
   git checkout -b feature-name
   ```
3. **Commit your changes:**  
   ```bash
   git commit -m "feat: add new feature"
   ```
4. **Push to your branch:**  
   ```bash
   git push origin feature-name
   ```
5. **Open a Pull Request** 🚀

💬 **Hacktoberfest PRs are welcome!**  
Add the label <code>hacktoberfest-accepted</code> for valid PRs.

---

## 📜 License

This project is licensed under the [MIT License](LICENSE).

---

## 💡 Acknowledgements

Special thanks to all contributors participating in Hacktoberfest 2025 💖  
Built with 💻 and ☕ using PHP + MySQL.

<p align="center">
  <img src="https://media.giphy.com/media/26ufnwz3wDUli7GU0/giphy.gif" width="120"/>
</p>
