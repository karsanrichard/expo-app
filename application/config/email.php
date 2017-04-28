<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*
*Custom email configuration with a new email address to test
*
*/

$config['protocol']    = 'smtp';
$config['smtp_host']    = 'ssl://smtp.gmail.com';
$config['smtp_port']    = '465';
$config['smtp_timeout'] = '7';
$config['smtp_user']    = 'karsantests@gmail.com';
$config['smtp_pass']    = 'karsanTEST';
$config['charset']    = 'UTF-8';
$config['newline']    = "\r\n";
$config['mailtype'] = 'html'; // or html
$config['validation'] = TRUE; // bool whether to validate email or not    

?>