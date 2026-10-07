<?php
require_once "config/db.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = trim($_POST["Name"] ?? "");
    $Email = trim($_POST["Email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    // Validate form
    if (empty($Name) || empty($Email) || empty($message)) {
        die("Please fill in all fields.");
    }

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email address.");
    }

    // Save to database
    $sql = "INSERT INTO portfolio (Name, Email, message)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $Name, $Email, $message);

    if ($stmt->execute()) {

        // WhatsApp message
        $whatsappMessage =
            "Hello Franklin,%0A%0A" .
            "My name is " . urlencode($Name) . ".%0A" .
            "Email: " . urlencode($Email) . "%0A%0A" .
            "Message:%0A" . urlencode($message);

        $whatsappNumber = "2348028218218";

        header("Location: https://wa.me/$whatsappNumber?text=$whatsappMessage");
        exit();
    } else {
        echo "Something went wrong. Please try again.";
    }

    $stmt->close();
}

$conn->close();
