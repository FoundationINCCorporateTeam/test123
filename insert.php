<?php
$conn = mysqli_connect("sql300.infinityfree.com", "if0_36213692", "MN4444", "if0_36213692_mngames1");

// Retrieve form data
$search = $_POST['is'];

// Construct SQL query
$sql = "INSERT INTO searchdata (search_query VALUES ('$search')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
