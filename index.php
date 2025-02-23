<?php include('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>DASHBOARD</title>
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
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        button {
            background-color:purple;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: purple;
        }

        .message {
            text-align: center;
            margin-top: 20px;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .buttons a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: purple;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .buttons a:hover {
            background-color: purple;
        }

        /* Make sure the HTML and body take full height */
html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}
}
        </style>
<body>
<div class="profile-container">
<h1>Welcome to Student E - Profile Page</h1>

        <div class="buttons">
            <a href="register.php">REGISTER YOUR DETAIL</a>
            <a href="login_user.php">LOGIN FIRST</a>
        </div>
   
    <?php include('footer.php'); ?>