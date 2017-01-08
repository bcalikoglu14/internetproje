<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TARIMSAL İLAÇ</title>
<style type="text/css">
#anaDiv {
	background-color: #0C6;
	height: auto;
	width: auto;
}
#menu {
	background-color: #C66;
	height: 100px;
	width: auto;
}
#icerik {
	background-color: #FFC;
	height: auto;
	width: auto;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<div id="anaDiv">
  <div id="menu" align="center">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="giris.php" target="icerik">KULLANICI</a>      </li>
      <li><a href="kaydol.php" target="icerik">KAYDOL</a></li>
      <li><a href="veriEkle.php" target="icerik">VER&#304;  EKLEME</a></li>
</ul>
  </div>
  <div id="icerik"><iframe name="icerik" height="700" width="1330" src="anasayfa.php"></iframe></div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
