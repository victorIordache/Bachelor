<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];
        
        // Google/ Gmail will block the message that is being sent by the PHP function, if I want to solve this, just upload it on a server & setup a mail.
        // Change the php.ini file to be able to send emails to your Gmail from a local server
        $mailTo = "victor.iordach@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;
        
        mail($mailTo, $subject, $txt, $headers);
        header("Location: ../index.php?mailsent");
    }

