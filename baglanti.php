<?php
	$baglanti= mysql_connect("localhost","root","") or die ("Veritabanına bağlandı" .mysql_error());
	mysql_select_db("tarim_ilaclari") or die ("bağlanamadı".mysql_error());
	mysql_query("set names utf8");
?>