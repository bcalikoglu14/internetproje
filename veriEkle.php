<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Veri Ekle</title>
</head>

<body>
<div align="center">
<table width="278" height="148" border="0">
  <tr>
    <td colspan="2" align="center"><h1>İLAÇ EKLE</h1></td>
  </tr>
  <tr>
    <td width="94">İlaç Adı:</td>
    <td width="175"><input type="text" name="ad" /></td>
  </tr>
  <tr>
    <td>Etken Madde: </td>
    <td><input type="text" name="etkenMadde" /></td>
  </tr>
  <tr>
    <td>Form: </td>
    <td><input type="text" name="form" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="btn" value="Gönder" /></td>
  </tr>
</table>
</div>
</body>
<?php
@$kontrol = $_POST['btn'];
if ($kontrol)
{
	$ad = $_POST['ad'];
	$etkenMadde = $_POST['etkenMadde'];
	$form = $_POST['form'];
	include("baglanti.php");
	mysql_query("insert into ilaclar (ad,etkenMadde,form) values ('$ad','$etkenMadde','$form')",$baglanti) or die ("Veri Eklenemedi".mysql_error());
	echo "Veri tabanına veri eklediniz.";
}
?>
</html>