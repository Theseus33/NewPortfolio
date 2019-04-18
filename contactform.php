<?php

//if statement to check if submit was hit

if (isset($_POST['submit'])) {
//get data from inputs

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "ranab33@protonmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n".$message;
    
    //php function mail
    mail($mailTo, $subject, $headers);
    header("Location: index.php?maidsend");
}
