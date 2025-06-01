<?php
include('../includes/db.php');


$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    // Check if user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $error = "Email already registered!";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $password, $role);
        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            $error = "Something went wrong. Try again!";
        }
    }
}
?>

<style>
    .form-box {
        max-width: 400px;
        margin: 40px auto;
        padding: 40px 30px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .form-box h2 {
        margin-bottom: 25px;
        font-weight: 700;
        color: #222;
        text-align: center;
    }
    .form-box form {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }
    .form-box input[type="text"],
    .form-box input[type="email"],
    .form-box input[type="password"],
    .form-box select {
        padding: 14px 16px;
        border: 1.8px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        transition: border-color 0.3s ease;
        width: 100%;
        box-sizing: border-box;
    }
    .form-box input[type="text"]:focus,
    .form-box input[type="email"]:focus,
    .form-box input[type="password"]:focus,
    .form-box select:focus {
        outline: none;
        border-color: #007BFF;
        box-shadow: 0 0 6px #007BFFaa;
    }
    .form-box button.btn {
        background: #007BFF;
        color: #fff;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .form-box button.btn:hover {
        background: #0056b3;
    }
    .form-box p.error {
        color: #dc3545;
        font-weight: 600;
        text-align: center;
        margin-bottom: 15px;
    }
    /* Password toggle */
    .password-wrapper {
        position: relative;
        width: 100%;
    }
    .toggle-password {
        position: absolute;
        top: 50%;
        right: 14px;
        transform: translateY(-50%);
        cursor: pointer;
        color: #888;
        font-size: 18px;
        user-select: none;
    }
</style>

<div class="form-box">
    <h2>Create Your Account</h2>
    <?php if ($error): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>
    <form id="registerForm" method="POST" novalidate>
        <input type="text" name="name" id="name" required placeholder="Full Name" autocomplete="name">
        <input type="email" name="email" id="email" required placeholder="Email Address" autocomplete="email">

        <div class="password-wrapper">
            <input type="password" name="password" id="password" required placeholder="Password" autocomplete="new-password">
            <span class="toggle-password" id="togglePassword" title="Show/Hide Password">&#128065;</span>
        </div>

        <select name="role" id="role" required>
            <option value="" disabled selected>Select Role</option>
            <option value="customer">Customer</option>
            <option value="driver">Driver</option>
        </select>
        <button type="submit" class="btn">Register</button>
    </form>
</div>

<script>
    // Show/hide password toggle
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', () => {
        if (password.type === 'password') {
            password.type = 'text';
            togglePassword.style.color = '#007BFF';
        } else {
            password.type = 'password';
            togglePassword.style.color = '#888';
        }
    });

    // Client-side validation
    const form = document.getElementById('registerForm');

    form.addEventListener('submit', function(event) {
        const name = form.name.value.trim();
        const email = form.email.value.trim();
        const password = form.password.value.trim();
        const role = form.role.value;

        let errors = [];

        // Simple regex for email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (name.length < 3) {
            errors.push('Name must be at least 3 characters.');
        }
        if (!emailRegex.test(email)) {
            errors.push('Please enter a valid email address.');
        }
        if (password.length < 6) {
            errors.push('Password must be at least 6 characters.');
        }
        if (!role) {
            errors.push('Please select a role.');
        }

        if (errors.length > 0) {
            event.preventDefault();
            alert(errors.join('\n'));
        }
    });
</script>


