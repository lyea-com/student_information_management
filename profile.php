<?php
session_start();
include('header.php');
include('db.php');

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login_user.php");
    exit();
}

// Fetch user details from the database
$username = $_SESSION['username'];
$sql = "SELECT * FROM students WHERE username='$username' LIMIT 1";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_assoc($result);

// Redirect if no user found
if (!$row) {
    echo "<script>alert('User not found.'); window.location.href='login_user.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        .profile-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #333;
            margin-bottom: 20px;
        }
        .info {
            text-align: left;
            margin: 0 auto;
            width: 80%;
        }
        .info p {
            font-size: 16px;
            margin: 10px 0;
        }
        .logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: purple;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
<div class="profile-container">

    <!-- Display User Photo -->
    <?php if (!empty($row["photo"])): ?>
        <img src="uploads/<?php echo htmlspecialchars($row["photo"]); ?>" alt="Profile Picture" class="profile-img">
    <?php else: ?>
        <img src="default-avatar.png" alt="Default Profile Picture" class="profile-img">
    <?php endif; ?>

    <!-- Display User Information -->
    <div class="info">
        <p><strong>Username:</strong> <?php echo htmlspecialchars($row["username"]); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($row["email"]); ?></p>
        <p><strong>Program:</strong> <?php echo htmlspecialchars($row["program"]); ?></p>
        <p><strong>Course:</strong> <?php echo htmlspecialchars($row["course"]); ?></p>
        <p><strong>No_Matrix:</strong> <?php echo htmlspecialchars($row["no_matrix"]); ?></p>
        <p><strong>Skills:</strong> <?php echo htmlspecialchars($row["skills"]); ?></p>
    </div>

    <!-- Logout Button -->
    <a href="logout.php" class="logout-btn">Logout</a>
</div>
</body>
</html>
<?php include('footer.php'); ?>
