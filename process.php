<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Validate email (you can add more validation here)

    // Send confirmation email
    $subject = 'Confirmation Email';
    $message = "A confirmation email is sent to $email.";
    mail($email, $subject, $message);

    // Redirect to another webpage
    header('Location: subscribe.html');
    exit;
}
?>