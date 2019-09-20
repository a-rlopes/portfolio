<?php

// Requires
require_once(dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'config.php' );

// Composer's autoloader for PHPMailer
require_once(dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php' );
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class NotificationsService
{
    /* ==================================================================
     * Constructor & Properties
     * ================================================================== */

    private static $_instance;

    public function __construct()
    {
        //..
    }

    public static function getInstance()
    {
        if (!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /* ==================================================================
     * Functions
     * ================================================================== */

	/* Usage: self::SendMail('sender@mail.tld', 'Name sender', 'Title of email', '<p>Email HTML body.</p>', 'Email non-HMTL body.'); */
    public function SendMail($address_from, $address_name, $subject, $body)
    {
        global $config;

        $mail = new PHPMailer(true);                                // Passing `true` enables exceptions
        try {
            // Server settings
            $mail->SMTPDebug = $config['mail']['debug'];            // Verbose debug output (https://github.com/PHPMailer/PHPMailer/wiki/SMTP-Debugging)
            $mail->Host = $config['mail']['host'];                  // Specify main and backup SMTP servers
            $mail->Port = $config['mail']['port'];                  // TCP port to connect to
            
            if ( $config['mail']['smtp_enabled'] )
            {
                $mail->isSMTP();                                        // Set mailer to use SMTP
                $mail->SMTPAuth = true;                                 // Enable SMTP authentication
                $mail->Username = $config['mail']['smtp_user'];         // SMTP username
                $mail->Password = $config['mail']['smtp_password'];     // SMTP password
                $mail->SMTPSecure = $config['mail']['smtp_security'];   // Enable TLS encryption, `ssl` also accepted
            }

            // Origin
            $mail->setFrom($address_from, $address_name);

            // Recipient
            $mail->addAddress($config['mail']['to_email'], $config['mail']['to_name']);

            // Content
            //$mail->isHTML(true);                                    // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = $body;

            // Send mail
            $mail->send();
            return true;                                            //echo 'Message has been sent';
        } catch (Exception $e) {
            //echo $mail->ErrorInfo;
            return false;
        }
    }
}