<?php
# Database Connection
$condb = mysqli_connect("localhost", "root", "", "studentdb");

# Check if connection is successful
if (!$condb) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
