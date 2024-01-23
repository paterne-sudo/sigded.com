<?php
session_start();

$mail_me = "contact@sigded.com";

// Récupérer les données envoyées depuis le client
$data = json_decode(file_get_contents('php://input'), true);

// Stocker les données dans la variable $_SESSION
$info_mail = $data;

$headers = "From: " . $info_mail['email'] . "\r\n";
$headers .= "Reply-To: " . $info_mail['email'] . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

mail($mail_me, $info_mail['subject'], $info_mail['message'], $headers);
