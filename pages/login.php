<?php
session_start();
include('../includes/db.php');

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows === 1) {
        $user = $res->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'customer') {
                header("Location: user_dashboard.php");
            } else {
                header("Location: driver_dashboard.php");
            }
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "No user found with that email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | CabEase</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Centering the login box */
    html, body {
      height: 100%;
      margin: 0;
    }
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 15px;
    }
    .login-container {
      width: 100%;
      max-width: 400px;
      background: #fff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 700;
      color: #222;
    }
    .login-container form {
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    .login-container input[type="email"],
    .login-container input[type="password"] {
      padding: 14px 18px;
      border: 1.8px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }
    .login-container input[type="email"]:focus,
    .login-container input[type="password"]:focus {
      border-color: #1e90ff;
      outline: none;
    }
    .login-container .btn {
      padding: 14px 0;
      background: #1e90ff;
      color: white;
      font-size: 1.1rem;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .login-container .btn:hover {
      background: #0073e6;
    }
    .error-message {
      background-color: #ffdddd;
      border-left: 6px solid #f44336;
      color: #d8000c;
      padding: 12px 16px;
      margin-bottom: 20px;
      border-radius: 6px;
      font-weight: 600;
    }
    .register-link {
      text-align: center;
      margin-top: 15px;
      font-size: 0.9rem;
      color: #555;
    }
    .register-link a {
      color: #1e90ff;
      text-decoration: none;
      font-weight: 600;
    }
    .register-link a:hover {
      text-decoration: underline;
    }
    @media (max-width: 480px) {
      .login-container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

<div class="login-container" role="main" aria-label="User login form">
  <h2>Login</h2>

  <?php if ($error): ?>
    <div class="error-message" role="alert"><?php echo $error; ?></div>
  <?php endif; ?>

  <form method="POST" novalidate>
    <input type="email" name="email" required placeholder="Email Address" aria-label="Email Address" />
    <input type="password" name="password" required placeholder="Password" aria-label="Password" />
    <button type="submit" class="btn">Login</button>
  </form>

  <p class="register-link">
    Don't have an account? <a href="register.php">Register here</a>
  </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
