<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Successful</title>
    <link rel="stylesheet" href="html.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="success-container">
        <h2>🎉 Order Placed Successfully! 🎉</h2>
        <p>Thank you for your order, we will process it soon.</p>
        <p><strong>Order ID:</strong> <?php echo isset($_SESSION['order_id']) ? $_SESSION['order_id'] : 'N/A'; ?></p>
        <p><strong>Estimated Delivery:</strong> 30-45 minutes</p>
        <a href="index.html">Return to Home</a>
    </div>
</body>
</html>
