<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KAYDOL</title>
</head>

<body>
<div class="form" align="center">
  <form class="register-form" method="POST">
  <table width="281" border="0">
      <tr>
          <td colspan="2" align="center"><h1>KAYDOL</h1></td>
        </tr>
         <tr>
          <td>Kullanıcı Adı:</td>
          <td><input type="text" placeholder="Kullanıcı Adı" name="kulad"/></td>
        </tr>
        <tr>
          <td width="108">Adı: </td>
          <td width="163"><input type="text" placeholder="Adı" name="ad"/></td>
        </tr>
        <tr>
          <td>Soyadı:</td>
          <td><input type="text" placeholder="Soyadı" name="soyad"/></td>
        </tr>
       
        <tr>
          <td>Şifre:</td>
          <td><input type="password" placeholder="Şifre" name="pas"/></td>
        </tr>
        <tr>
          <td>E-Mail:</td>
          <td><input type="email" placeholder="E-mail Adres" name="mail"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="kaydol" id="kaydol" value="Kaydol" /></td>
        </tr>
      </table>
    </form>
</div>
<?php
@$kontrol = $_POST['kaydol'];
if ($kontrol)
{
	$kulad = $_POST['kulad'];
	$ad = $_POST['ad'];
	$soyad = $_POST['soyad'];
	$sifre = $_POST['sifre'];
	$mail = $_POST['mail'];
	$baglanti= mysql_connect("localhost","root","") or die ("Veritabanına bağlandı" .mysql_error());
	mysql_select_db("kullanici") or die ("bağlanamadı".mysql_error());
	mysql_query("set names utf8");
	mysql_query("insert into kullanici_bilgileri (kulad,ad,soyad,sifre,mail) values ('$kulad','$ad','$soyad',$sifre','$mail')",$baglanti) or die ("Veri Eklenemedi".mysql_error());
	echo "Veri tabanına veri eklediniz.";
}
?>
</body>
</html>