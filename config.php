<?php
$host = '127.0.0.1';
$dbname = 'nxxgegje_form_send';
$username = 'nxxgegje_dadmeta';
$password = 'asdfhjfds67354dksjf';
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$GLOBALS['pdo'] = new PDO("mysql:host=$host; dbname=$dbname", $username, $password, $opt);