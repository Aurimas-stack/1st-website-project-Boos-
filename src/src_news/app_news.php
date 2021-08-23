<?php
    if(isset($_POST['submit']) && !empty($_POST['checkbox'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $website = trim($_POST['website']);

    if(!empty($name) && !empty($email)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "Rimas.zed@gmail.com";
            $subject = "New Message";
            $author = 'From: ' . $name . ', ' . $email;
            $send = htmlspecialchars($message);
            /*mail($to, $subject, $author, $send, $from);*/
            echo "<script>alert('Thank you! We have received your message!.');</script>";
        }
        echo '<p>Message: ' . htmlspecialchars($message) . '</p>';
    };
    include ('db_news.php');
    }
?>