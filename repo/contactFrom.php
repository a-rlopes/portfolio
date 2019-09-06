<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message-content'];

    $mailTo = "general@ritalopes.pt";
    $headers = "From: ".$email;
    $subject = "New E-mail from ". $name ." from your portfolio";

    mail($mailTo,$subject, $message, $headers);
}
?>