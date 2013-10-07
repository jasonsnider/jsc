<?php
class EmailConfig {

    /**
     * Defines the settings for password reset emails
     * @var array
     */
    public $passwordReset = array(
        'transport' => 'Smtp',
        'from' => 'support@jasonsnider.com',
        'replyTo' => 'support@jasonsnider.com',
        'subject' => 'Password Reset',
        'template' => 'Users.reset_password_request',
        'layout' => false,
        'emailFormat' => 'both',

        'host' => 'ssl://smtp.gmail.com',
        'port' => 465,
        'username' => 'root@jasonsnider.com',
        'password' => 'bS^6cfCx31MSVd7#3lvN7s0U'
        
        //'charset' => 'utf-8',
        //'headerCharset' => 'utf-8',
    );
}