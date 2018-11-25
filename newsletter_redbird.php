<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>New Web Project</title>
    </head>
    <body>
    
<div style="display: block; width: 100%"> 				    
<?php 

//Adresy url zdjęć
@$photo_glowne = $_POST ['photo_glowne'];
@$photo_01 = $_POST ['photo_01']; 
@$photo_02 = $_POST ['photo_02']; 
@$photo_03 = $_POST ['photo_03']; 
@$photo_04 = $_POST ['photo_04']; 
@$photo_05 = $_POST ['photo_05']; 
@$photo_06 = $_POST ['photo_06'];
@$photo_07 = $_POST ['photo_07'];
@$photo_08 = $_POST ['photo_08'];
@$photo_09 = $_POST ['photo_09'];
@$photo_10 = $_POST ['photo_10'];
@$photo_11 = $_POST ['photo_11'];
@$photo_12 = $_POST ['photo_12'];
@$photo_13 = $_POST ['photo_13'];
@$photo_14 = $_POST ['photo_14'];
@$photo_15 = $_POST ['photo_15'];
@$photo_16 = $_POST ['photo_16'];
@$photo_17 = $_POST ['photo_17'];
@$photo_18 = $_POST ['photo_18'];
@$photo_19 = $_POST ['photo_19'];



//Nazwa przedmiotu
@$przedmiot_01_nazwa = $_POST ['przedmiot_01_nazwa'];
@$przedmiot_02_nazwa = $_POST ['przedmiot_02_nazwa'];
@$przedmiot_03_nazwa = $_POST ['przedmiot_03_nazwa'];
@$przedmiot_04_nazwa = $_POST ['przedmiot_04_nazwa'];
@$przedmiot_05_nazwa = $_POST ['przedmiot_05_nazwa'];
@$przedmiot_06_nazwa = $_POST ['przedmiot_06_nazwa'];
@$przedmiot_07_nazwa = $_POST ['przedmiot_07_nazwa'];
@$przedmiot_08_nazwa = $_POST ['przedmiot_08_nazwa'];
@$przedmiot_09_nazwa = $_POST ['przedmiot_09_nazwa'];
@$przedmiot_10_nazwa = $_POST ['przedmiot_10_nazwa'];
@$przedmiot_11_nazwa = $_POST ['przedmiot_11_nazwa'];
@$przedmiot_12_nazwa = $_POST ['przedmiot_12_nazwa'];
@$przedmiot_13_nazwa = $_POST ['przedmiot_13_nazwa'];
@$przedmiot_14_nazwa = $_POST ['przedmiot_14_nazwa'];
@$przedmiot_15_nazwa = $_POST ['przedmiot_15_nazwa'];
@$przedmiot_16_nazwa = $_POST ['przedmiot_16_nazwa'];
@$przedmiot_17_nazwa = $_POST ['przedmiot_17_nazwa'];
@$przedmiot_18_nazwa = $_POST ['przedmiot_18_nazwa'];
@$przedmiot_19_nazwa = $_POST ['przedmiot_19_nazwa'];

//Adresy url do przedmiotów
@$photo_glowne_link = $_POST ['photo_glowne_link'];
@$przedmiot_01_link = $_POST ['przedmiot_01_link'];
@$przedmiot_02_link = $_POST ['przedmiot_02_link'];
@$przedmiot_03_link = $_POST ['przedmiot_03_link'];
@$przedmiot_04_link = $_POST ['przedmiot_04_link'];
@$przedmiot_05_link = $_POST ['przedmiot_05_link'];
@$przedmiot_06_link = $_POST ['przedmiot_06_link'];
@$przedmiot_07_link = $_POST ['przedmiot_07_link'];
@$przedmiot_08_link = $_POST ['przedmiot_08_link'];
@$przedmiot_09_link = $_POST ['przedmiot_09_link'];
@$przedmiot_10_link = $_POST ['przedmiot_10_link'];
@$przedmiot_11_link = $_POST ['przedmiot_11_link'];
@$przedmiot_12_link = $_POST ['przedmiot_12_link'];
@$przedmiot_13_link = $_POST ['przedmiot_13_link'];
@$przedmiot_14_link = $_POST ['przedmiot_14_link'];
@$przedmiot_15_link = $_POST ['przedmiot_15_link'];
@$przedmiot_16_link = $_POST ['przedmiot_16_link'];
@$przedmiot_17_link = $_POST ['przedmiot_17_link'];
@$przedmiot_18_link = $_POST ['przedmiot_18_link'];
@$przedmiot_19_link = $_POST ['przedmiot_19_link'];

//CENY
@$przedmiot_01_cena = $_POST ['przedmiot_01_cena'];
@$przedmiot_02_cena = $_POST ['przedmiot_02_cena'];
@$przedmiot_03_cena = $_POST ['przedmiot_03_cena'];
@$przedmiot_04_cena = $_POST ['przedmiot_04_cena'];
@$przedmiot_05_cena = $_POST ['przedmiot_05_cena'];
@$przedmiot_06_cena = $_POST ['przedmiot_06_cena'];
@$przedmiot_07_cena = $_POST ['przedmiot_07_cena'];
@$przedmiot_08_cena = $_POST ['przedmiot_08_cena'];
@$przedmiot_09_cena = $_POST ['przedmiot_09_cena'];
@$przedmiot_10_cena = $_POST ['przedmiot_10_cena'];
@$przedmiot_11_cena = $_POST ['przedmiot_11_cena'];
@$przedmiot_12_cena = $_POST ['przedmiot_12_cena'];
@$przedmiot_13_cena = $_POST ['przedmiot_13_cena'];
@$przedmiot_14_cena = $_POST ['przedmiot_14_cena'];
@$przedmiot_15_cena = $_POST ['przedmiot_15_cena'];
@$przedmiot_16_cena = $_POST ['przedmiot_16_cena'];
@$przedmiot_17_cena = $_POST ['przedmiot_17_cena'];
@$przedmiot_18_cena = $_POST ['przedmiot_18_cena'];
@$przedmiot_19_cena = $_POST ['przedmiot_19_cena'];




$szablon_testowy = '
		<table align="center" bgcolor="#F8F8F8" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block; background:#F8F8F8;">
            <tbody><tr>
                <td>
                <table width="650px" border="0" style="width:650px;">
                    <tbody><tr>
                        <td align="right" style="text-decoration:none; font-family: Calibri; font-size: 15px; font-style: italic; padding-right: 20px">Oferta ważna w dniach 13.05.2014 - 19.05.2014</td>
                    </tr>
                
            

            <tr>
                <td>
                <table align="center" width="650px" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr style="">
                        <td width="150px" style="border-bottom: 3px solid #ffffff;"><a align="center" href="http://www.zabierzkoniecznie.pl" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank"> <img height="50px" src="http://www.zabierzkoniecznie.pl/data/gfx/mask/pol//1203002473.gif" style="padding: 5px 0px 5px 30px;"></a></td>

                        <td width="450px" align="right" style="font-family: Calibri; font-weight: bold; font-size: 23px; font-style: italic; color: #ffffff; border-bottom: 3px solid #ffffff;"><a align="center" href="http://www.zabierzkoniecznie.pl" style="text-decoration:none; font-family: Calibri; font-weight: bold; font-size: 23px; font-style: italic; color: #AD1616" title="http://www.zabierzkoniecznie.pl" target="_blank"> www.zabierzkoniecznie.pl</a></td>
                        <td width="50px" style="border-bottom: 3px solid #ffffff;">
                        <br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" width="650px" style="width: 650px, border-top: 2px solid #DDDDDD; border-bottom: 2px solid #DDDDDD; overflow: hidden;"><a href="http://www.zabierzkoniecznie.pl/firm-pol-1142347123-recznik-szybkoschnacy.html"> <img width="650px" src="https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/reczniki_szybkoschnace.png"> </a></td>
                    </tr>
                    <tr>
                        <!-- ZabierzKoniecznie.pl - Rady Jacka Pałkiewicza -->
                        <td colspan="3" width="650px" style="width: 650px; overflow: hidden; margin-top: 0px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px; display:block;" width="650px">

                            <tbody><tr align="center" style="width:650px;" width="650px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/Jak-wybrac-dobry-plecak--cinfo-pol-5.html" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="650px" src="https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/przeczytaj_takze_01.jpg" style="width:650px;"></a></td>
                                
                            </tr>
                            <tr align="center" style="width:650px;" width="650px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/Jak-wybrac-dobry-plecak--cinfo-pol-5.html#jak_wybrac_dobry_plecak" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="650px" src="https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/przeczytaj_takze_02.jpg" style="width:650px;"></a></td>
                                
                            </tr>
                            <tr align="center" style="width:650px;" width="650px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/Jak-wybrac-dobry-plecak--cinfo-pol-5.html#komfort_czy_waga" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="650px" src="
                                https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/przeczytaj_takze_03.jpg" style="width:650px;"></a></td>
                                
                            </tr>
                            <tr align="center" style="width:650px;" width="650px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/Jak-wybrac-dobry-plecak--cinfo-pol-5.html#co_powinien_zawierac_plecak" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="650px" src="https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/przeczytaj_takze_04.jpg" style="width:650px;"></a></td>
                                
                            </tr>

                        </tbody></table></td>
                    </tr>

                    <tr height="20px">
                        <td colspan="3"></td>
                    </tr>
                </tbody></table></td>
            </tr>

            <!-- I rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 1 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/product-pol-26883-Torba-foto-Samsung-N300-Nikon-Pacsafe.html?text=PCA15140100" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Torba-foto-Samsung-N300-Nikon-Pacsafe-26883_4.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <!-- Produkt 2 -->
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-19561-Najmniejszy-grill-swiata-Grilliput-HIT.html?text=RBT-052490123" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">

                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Najmniejszy-grill-swiata-Grilliput-HIT-19561_16.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 3 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-10372-Ultralekki-noz-skladany-22gramy-.html?text=RBT-460222123" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="150px" src="http://www.zabierzkoniecznie.pl/pol_pm_Ultralekki-noz-skladany-22gramy--10372_10.jpg" style="width:190px; margin-left: 5px"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Torba foto Samsung N300 Nikon- Pacsafe</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">349,00   zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Najmniejszy grill świata - Grilliput HIT</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">HIT LATA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">139,00   zł</td>
                            </tr>
                            
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Ultralekki nóż składany 22 gramy</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">89,00   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>

            <!-- II rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/product-pol-9085-Naczynia-turystyczne-GSI-Pinnacle-Dualist.html?text=RBT-636801123" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="170px" src="http://www.zabierzkoniecznie.pl/pol_pm_Naczynia-turystyczne-GSI-Pinnacle-Dualist-9085_1.jpg" style="width:200px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-26365-Bardzo-eleganckie-etui-iPhone.html" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">
                                <!-- zdjęcie -->
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Bardzo-eleganckie-etui-iPhone-26365_2.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-21349-Siekacz-do-czosnku-Chefn-ZOOM-XL.html?text=CHEF-443251BLACK" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Siekacz-do-czosnku-Chefn-ZOOM-XL-21349_4.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Naczynia-turystyczne-GSI Pinnacle Dualist</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">279,00   zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Bardzo eleganckie etui iPhone<br><br>
                               
                              
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PRZECENA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">88,79   zł</td>
                            </tr>
                          
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Siekacz do czosnku Chefn ZOOM XL</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">99,99   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>

                        <!-- III rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/product-pol-9085-Naczynia-turystyczne-GSI-Pinnacle-Dualist.html?text=RBT-636801123" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="170px" src="http://www.zabierzkoniecznie.pl/pol_pm_Naczynia-turystyczne-GSI-Pinnacle-Dualist-9085_1.jpg" style="width:200px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-26365-Bardzo-eleganckie-etui-iPhone.html" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">
                                <!-- zdjęcie -->
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Bardzo-eleganckie-etui-iPhone-26365_2.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-21349-Siekacz-do-czosnku-Chefn-ZOOM-XL.html?text=CHEF-443251BLACK" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Siekacz-do-czosnku-Chefn-ZOOM-XL-21349_4.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Naczynia-turystyczne-GSI Pinnacle Dualist</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">279,00   zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Bardzo eleganckie etui iPhone<br><br>
                               
                              
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PRZECENA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">88,79   zł</td>
                            </tr>
                          
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Siekacz do czosnku Chefn ZOOM XL</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">99,99   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>

                        <!-- IV rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/product-pol-9085-Naczynia-turystyczne-GSI-Pinnacle-Dualist.html?text=RBT-636801123" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="170px" src="http://www.zabierzkoniecznie.pl/pol_pm_Naczynia-turystyczne-GSI-Pinnacle-Dualist-9085_1.jpg" style="width:200px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-26365-Bardzo-eleganckie-etui-iPhone.html" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">
                                <!-- zdjęcie -->
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Bardzo-eleganckie-etui-iPhone-26365_2.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-21349-Siekacz-do-czosnku-Chefn-ZOOM-XL.html?text=CHEF-443251BLACK" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Siekacz-do-czosnku-Chefn-ZOOM-XL-21349_4.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Naczynia-turystyczne-GSI Pinnacle Dualist</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">279,00   zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Bardzo eleganckie etui iPhone<br><br>
                               
                              
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PRZECENA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">88,79   zł</td>
                            </tr>
                          
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Siekacz do czosnku Chefn ZOOM XL</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">99,99   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>



            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>

                        <!-- V rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/product-pol-9085-Naczynia-turystyczne-GSI-Pinnacle-Dualist.html?text=RBT-636801123" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="170px" src="http://www.zabierzkoniecznie.pl/pol_pm_Naczynia-turystyczne-GSI-Pinnacle-Dualist-9085_1.jpg" style="width:200px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-26365-Bardzo-eleganckie-etui-iPhone.html" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">
                                <!-- zdjęcie -->
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Bardzo-eleganckie-etui-iPhone-26365_2.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-21349-Siekacz-do-czosnku-Chefn-ZOOM-XL.html?text=CHEF-443251BLACK" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Siekacz-do-czosnku-Chefn-ZOOM-XL-21349_4.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Naczynia-turystyczne-GSI Pinnacle Dualist</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">279,00   zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Bardzo eleganckie etui iPhone<br><br>
                               
                              
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PRZECENA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">88,79   zł</td>
                            </tr>
                          
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Siekacz do czosnku Chefn ZOOM XL</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">99,99   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>

            <!-- VI rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/product-pol-9085-Naczynia-turystyczne-GSI-Pinnacle-Dualist.html?text=RBT-636801123" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="170px" src="http://www.zabierzkoniecznie.pl/pol_pm_Naczynia-turystyczne-GSI-Pinnacle-Dualist-9085_1.jpg" style="width:200px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-26365-Bardzo-eleganckie-etui-iPhone.html" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">
                                <!-- zdjęcie -->
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Bardzo-eleganckie-etui-iPhone-26365_2.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="http://www.zabierzkoniecznie.pl/product-pol-21349-Siekacz-do-czosnku-Chefn-ZOOM-XL.html?text=CHEF-443251BLACK" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="204px" src="http://www.zabierzkoniecznie.pl/pol_pm_Siekacz-do-czosnku-Chefn-ZOOM-XL-21349_4.jpg" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Naczynia-turystyczne-GSI Pinnacle Dualist</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">279,00   zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Bardzo eleganckie etui iPhone<br><br>
                               
                              
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PRZECENA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">88,79   zł</td>
                            </tr>
                          
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">Siekacz do czosnku Chefn ZOOM XL</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">99,99   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>
 
            <tr>
                <td>
                <table align="center" width="650px" bgcolor="#F8F8F8" border="0" cellpadding="0" cellspacing="0" style="width:650px; background:#F8F8F8;">
                    <tbody><tr>
                        <td style="text-align:center;font-size:10px;font-family:Verdana,Geneva,sans-serif; padding: 20px 5px 20px 5px;"> Ten mail został wysłany ponieważ Twój adres został zarejestrowany na liście subskrybentów <a href="http://zabierzkoniecznie.pl" target="_blank">zabierzkoniecznie.pl</a>.
                        Ten list został wygenerowany automatycznie, prosimy na niego nie odpowiadać.
                        Wszelkie pytania prosimy kierować na adres <a href="mailto:sklep@zabierzkoniecznie.pl" target="_blank">sklep@zabierzkoniecznie.pl</a></td>
                    </tr>
                </tbody></table></td>
            </tr>
        </tbody></table>

    

</td></tr></tbody></table>
             

		';



$szablon_uzupelniony = '
		<table align="center" bgcolor="#F8F8F8" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block; background:#F8F8F8;">
            <tbody><tr>
                <td>
                <table width="650px" border="0" style="width:650px;">
                    <tbody><tr>
                        <td align="right" style="text-decoration:none; font-family: Calibri; font-size: 15px; font-style: italic; padding-right: 20px">Oferta ważna w dniach 13.05.2014 - 19.05.2014</td>
                    </tr>
                
            

            <tr>
                <td>
                <table align="center" width="650px" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr style="">
                        <td width="150px" style="border-bottom: 3px solid #ffffff;"><a align="center" href="http://www.zabierzkoniecznie.pl" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank"> <img height="50px" src="http://www.zabierzkoniecznie.pl/data/gfx/mask/pol//1203002473.gif" style="padding: 5px 0px 5px 30px;"></a></td>

                        <td width="450px" align="right" style="font-family: Calibri; font-weight: bold; font-size: 23px; font-style: italic; color: #ffffff; border-bottom: 3px solid #ffffff;"><a align="center" href="http://www.zabierzkoniecznie.pl" style="text-decoration:none; font-family: Calibri; font-weight: bold; font-size: 23px; font-style: italic; color: #AD1616" title="http://www.zabierzkoniecznie.pl" target="_blank"> www.zabierzkoniecznie.pl</a></td>
                        <td width="50px" style="border-bottom: 3px solid #ffffff;">
                        <br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" width="650px" style="width: 650px, border-top: 2px solid #DDDDDD; border-bottom: 2px solid #DDDDDD; overflow: hidden;"><a href="'. $photo_glowne_link .'"> <img width="650px" src="'. $photo_glowne .'"> </a></td>
                    </tr>
                    <tr>
                        <!-- ZabierzKoniecznie.pl - Rady Jacka Pałkiewicza -->
                        <td colspan="3" width="650px" style="width: 650px; overflow: hidden; margin-top: 0px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px; display:block;" width="650px">

                            <tbody><tr align="center" style="width:650px;" width="650px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/Jak-wybrac-dobry-plecak--cinfo-pol-5.html" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="650px" src="https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/przeczytaj_takze_01.jpg" style="width:650px;"></a></td>
                                
                            </tr>
                            <tr align="center" style="width:650px;" width="650px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/Jak-wybrac-dobry-plecak--cinfo-pol-5.html#jak_wybrac_dobry_plecak" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="650px" src="https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/przeczytaj_takze_02.jpg" style="width:650px;"></a></td>
                                
                            </tr>
                            <tr align="center" style="width:650px;" width="650px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/Jak-wybrac-dobry-plecak--cinfo-pol-5.html#komfort_czy_waga" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="650px" src="
                                https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/przeczytaj_takze_03.jpg" style="width:650px;"></a></td>
                                
                            </tr>
                            <tr align="center" style="width:650px;" width="650px">
                                <td><a align="center" href="http://www.zabierzkoniecznie.pl/Jak-wybrac-dobry-plecak--cinfo-pol-5.html#co_powinien_zawierac_plecak" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="650px" src="https://redi.iai-shop.com/data/include/cms/newsletter/2014-05-13/przeczytaj_takze_04.jpg" style="width:650px;"></a></td>
                                
                            </tr>

                        </tbody></table></td>
                    </tr>

                    <tr height="20px">
                        <td colspan="3"></td>
                    </tr>
                </tbody></table></td>
            </tr>

            <!-- I rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 1 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="'. $przedmiot_01_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="204px" src="'. $photo_01 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <!-- Produkt 2 -->
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_02_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">

                                <img alt="" name="" width="204px" src="'. $photo_02 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 3 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_03_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="150px" src="'. $photo_03 .'" style="width:190px; margin-left: 5px"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_01_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_01_cena .'  zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_02_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">HIT LATA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_02_cena .'  zł</td>
                            </tr>
                            
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_03_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_03_cena .'  zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>

            <!-- II rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 1 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="'. $przedmiot_04_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="204px" src="'. $photo_04 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <!-- Produkt 2 -->
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_05_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">

                                <img alt="" name="" width="204px" src="'. $photo_05 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 3 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_06_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="150px" src="'. $photo_06 .'" style="width:190px; margin-left: 5px"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_04_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_04_cena .'  zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_05_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">HIT LATA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_05_cena .' zł</td>
                            </tr>
                            
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_06_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_06_cena .' zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>


            <!-- III rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 1 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="'. $przedmiot_07_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="204px" src="'. $photo_07 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <!-- Produkt 2 -->
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_08_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">

                                <img alt="" name="" width="204px" src="'. $photo_08 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 3 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_09_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="150px" src="'. $photo_09 .'" style="width:190px; margin-left: 5px"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_07_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_07_cena .' zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_08_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">HIT LATA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_08_cena .' zł</td>
                            </tr>
                            
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_09_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_09_cena .'   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>


            <!-- IV rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 1 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="'. $przedmiot_10_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="204px" src="'. $photo_10 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <!-- Produkt 2 -->
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_11_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">

                                <img alt="" name="" width="204px" src="'. $photo_11 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 3 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_12_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="150px" src="'. $photo_12 .'" style="width:190px; margin-left: 5px"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_10_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_10_cena .' zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_11_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">HIT LATA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_11_cena .' zł</td>
                            </tr>
                            
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_12_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_12_cena .'   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>
                                		


            <!-- V rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 1 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="'. $przedmiot_13_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="204px" src="'. $photo_13 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <!-- Produkt 2 -->
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_14_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">

                                <img alt="" name="" width="204px" src="'. $photo_14 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 3 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_15_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="150px" src="'. $photo_15 .'" style="width:190px; margin-left: 5px"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_13_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_13_cena .' zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_14_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">HIT LATA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_14_cena .' zł</td>
                            </tr>
                            
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_15_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_15_cena .'   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>
                                		
                                		
                   		


            <!-- VI rząd -->
            <tr>
                <td>
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px;display:block">
                    <tbody><tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 1 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td><a align="center" href="'. $przedmiot_16_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img align="center" alt="" name="" width="204px" src="'. $photo_16 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <!-- Produkt 2 -->
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_17_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block; overflow: hidden;" title="Zobacz" target="_blank">

                                <img alt="" name="" width="204px" src="'. $photo_17 .'" style="width:204px;"></a></td>
                                
                            </tr>
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border:1px solid #DADADA; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <!-- Produkt 3 -->
                            <tbody><tr align="center" style="width:204px;" width="204px">
                                <td align="center"><a href="'. $przedmiot_18_link .'" style="border:none;color:#74ae3b;text-decoration:none;font-size:12px;display:block" title="Zobacz" target="_blank">
                                <img alt="" name="" width="150px" src="'. $photo_18 .'" style="width:190px; margin-left: 5px"></a></td>
                                
                            </tr>
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                    <!-- Ceny i nazwa przedmiotu -->
                    <tr>
                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">

                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_16_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_16_cena .' zł</td>
                            </tr>
                            

                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>

                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_17_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">HIT LATA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px; font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_17_cena .' zł</td>
                            </tr>
                            
                        </tbody></table></td>

                        <td style="width:9px" width="9"></td>
                        <td align="center" valign="middle" border="1px" bgcolor="#ffffff" style="border-bottom:1px solid #DADADA; border-right:1px solid #DADADA; border-left:1px solid #DADADA; border-top:0px; width:204px;color:#413535;font-family:Arial,Helvetica,sans-serif" width="204px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:204px; display:block;" width="204px">
                            <tbody><tr align="center" border="0" style="width:204px;" width="204px">
                                <td colspan="2" border="1" style="border-top: 1px solid #DADADA; padding:5px 2px 5px 2px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 13px;">'. $przedmiot_18_nazwa .'</td>
                            </tr>
                            <tr>
                                <td bgcolor="#C42525" width="80px" style="background: #C42525; width:80px; border-top: 1px solid #DADADA; padding:5px 5px 5px 5px; color: #ffffff; font-weight: bold; font-size: 14px;">PROMOCJA</td>
                                <td align="center" style="border-top: 1px solid #DADADA; padding:5px;  font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-style: italic;">'. $przedmiot_18_cena .'   zł</td>
                            </tr>
                            
                        </tbody></table></td>
                        <td style="width:13px" width="13"></td>
                    </tr>

                </tbody></table></td>
            </tr>

            <!-- --------------------- ---->
            <!-- Przerwa pomiędzy żędami -->
            <tr height="40px" style="height: 20px;display:block">
                <td height="40px" style="height: 20px">
                <br>
                </td>
            </tr>
                                		
            
            <tr>
                <td>
                <table align="center" width="650px" bgcolor="#F8F8F8" border="0" cellpadding="0" cellspacing="0" style="width:650px; background:#F8F8F8;">
                    <tbody><tr>
                        <td style="text-align:center;font-size:10px;font-family:Verdana,Geneva,sans-serif; padding: 20px 5px 20px 5px;"> Ten mail został wysłany ponieważ Twój adres został zarejestrowany na liście subskrybentów <a href="http://zabierzkoniecznie.pl" target="_blank">zabierzkoniecznie.pl</a>.
                        Ten list został wygenerowany automatycznie, prosimy na niego nie odpowiadać.
                        Wszelkie pytania prosimy kierować na adres <a href="mailto:sklep@zabierzkoniecznie.pl" target="_blank">sklep@zabierzkoniecznie.pl</a></td>
                    </tr>
                </tbody></table></td>
            </tr>
        </tbody></table>

    

</td></tr></tbody></table>
             	  		
      	';






if (!$photo_glowne ) {
	echo '<div style="width: 800px; float: left">'. $szablon_testowy .'</div>';
} else {
	echo '<div style="width: 800px; float: left">'. $szablon_uzupelniony .'</div>';
}


?>
<div style="width: 300px; float: left; margin-bottom: 30px;">
    <form method="post" action="newsletter_redbird.php">
			<h4>Zdjęcie główne:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_glowne" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="photo_glowne_link" placeholder="podlinkowanie"><br/>
			
			<h4>Przedmiot 01:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_01" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_01_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_01_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_01_cena" placeholder="Cena"><br/>
			
			<h4>Przedmiot 02:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_02" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_02_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_02_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_02_cena" placeholder="Cena"><br/>
			
			<h4>Przedmiot 03:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_03" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_03_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_03_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_03_cena" placeholder="Cena"><br/>
			
			<h4>Przedmiot 04:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_04" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_04_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_04_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_04_cena" placeholder="Cena"><br/>
			
			<h4>Przedmiot 05:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_05" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_05_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_05_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_05_cena" placeholder="Cena"><br/>
			
			<h4>Przedmiot 06:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_06" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_06_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_06_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_06_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 07:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_07" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_07_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_07_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_07_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 08:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_08" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_08_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_08_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_08_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 09:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_09" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_09_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_09_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_09_cena" placeholder="Cena"><br/>
			
			<h4>Przedmiot 10:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_10" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_10_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_10_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_10_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 11:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_11" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_11_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_11_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_11_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 12:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_12" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_12_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_12_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_06_cena" placeholder="Cena"><br/>
			
			<h4>Przedmiot 13:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_13" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_13_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_13_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_13_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 14:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_14" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_14_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_14_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_14_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 15:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_15" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_15_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_15_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_15_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 16:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_16" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_16_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_16_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_16_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 17:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_17" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_17_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_17_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_17_cena" placeholder="Cena"><br/>
			
			
			<h4>Przedmiot 18:</h4>
			<label>Adres url do zdjęcia: </label><input type="text" name="photo_18" placeholder="url do zdjęcia głównego"><br/>
			<label>Podlinkowanie: </label><input type="text" name="przedmiot_18_link" placeholder="podlinkowanie"><br/>
			<label>Nazwa przedmiotu: </label><input type="text" name="przedmiot_18_nazwa" placeholder="Nazwa przedmiotu"><br/>
			<label>Cena: </label><input type="text" name="przedmiot_18_cena" placeholder="Cena"><br/>
			
			
			
			
		<br/><br/>			
	<button type="submit" style="padding: 20px; width: 140px;">Wyślij</button>
	<br/><br/>
	</form>
</div>
<br style="clear: both;" />
</div>
<div style="position: relative; display:block; width: 100%; margin-top: 30px; margin-bottom: 50px;">
<textarea rows="30" cols="150" style="margin: 0px auto 0px auto">
<?php
echo $szablon_uzupelniony;
?>
</textarea>
</div>

</body>
</html>
