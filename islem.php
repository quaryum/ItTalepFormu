<?php

require_once 'baglanti.php';


if (isset($_POST['Gonder'])) {
	
echo $_POST['Talep_talep_acan'];
	
$Kaydet=$conn->prepare("INSERT into bilgiler set
	Talep_turu=:Talep_turu,
	Talep_departmani=:Talep_departmani,
	Talep_talep_acan=:Talep_talep_acan,
	Talep_kullanacak_kisi=:Talep_kullanacak_kisi,
	Talep_calisan=:Talep_calisan,
	Talep_lokasyon=:Talep_lokasyon,
	Talep_mail=:Talep_mail,
	Talep_telefon=:Talep_telefon,
	Donanim_Laptop_Pc=:Donanim_Laptop_Pc,
	Donanim_Laptop_Workstation=:Donanim_Laptop_Workstation,
	Donanim_Desktop_Pc=:Donanim_Desktop_Pc,
	Donanim_Desktop_Workstation=:Donanim_Desktop_Workstation,
	Donanim_Macbook=:Donanim_Macbook,
	Donanim_Mac_Pro_Laptop=:Donanim_Mac_Pro_Laptop,
	Donanim_Mac_Workstation=:Donanim_Mac_Workstation,
	Donanim_Tablet=:Donanim_Tablet,
	Donanim_Mobil_Telefon=:Donanim_Mobil_Telefon,
	Donanim_Projection=:Donanim_Projection,
	Donanim_Yazici=:Donanim_Yazici,
	Donanim_Donanim_Notlari=:Donanim_Donanim_Notlari,
	Yazilim_Sap_Worker=:Yazilim_Sap_Worker,
	Yazilim_Sap_Pro	=:Yazilim_Sap_Pro,
	Yazilim_Local_eposta_hesabi=:Yazilim_Local_eposta_hesabi,
	Yazilim_Office_2016=:Yazilim_Office_2016,
	Yazilim_PowerBI_Pro=:Yazilim_PowerBI_Pro,
	Yazilim_MS_Project=:Yazilim_MS_Project,
	Yazilim_Acrobat_Pro=:Yazilim_Acrobat_Pro,
	Yazilim_Adobe_Creative_Cloud=:Yazilim_Adobe_Creative_Cloud,
	Yazilim_Visual_Studio_Pro=:Yazilim_Visual_Studio_Pro,
	Yazilim_Visual_Studio_Ent=:Yazilim_Visual_Studio_Ent,
	Yazilim_O365_F1=:Yazilim_O365_F1,
	Yazilim_O365_F3=:Yazilim_O365_F3,
	Yazilim_O365_E3=:Yazilim_O365_E3,
	Yazilim_O365_is_Std=:Yazilim_O365_is_Std,
	Yazilim_Yazilim_Notlari=:Yazilim_Yazilim_Notlari,
	Sarf_Monitor=:Sarf_Monitor,
	Sarf_Klavye_Mouse=:Sarf_Klavye_Mouse,
	Sarf_Harici_HDD=:Sarf_Harici_HDD,
	Sarf_Flash_Bellek=:Sarf_Flash_Bellek,
	Sarf_Laptop_Stand=:Sarf_Laptop_Stand,
	Sarf_Adaptor_Kablo=:Sarf_Adaptor_Kablo,
	Sarf_Kilif=:Sarf_Kilif,
	Sarf_Not=:Sarf_Not,
	Not_Laptop_Pc=:Not_Laptop_Pc,
	Not_Laptop_Workstation=:Not_Laptop_Workstation,
	Not_Desktop_Workstation=:Not_Desktop_Workstation,
	Not_Macbook=:Not_Macbook,
	Not_Mac_Pro_Laptop=:Not_Mac_Pro_Laptop,
	Not_Mac_Workstation=:Not_Mac_Workstation,
	Not_Tablet=:Not_Tablet,
	Not_Mobil_Telefon=:Not_Mobil_Telefon,
	Not_Projection=:Not_Projection,
	Not_Yazici=:Not_Yazici,
	Not_Sap_Worker=:Not_Sap_Worker,
	Not_Sap_Pro=:Not_Sap_Pro,
	Not_Local_eposta_hesabi=:Not_Local_eposta_hesabi,
	Not_Office_2016=:Not_Office_2016,
	Not_PowerBI_Pro=:Not_PowerBI_Pro,
	Not_MS_Project=:Not_MS_Project,
	Not_Acrobat_Pro=:Not_Acrobat_Pro,
	Not_Adobe_Creative_Cloud=:Not_Adobe_Creative_Cloud,
	Not_Visual_Studio_Pro=:Not_Visual_Studio_Pro,
	Not_Visual_Studio_Ent=:Not_Visual_Studio_Ent,
	Not_O365_F1=:Not_O365_F1,
	Not_O365_F3=:Not_O365_F3,
	Not_O365_E3=:Not_O365_E3,
	Not_O365_is_Std=:Not_O365_is_Std,
	Not_Monitor=:Not_Monitor,
	Not_Klavye_Mouse=:Not_Klavye_Mouse,
	Not_Laptop_Cantasi=:Not_Laptop_Cantasi,
	Not_Harici_HDD=:Not_Harici_HDD,
	Not_Flash_Bellek=:Not_Flash_Bellek,
	Not_Laptop_Stand=:Not_Laptop_Stand,
	Not_Kilif=:Not_Kilif,
	Not_Adaptor_Kablo=:Not_Adaptor_Kablo
	");

$insert=$Kaydet->execute(array(
	'Talep_turu' => $_POST['Talep_turu'],
	'Talep_departmani' => $_POST['Talep_departmani'],
	'Talep_talep_acan' => $_POST['Talep_talep_acan'],
	'Talep_kullanacak_kisi' => $_POST['Talep_kullanacak_kisi'],
	'Talep_calisan' => $_POST['Talep_calisan'],
	'Talep_lokasyon' => $_POST['Talep_lokasyon'],
	'Talep_mail' => $_POST['Talep_mail'],
	'Talep_telefon' => $_POST['Talep_telefon'],
	'Donanim_Laptop_Pc' => $_POST['Donanim_Laptop_Pc'],
	'Donanim_Laptop_Workstation' => $_POST['Donanim_Laptop_Workstation'],
	'Donanim_Desktop_Pc' => $_POST['Donanim_Desktop_Pc'],
	'Donanim_Desktop_Workstation' => $_POST['Donanim_Desktop_Workstation'],
	'Donanim_Macbook' => $_POST['Donanim_Macbook'],
	'Donanim_Mac_Pro_Laptop' => $_POST['Donanim_Mac_Pro_Laptop'],
	'Donanim_Mac_Workstation' => $_POST['Donanim_Mac_Workstation'],
	'Donanim_Tablet' => $_POST['Donanim_Tablet'],
	'Donanim_Mobil_Telefon' => $_POST['Donanim_Mobil_Telefon'],
	'Donanim_Projection' => $_POST['Donanim_Projection'],
	'Donanim_Yazici' => $_POST['Donanim_Yazici'],
	'Donanim_Donanim_Notlari' => $_POST['Donanim_Donanim_Notlari'],
	'Yazilim_Sap_Worker' => $_POST['Yazilim_Sap_Worker'],
	'Yazilim_Sap_Pro' => $_POST['Yazilim_Sap_Pro'],
	'Yazilim_Local_eposta_hesabi' => $_POST['Yazilim_Local_eposta_hesabi'],
	'Yazilim_Office_2016' => $_POST['Yazilim_Office_2016'],
	'Yazilim_PowerBI_Pro' => $_POST['Yazilim_PowerBI_Pro'],
	'Yazilim_MS_Project' => $_POST['Yazilim_MS_Project'],
	'Yazilim_Acrobat_Pro' => $_POST['Yazilim_Acrobat_Pro'],
	'Yazilim_Adobe_Creative_Cloud' => $_POST['Yazilim_Adobe_Creative_Cloud'],
	'Yazilim_Visual_Studio_Pro' => $_POST['Yazilim_Visual_Studio_Pro'],
	'Yazilim_Visual_Studio_Ent' => $_POST['Yazilim_Visual_Studio_Ent'],
	'Yazilim_O365_F1' => $_POST['Yazilim_O365_F1'],
	'Yazilim_O365_F3' => $_POST['Yazilim_O365_F3'],
	'Yazilim_O365_E3' => $_POST['Yazilim_O365_E3'],
	'Yazilim_O365_is_Std' => $_POST['Yazilim_O365_is_Std'],
	'Yazilim_Yazilim_Notlari' => $_POST['Yazilim_Yazilim_Notlari'],
	'Sarf_Monitor' => $_POST['Sarf_Monitor'],
	'Sarf_Klavye_Mouse' => $_POST['Sarf_Klavye_Mouse'],
	'Sarf_Harici_HDD' => $_POST['Sarf_Harici_HDD'],
	'Sarf_Flash_Bellek' => $_POST['Sarf_Flash_Bellek'],
	'Sarf_Laptop_Stand' => $_POST['Sarf_Laptop_Stand'],
	'Sarf_Kilif' => $_POST['Sarf_Kilif'],
	'Sarf_Adaptor_Kablo' => $_POST['Sarf_Adaptor_Kablo'],
	'Sarf_Not' => $_POST['Sarf_Not'],
	'Not_Laptop_Pc' => $_POST['Not_Laptop_Pc'],
	'Not_Laptop_Workstation' => $_POST['Not_Laptop_Workstation'],
	'Not_Desktop_Workstation' => $_POST['Not_Desktop_Workstation'],
	'Not_Macbook' => $_POST['Not_Macbook'],
	'Not_Mac_Pro_Laptop' => $_POST['Not_Mac_Pro_Laptop'],
	'Not_Mac_Workstation' => $_POST['Not_Mac_Workstation'],
	'Not_Tablet' => $_POST['Not_Tablet'],
	'Not_Mobil_Telefon' => $_POST['Not_Mobil_Telefon'],
	'Not_Projection' => $_POST['Not_Projection'],
	'Not_Yazici' => $_POST['Not_Yazici'],
	'Not_Sap_Worker' => $_POST['Not_Sap_Worker'],
	'Not_Sap_Pro' => $_POST['Not_Sap_Pro'],
	'Not_Local_eposta_hesabi' => $_POST['Not_Local_eposta_hesabi'],
	'Not_Office_2016' => $_POST['Not_Office_2016'],
	'Not_PowerBI_Pro' => $_POST['Not_PowerBI_Pro'],
	'Not_MS_Project' => $_POST['Not_MS_Project'],
	'Not_Acrobat_Pro' => $_POST['Not_Acrobat_Pro'],
	'Not_Adobe_Creative_Cloud' => $_POST['Not_Adobe_Creative_Cloud'],
	'Not_Visual_Studio_Pro' => $_POST['Not_Visual_Studio_Pro'],
	'Not_Visual_Studio_Ent' => $_POST['Not_Visual_Studio_Ent'],
	'Not_O365_F1' => $_POST['Not_O365_F1'],
	'Not_O365_F3' => $_POST['Not_O365_F3'],
	'Not_O365_E3' => $_POST['Not_O365_E3'],
	'Not_O365_is_Std' => $_POST['Not_O365_is_Std'],
	'Not_Monitor' => $_POST['Not_Monitor'],
	'Not_Klavye_Mouse' => $_POST['Not_Klavye_Mouse'],
	'Not_Laptop_Cantasi' => $_POST['Not_Laptop_Cantasi'],
	'Not_Harici_HDD' => $_POST['Not_Harici_HDD'],
	'Not_Flash_Bellek' => $_POST['Not_Flash_Bellek'],
	'Not_Laptop_Stand' => $_POST['Not_Laptop_Stand'],
	'Not_Kilif' => $_POST['Not_Kilif'],
	'Not_Adaptor_Kablo' => $_POST['Not_Adaptor_Kablo']
));
	
	if ($insert) {
		
		//echo "Kayıt Başarılı";
		header("location:form.php");
			
	} else {
		
		echo "Kayıt Başarısız"; 
	}
	
}

?>