<?php
include 'config.php'; // Ensure this file connects to your MySQL database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $cake_name = $_POST['cake'];
    $quantity = $_POST['quantity'];
    $payment_method = $_POST['payment_method'];

    // Insert order into database
    $sql = "INSERT INTO orders (name, email, phone, address, cake_name, quantity, payment_method)
            VALUES ('$name', '$email', '$phone', '$address', '$cake_name', '$quantity', '$payment_method')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to success page after order placement
        header("Location: success.php");
        exit();
    } else {
        // Redirect to home page if an error occurs
        header("Location: index.html");
        exit();
    }
}
    // Close the database connection
    $conn->close()


?>
