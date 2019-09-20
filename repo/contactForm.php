<?php 
require_once('phpmailer-package/service/notifications.service.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message-content'];
    $subject = "New e-mail from " . $name . " from your portfolio";

    $mailInstance = new NotificationsService();
    $mailInstance->SendMail($email, $name, $subject, $message);
}
?>