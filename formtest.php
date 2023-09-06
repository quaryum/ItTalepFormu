<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IT Talep Formu</title>
<style type="text/css">
@media screen and (orientation:landscape){
</style>
</head>

<body>
<form name="form1" action=islem.php method="post">
  <table width="667" height="200" border="1" align="center">
    <tbody>
      <tr>
      <tr>
        <td height="69" colspan="4" bgcolor="#3D64A0"><p><span style="color: #FCFCFC; font-weight: bold; font-size: large;">Telep Eden Kişi / Birim <br>
        Bu alan talep eden kişi ve departman bilgilerini içermektedi</span> 
			</p></td></tr>
      
      
        <td height="18">Telebi açan kişi<span style="color: #F80206">*</span></td>
        <td colspan="3"><label for="Talep_talep_acan"></label>
        <input type="text" name="Talep_talep_acan" id="Talep_talep_acan"></td>
      </tr>
      <tr>
        <td height="18">Ürünü kullanacak kişi<span style="color: #F40105">*</span></td>
        <td colspan="3"><label for="textfield2"></label>
        <input type="text" name="Talep_kullanacak_kisi" id="Talep_kullanacak_kisi"></td>
      </tr>
      
      <tr>
        <td height="18"></td>
        <td colspan="3"><input type="submit" name="Gonder" id="Gonder" value="Gönder"></td>
      </tr>
    </tbody>
  </table>
  form1<br>
</form>
</body>
</html>
