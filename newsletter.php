<?php

$email = $_POST['ne'];


print $email;


$db = new PDO('mysql:host=127.0.0.1;dbname=wordpress', 'root', 'rootpass');


$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$query = $db->prepare('INSERT INTO wp_newsletter (email, ip) VALUES (:email, :ip)');

$query->execute(array(
	'email' => $email,
	'ip' => $_SERVER['REMOTE_ADDR']
	));