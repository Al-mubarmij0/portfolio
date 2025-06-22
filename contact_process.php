<?php
// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $name    = trim(htmlspecialchars($_POST['name'] ?? ''));
    $email   = trim(htmlspecialchars($_POST['email'] ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));

    $errors = [];

    if (empty($name))    $errors[] = "Name is required.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
    if (empty($message)) $errors[] = "Message cannot be empty.";

    if (!empty($errors)) {
        // Redirect back with error
        echo "<h2>Error:</h2><ul>";
        foreach ($errors as $err) {
            echo "<li>$err</li>";
        }
        echo "</ul><a href='index.php#contact'>Go back</a>";
        exit;
    }

    // OPTIONAL: Save message to a file (or use DB)
    $log = "contacts.txt";
    $entry = "[" . date('Y-m-d H:i:s') . "] $name <$email>: $message" . PHP_EOL;
    file_put_contents($log, $entry, FILE_APPEND);

    // OPTIONAL: Send an email (requires mail server setup)
    // $to = "you@example.com";
    // $subject = "New contact from $name";
    // $headers = "From: $email" . "\r\n";
    // mail($to, $subject, $message, $headers);

    // Success message
    echo "<h2>Thank you!</h2><p>Your message has been received.</p>";
    echo "<a href='index.php'>Back to home</a>";
} else {
    // Block direct access
    header('Location: index.php');
    exit;
}
