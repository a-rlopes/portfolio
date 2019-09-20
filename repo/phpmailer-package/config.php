<?php

// Definitions
$config = array(
    'mail' => [
        'debug' => 0,
        'host' => 'mail.ritalopes.pt',
        'port' => '25',
        'to_email' => 'general@ritalopes.pt',
        'to_name' => 'Rita Lopes',
        'smtp_enabled' => true,
        'smtp_user' => 'general@ritalopes.pt',
        'smtp_password' => 'nb9juT7h25hF7b5',
        'smtp_security' => 'tls'    // tls or ssl for PHPMailer
    ]
);

// Server
ini_set('max_execution_time', 0);

// Time
date_default_timezone_set('Europe/Lisbon'); 

// Debugging
ini_set('xdebug.var_display_max_depth', -1);
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);