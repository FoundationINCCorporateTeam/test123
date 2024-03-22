<?php
$conn = mysqli_connect("sql300.infinityfree.com", "if0_36213692", "MN4444", "if0_36213692_mngames1");

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Construct SQL query
$sql = "INSERT INTO your_table_name (name, email, message) VALUES ('$name', '$email', '$message')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
