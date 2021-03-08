<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "nils_k_93@hotmail.ch";
    $headers = "From: ".$emailFrom;
    $txt = "Reservation von ".$name;


    mail($mailTo, $subject, $txt, $headers);

    header("Locations: index.html")

}



?>