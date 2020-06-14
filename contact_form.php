<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $reason = $_POST['reason'];
    $message = $_POST['message'];

    $email_from = 'support@teds-tree.com';

    $email_subject = "Contact Form Submission";

    $email_body = "Contact: $name\n".
                    "Contact Email: $visitor_email\n".
                    "Contact Phone: $visitor_phone\n".
                    "Contact Reason: $reason\n".
                    "Contact Message: $message";
    
    $to = "tedbonham99@gmail.com";

    $headers = "From:  $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>
