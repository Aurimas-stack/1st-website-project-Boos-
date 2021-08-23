<?php
    if(isset($_POST['Submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

    if(!empty($name) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "Rimas.zed@gmail.com";
            $subject = "New Message";
            $author = 'From: ' . $name . ', ' . $email;
            $send = htmlspecialchars($message);
            /*mail($to, $subject, $autorius, $zinute, $from);*/
            echo "<script>alert('Thank you! We have received your message!.');</script>";
        }
        echo '<p>Message: ' . htmlspecialchars($message) . '</p>';
    };
    include ('db.php');
    }
?>