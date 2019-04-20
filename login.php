<?php

// giris.php sayfası
include("db.php");
session_start();

if(isset($_POST["girisbuton"]))
{

	$_SESSION["kullaniciadi"] = $_POST["kadi"];
	$_SESSION["kullanicisifresi"] = $_POST["sifre"];
	
	header('location: index.php');	
}

?>

<form name="kullanicigirisi" method="post" action="">
<table width="354" border="0" cellpadding="2" cellspacing="5">
  <tr>
    <td width="130" height="25">Kullanıcı Adı</td>
    <td width="12">:</td>
    <td width="189">
      <label for="kadi"></label>
      <input type="text" name="kadi" id="kadi">
    </td>
  </tr>
  <tr>
    <td>Kullanıcı Şifresi</td>
    <td>:</td>
    <td><input type="text" name="sifre" id="sifre"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="girisbuton" id="girisbuton" value="Giriş Yap">
   </td>
  </tr>
</table>
</form>