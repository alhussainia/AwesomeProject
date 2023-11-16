<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $subject = $_POST['Subject'];
            $comment = $_POST['Comment'];
        
            $to = 'alhussainia@etown.edu';
            $subject = 'New message from your website';
            $message = "Name: $name\nEmail: $email\nSubject: $subject\nComment: $comment";
        
            $headers = "From: $email";
        
            if (mail($to, $subject, $message, $headers)) {
                echo "Thank you! Your message has been sent. Please allow us 3-5 business days to respond.";
            } else {
                echo "Oops! Something went wrong.";
            }
        }
        ?>