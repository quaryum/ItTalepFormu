<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IT Talep Formu</title>
<style type="text/css">
@media screen and (orientation:landscape){
.1 {
}
.Mevcutçalışan {
}
}
.1 {
}
.Yeni {
}
</style>
</head>

<body>
<form name="form1" action=islem.php method="post">
  <table width="667" height="1055" border="1" align="center">
    <tbody>
      <tr>
      <tr>
        <td height="69" colspan="4" bgcolor="#3D64A0"><p><span style="color: #FCFCFC; font-weight: bold; font-size: large;">Telep Eden Kişi / Birim <br>
        Bu alan talep eden kişi ve departman bilgilerini içermektedi</span> 
			</p></td></tr>
      <tr>
        <td height="18"> Form adı</td>
        <td colspan="3"><input name="Talep_turu" type="radio" id="Talep_turu" value="IT Ürün Talep Formu" checked="checked">
        <label for="radio">IT Ürün Talep Formu </label>        <label for="textfield"></label></td>
      </tr>
      <tr>
        <td height="18"> Departman<span style="color: #F70105">*</span></td>
        <td colspan="3"><label for="select"></label>
          <select name="Talep_departmani" id="select">
            <option value="Yönetim Kurulu">Yönetim Kurulu</option>
            <option value="Bilgi İşlem">Bilgi İşlem</option>
        </select></td>
      </tr>
      <tr>
        <td height="18">Telebi açan kişi<span style="color: #F80206">*</span></td>
        <td colspan="3"><label for="Talep_talep_acan"></label>
        <input type="text" name="Talep_talep_acan" id="Talep_talep_acan"></td>
      </tr>
      <tr>
        <td height="18">Ürünü kullanacak kişi<span style="color: #F40105">*</span></td>
        <td colspan="3"><label for="textfield2"></label>
        <input type="text" name="Talep_kullanacak_kisi" id="textfield2"></td>
      </tr>
      <tr>
        <td height="18"> Çalışan<span style="color: #F80307">*</span></td>
        <td colspan="3">
			<input name="Talep_calisan" type="radio" id="YeniCalisan" value="Yeni Çalışan" unchecked> 
    		<label for="Yeni çalışan">Yeni çalışan</label>
		  <input name="Talep_calisan" type="radio" id="MevcutCalisan" value="Mevcut Çalışan"> 
			<label for="Mevcut çalışan">Mevcut çalışan</label>
		</td>
      </tr>
      <tr>
        <td height="18">Lokasyon<span style="color: #F40408">*</span></td>
        <td colspan="3">
		<input name="Talep_lokasyon" type="radio" id="Merkez" value="Merkez" unchecked> 
    		<label for="Merkez">Merkez</label>
		<input name="Talep_lokasyon" type="radio" id="Fabrika" value="Fabrika"> 
			<label for="fabrika">Fabrika</label>
		<input name="Talep_lokasyon" type="radio" id="Bolge" value="Bölge"> 
			<label for="bolge">Bölge</label>
		  </td>
      </tr>
      <tr>
        <td height="18">e-posta<span style="color: #FD0206">*</span></td>
        <td colspan="3"><label for="textfield3"></label>
        <input type="text" name="Talep_mail" id="Talep_mail"></td>
      </tr>
      <tr>
        <td height="18">Telefon Nu.</td>
        <td colspan="3"><label for="textfield4"></label>
        <input type="text" name="Talep_telefon" id="textfield4"></td>
      </tr>
      <tr>
        <td height="18" colspan="4" bgcolor="#4B9B7E" style="color: #F9F2F2; font-size: large;">Donanım Talepleriniz<br>
		  Kaç edet talep ediyorsanız rakam ile belirtiniz.</td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title="Hp 240 G9 6Q8L8ES08 I5-1235U 16GB 512SSD 14&quot; Fullhd W11P 722$+KDV"/>Laptop PC</td>
        <td><label for="textfield5"></label>
        <input name="Donanim_Laptop_Pc" type="text" id="Donanim_Laptop_Pc" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea"></label>
        <textarea name="Not_Laptop_Pc" maxlength="1000" id="Not_Laptop_Pc" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Dell Precision 7560 Intel Xeon W-11855M 16GB 1tb SSD RTXA2000 Windows 11 Pro 15.6&quot; UHD Taşınabilir Bilgisayar 3456$"/>Laptop Work</td>
        <td><label for="textfield6"></label>
        <input name="Donanim_Laptop_Workstation" type="text" id="Donanim_Laptop_Workstation" size="3" maxlength="3">          </td>
        <td colspan="2"><label for="textarea2"></label>
        <textarea name="Not_Laptop_Workstation" id="Not_Laptop_Workstation" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Dell Precision T3640 W-1250-2 Intel Xeon W-1250 8GB 1TB P400 Windows 10 Pro 1550$"/>Desktop PC</td>
        <td><label for="textfield7"></label>
        <input name="Donanim_Desktop_Pc" type="text" id="Donanim_Desktop_Pc" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea3"></label>
        <textarea name="Not_Desktop_Pc" id="Not_Desktop_Pc" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Dell Precision T3640 W-1250-2 Intel Xeon W-1250 8GB 1TB P400 Windows 10 Pro 1550$"/>Desk. Workstation</td>
        <td><label for="textfield8"></label>
        <input name="Donanim_Desktop_Workstation" type="text" id="Donanim_Desktop_Workstation" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea4"></label>
        <textarea name="Not_Desktop_Workstation" id="Not_Desktop_Workstation" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Apple MacBook Pro M2 Çip 8GB 256GB SSD macOS 13 1400$"/>MacBook</td>
        <td><label for="textfield9"></label>
        <input name="Donanim_Macbook" type="text" id="Donanim_Macbook" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea5"></label>
        <textarea name="Not_Macbook" id="Not_Macbook" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Apple MacBook Pro M2 Çip 8c Cpu 10C Gpu 16 GB 256 GB SSD Macos 13.3 3042$"/>Mac Pro Laptop</td>
        <td><label for="textfield10"></label>
        <input name="Donanim_Mac_Pro_Laptop" type="text" id="Donanim_Mac_Pro_Laptop" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea6"></label>
        <textarea name="Not_Mac_Pro_Laptop" id="Not_Mac_Pro_Laptop" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20"/>Mac Workstation</td>
        <td><label for="textfield11"></label>
        <input name="Donanim_Mac_Workstation" type="text" id="Donanim_Mac_Workstation" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea7"></label>
        <textarea name="Not_Mac_Workstation" id="Not_Mac_Workstation" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Active 4 Pro SM-T638 - 1200$"/>Tablet</td>
        <td><label for="textfield12"></label>
        <input name="Donanim_Tablet" type="text" id="Donanim_Tablet" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea8"></label>
        <textarea name="Not_Tablet" id="Not_Tablet" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20"/> Mobil Telefon</td>
        <td><label for="textfield13"></label>
        <input name="Donanim_Mobil_Telefon" type="text" id="Donanim_Mobil_Telefon" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea9"></label>
        <textarea name="Not_Mobil_Telefon" id="Not_Mobil_Telefon" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "BenQ EH600 3500 ANSI FHD Kablosuz (Wi-Fi) Android HDMI VGA 2 x USB Smart DLP Projektör  1134$"/>Projeksiyon</td>
        <td><label for="textfield14"></label>
        <input name="Donanim_Projection" type="text" id="Donanim_Projection" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea10"></label>
        <textarea name="Not_Projection" id="Not_Projection" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20"/>Yazıcı</td>
        <td><label for="textfield15"></label>
        <input name="Donanim_Yazici" type="text" id="Donanim_Yazici" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea11"></label>
        <textarea name="Not_Yazici" id="Not_Yazici" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Hp 240 G9 6Q8L8ES08 I5-1235U 16GB 512SSD 14&quot; Fullhd W11P 722$+KDV"/>Donanım Notlarınız</td>
        <td colspan="3"><label for="textarea12"></label>
        <textarea name="Donanim_Donanim_Notlari" id="Donanim_Donanim_Notlari"></textarea></td>
      </tr>
      <tr>
        <td height="18" colspan="4" bgcolor="#E99B09" style="color: #F3E9E9; font-size: large; font-style: normal; font-weight: bold;">Yazılım ve Lisans Talepleriniz
        <br style="color: #FFFDFD">Kaç edet talep ediyorsanız rakam ile belirtiniz ve açıklama yazınız.</td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "$135"/>SAP Worker</td>
        <td><label for="textfield16"></label>
        <input name="Yazilim_Sap_Worker" type="text" id="Yazilim_Sap_Worker" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea13"></label>
        <textarea name="Not_Sap_Worker" id="Not_Sap_Worker" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "$1850"/>SAP Pro</td>
        <td><label for="textfield17"></label>
        <input name="Yazilim_Sap_Pro" type="text" id="Yazilim_Sap_Pro" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea14"></label>
        <textarea name="Not_Sap_Pro" id="Not_Sap_Pro" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "30$"/>Local Eposta Hesabı</td>
        <td><label for="textfield18"></label>
        <input name="Yazilim_Local_eposta_hesabi" type="text" id="Yazilim_Local_eposta_hesabi" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea15"></label>
        <textarea name="Not_Local_eposta_hesabi" id="Not_Local_eposta_hesabi" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "200$"/>Office 2016</td>
        <td><label for="textfield19"></label>
        <input name="Yazilim_Office_2016" type="text" id="Yazilim_Office_2016" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea16"></label>
        <textarea name="Not_Office_2016" id="Not_Office_2016" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "120$"/>Power BI Pro</td>
        <td><label for="textfield20"></label>
        <input name="Yazilim_PowerBI_Pro" type="text" id="Yazilim_PowerBI_Pro" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea17"></label>
        <textarea name="Not_PowerBI_Pro" id="Not_PowerBI_Pro" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "150$"/>Microsoft Project</td>
        <td><label for="textfield21"></label>
        <input name="Yazilim_MS_Project" type="text" id="Yazilim_MS_Project" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea18"></label>
        <textarea name="Not_MS_Project" id="Not_MS_Project" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "90$"/>Acrobat Pro</td>
        <td><label for="textfield22"></label>
        <input name="Yazilim_Acrobat_Pro" type="text" id="Yazilim_Acrobat_Pro" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea19"></label>
        <textarea name="Not_Acrobat_Pro" id="Not_Acrobat_Pro" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "500$"/>Adobe Creative Cloud</td>
        <td><label for="textfield23"></label>
        <input name="Yazilim_Adobe_Creative_Cloud" type="text" id="Yazilim_Adobe_Creative_Cloud" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea20"></label>
        <textarea name="Not_Adobe_Creative_Cloud" id="Not_Adobe_Creative_Cloud" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "500$"/>Visual Studio Pro</td>
        <td><label for="textfield24"></label>
        <input name="Yazilim_Visual_Studio_Pro" type="text" id="Yazilim_Visual_Studio_Pro" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea21"></label>
        <textarea name="Not_Visual_Studio_Pro" id="Not_Visual_Studio_Pro" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "1500$"/>Visual Studio Enterprise</td>
        <td><label for="textfield25"></label>
        <input name="Yazilim_Visual_Studio_Ent" type="text" id="Yazilim_Visual_Studio_Ent" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea22"></label>
        <textarea name="Not_Visual_Studio_Ent" id="Not_Visual_Studio_Ent" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "40$"/>O365 F1</td>
        <td><label for="textfield26"></label>
        <input name="Yazilim_O365_F1" type="text" id="Yazilim_O365_F1" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea23"></label>
        <textarea name="Not_O365_F1" id="Not_O365_F1" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "60$"/>O365 F3</td>
        <td><label for="textfield27"></label>
        <input name="Yazilim_O365_F3" type="text" id="Yazilim_O365_F3" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea24"></label>
        <textarea name="Not_O365_F3" id="Not_O365_F3" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "240$"/>O365 E3</td>
        <td><label for="textfield28"></label>
        <input name="Yazilim_O365_E3" type="text" id="Yazilim_O365_E3" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea25"></label>
        <textarea name="Not_O365_E3" id="Not_O365_E3" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "120$"/>O365 İş Std</td>
        <td><label for="textfield29"></label>
        <input name="Yazilim_O365_is_Std" type="text" id="Yazilim_O365_is_Std" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea26"></label>
        <textarea name="Not_O365_is_Std" id="Not_O365_is_Std" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18">Yazilim Notlarınız</td>
        <td colspan="3"><label for="textarea27"></label>
        <textarea name="Yazilim_Yazilim_Notlari" id="Yazilim_Yazilim_Notlari"></textarea></td>
      </tr>
      <tr>
        <td height="18" colspan="4" bgcolor="#9850A2" style="color: #FFFFFF; font-size: large;">Sarf Malzemeler<br>Kaç edet talep ediyorsanız rakam ile belirtiniz ve açıklama yazınız.</td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Philips 24 Phılıps 241E1SCA/01 IPS Fhd 4ms 75HZ Fhd Freesync HDMI VGA 175$"/>Monitor</td>
        <td><label for="textfield30"></label>
        <input name="Sarf_Monitor" type="text" id="Sarf_Monitor" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea28"></label>
        <textarea name="Not_Monitor" id="Not_Monitor" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "A4Tech A4-Tech KM-720 USB Standart Türkçe Q Klavye Siyah 13$"/>Klavye ve Mouse</td>
        <td><label for="textfield31"></label>
        <input name="Sarf_Klavye_Mouse" type="text" id="Sarf_Klavye_Mouse" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea29"></label>
        <textarea name="Not_Klavye_Mouse" id="Not_Klavye_Mouse" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "D'vers 15.6 Inç Siyah Notebook ve Laptop Sırt Çantası  10$"/>Laptop Çantası</td>
        <td><label for="textfield32"></label>
        <input name="Sarf_Laptop_Cantasi" type="text" id="Sarf_Laptop_Cantasi" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea30"></label>
        <textarea name="Not_Laptop_Cantasi" id="Not_Laptop_Cantasi" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "1tb usb hdd 55$"/>Harici Harddisk</td>
        <td><label for="textfield33"></label>
        <input name="Sarf_Harici_HDD" type="text" id="Sarf_Harici_HDD" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea31"></label>
        <textarea name="Not_Harici_HDD" id="Not_Harici_HDD" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "64gb flash bellek 14$"/>Flash Bellek</td>
        <td><label for="textfield34"></label>
        <input name="Sarf_Flash_Bellek" type="text" id="Sarf_Flash_Bellek" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea32"></label>
        <textarea name="Not_Flash_Bellek" id="Not_Flash_Bellek" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Nivagatore Alüminyum Ayarlı Laptop Yükseltici / Tutucu 9$"/>Laptop Stand</td>
        <td><label for="textfield35"></label>
        <input name="Sarf_Laptop_Stand" type="text" id="Sarf_Laptop_Stand" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea33"></label>
        <textarea name="Not_Laptop_Stand" id="Not_Laptop_Stand" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "Kılıf 10$"/>Tel. Tablet Klıf</td>
        <td><label for="textfield36"></label>
        <input name="Sarf_Kilif" type="text" id="Sarf_Kilif" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea34"></label>
        <textarea name="Not_Kilif" id="Not_Kilif" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18"><img src="resim/hint-icon.jpg" alt="" width="20" height="20" title= "type-c adaptor 34$"/>Adaptor &amp; Kablo</td>
        <td><label for="textfield37"></label>
        <input name="Sarf_Adaptor_Kablo" type="text" id="Sarf_Adaptor_Kablo" size="3" maxlength="3"></td>
        <td colspan="2"><label for="textarea35"></label>
        <textarea name="Not_Adaptor_Kablo" id="Not_Adaptor_Kablo" placeholder="Ürün ile ilgili belirtmek istediğiniz notları bu alana yazınız"></textarea></td>
      </tr>
      <tr>
        <td height="18">Sarf Notlarınız</td>
        <td colspan="3"><label for="textarea36"></label>
        <textarea name="Sarf_Not" id="Sarf_Not"></textarea></td>
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
