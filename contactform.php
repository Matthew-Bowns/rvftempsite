<?php

if(isset($POST['submit'])) {
    
    
    $name = $_POST['name'];
    $company = $_POST['company'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $mailTo = "enquiries@rochevalleyfilsm.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "Form submission from: ".$name."\n\n".$message;

    mail($mailTo,"Form Submission",$txt,$headers);
    header("Location: index.php?mailsend");
    
}