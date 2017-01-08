<?php

session_start();

$kMail=$_POST["kMail"];
$kSifre=$_POST["kSifre"];
$mail="burcu";
$sifre="12345";

if (empty($kMail) || empty($kSifre)) {
	
	echo "Boş alanları doldurunuz";
} elseif (($kMail != $mail) || ($kSifre != $sifre)) {
	
	echo "Bilgilerinizi kontrol ediniz";
} else {
	
	$_SESSION['kadi'] = TRUE;
	echo "tamam";
}
?>