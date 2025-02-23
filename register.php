<?php include('header.php'); ?>
<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($condb, $_POST['username']);
    $email = mysqli_real_escape_string($condb, $_POST['email']);
    $program = mysqli_real_escape_string($condb, $_POST['program']);
    $course = mysqli_real_escape_string($condb, $_POST['course']);
    $no_matrix = mysqli_real_escape_string($condb, $_POST['no_matrix']);
    $skills = mysqli_real_escape_string($condb, $_POST['skills']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $photo = mysqli_real_escape_string($condb, $_POST['photo']);


    $sql = "INSERT INTO students (username, email, program, course, no_matrix, skills, password, photo) 
            VALUES ('$username', '$email', '$program', '$course', '$no_matrix', '$skills', '$password', '$photo')";

    if (mysqli_query($condb, $sql)) {
        echo "<script>alert('Registration successful!'); window.location.href='login_user.php';</script>";
    } else {
        echo "Error: " . mysqli_error($condb);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
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
    <div class="profile-container">
    <h2>STUDENT REGISTER</h2>
    
    <form method="POST" enctype="multipart/form-data">
        <label>Username:</label> <input type="text" name="username" required><br>
        <p>
        <label>Email:</label> <input type="email" name="email" required><br>
        <p>
        <label>Program:</label> <input type="text" name="program" required><br>
        <p>
        <label>Course:</label> <input type="text" name="course" required><br>
        <p>
        <label>Matrix Number:</label> <input type="text" name="no_matrix" required><br>
        <p>
        <label>Skills:</label> <input type="text" name="skills"><br>
        <p>
        <label>Password:</label> <input type="password" name="password" required><br>
        <p>
        <label>Profile Picture:</label> <input type="file" name="photo"><br>
        <p>
        <button type="submit">Register</button>
        <p>
    </form>
    <p>Already registered? <a href="login_user.php">Login</a></p>
</body>
</html>
<?php include('footer.php'); ?>