<?php
/**
 * IRON EDGE FITNESS - Form Processor
 * This script handles all form submissions (Contact, Trial, Newsletter)
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // --- CONFIGURATION ---
    // Change this to the gym's actual business email address
    $to_email = "enquire@ironedge.fit"; 
    
    // --- DATA COLLECTION ---
    $form_type = isset($_POST['form_type']) ? $_POST['form_type'] : 'contact';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Subscriber';
    $interest = isset($_POST['interest']) ? htmlspecialchars($_POST['interest']) : 'Not Specified';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : 'N/A';
    
    // --- EMAIL CONSTRUCTION ---
    if ($form_type == 'newsletter') {
        $subject = "NEW NEWSLETTER SUBSCRIPTION - IRON EDGE FITNESS";
        $email_body = "You have a new newsletter subscriber!\n\n";
        $email_body .= "Email: $email\n";
    } else {
        $subject = "NEW TRIAL INQUIRY: $name - IRON EDGE FITNESS";
        $email_body = "New inquiry received from contact form:\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Interest: $interest\n";
        $email_body .= "Message: $message\n";
    }

    $headers = "From: webmaster@ironedge.fit\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // --- SEND EMAIL ---
    // Note: mail() might require SMTP configuration on local WAMP server
    @mail($to_email, $subject, $email_body, $headers);
    
    // Simulate processing time
    usleep(800000); 

    if ($form_type == 'newsletter') {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=newsletter_success");
    } else {
        header("Location: contact.php?status=success");
    }
    exit;
} else {
    // Redirect to home if accessed directly
    header("Location: index.php");
    exit;
}
?>
