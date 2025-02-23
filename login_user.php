<?php include('header.php'); ?>
<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($condb, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE username='$username' LIMIT 1";
    $result = mysqli_query($condb, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        header("Location: profile.php");
        exit();
    } else {
        echo "<script>alert('Login failed. Incorrect username or password.'); window.history.back();</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .profile-container {
            width: 40%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        button {
        background-color: purple;
        color: white;
        padding: 10px 20px;
        border: none;
         border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
}

button:hover {
    background-color: darkviolet; /* Slightly lighter shade of purple for hover effect */
}

        </style>
<body>
<div class="profile-container">
    <h2>STUDENT LOGIN</h2>
    <p>
    <form method="POST">
        <label>Username:</label> <input type="text" name="username" required><br>
        <p>
        <label>Password:</label> <input type="password" name="password" required><br>
        <p>
        <button type="submit">Login</button>
    </form>
</body>
</html>
<?php include('footer.php'); ?>