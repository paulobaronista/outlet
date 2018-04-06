<?php
if(!defined('BASEPATH')) exit('No direct script access allowed.');
/* Arquivo de configuracao de email */
// $config['protocol'] = 'smtp';
// $config['charset'] = 'utf8';
// $config['wordwrap'] = TRUE;
// $config['smtp_host'] = 'mail.outletcomprouganhou.com.br';
// $config['smtp_user'] = 'contato@outletcomprouganhou.com.br';
// $config['smtp_pass'] = 'digi@2016';
// $config['smtp_port'] = 465;
//$config['smtp_timeout'] = 20;

/* Arquivo de configuracao de email */
$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'utf8';
$config['wordwrap'] = TRUE;
$config['smtp_host'] = 'mail.outletcomprouganhou.com.br';
$config['smtp_user'] = 'contato@outletcomprouganhou.com.br';
$config['smtp_pass'] = 'digi@2016';
$config['smtp_port'] = 465;
//$config['smtp_timeout'] = 20;