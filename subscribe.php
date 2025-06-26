<?php
include 'databse.php'; // Make sure you have a database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT * FROM subscribers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "You are already subscribed!";
    } else {
        // Insert into database
        $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        
        if ($stmt->execute()) {
            echo "Subscription successful!";
        } else {
            echo "Something went wrong. Try again!";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
