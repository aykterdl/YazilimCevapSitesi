<html>
<head>
<link href="css/StyleSheet.css" rel="stylesheet">
<link href="css/RteStiller.css" rel="stylesheet">
<link href="css/eoTabs.css" rel="stylesheet">
<link href="css/YazilimStyleSheet.css" rel="stylesheet">
<style>        
.CSM_Main {
z-index:100;
position:absolute;
min-width:200px;
max-width:320px;
padding:10px;
font-family:Arial, sans-serif; 
font-size:12px;
padding-top:5px;
left:600px;
border-radius:4px;
box-shadow:0px 0px 6px gray;
transition: visibility 500ms, opacity 500ms;
}        
.CSM_Error {
background-color: #f6dbd4;
border: solid 2px #eea275;
}        
.CSM_Info {
background-color: #d6f6cf;
border: solid 2px #85ae57;
}        
.CSM_Header {
text-align: right;color: #222;
}        
.CSM_Close {
display: inline-block;
padding-left: 5px;
padding-right: 5px;
cursor: pointer;
text-shadow: 1px 1px 1px gray;
position: relative;
left: 7px;
top: -3px;
border-radius: 3px; 
}        
.CSM_Close:hover {
box-shadow: 0px 0px 4px gray;
background: white;}        
.CSM_Close:active {
box-shadow: none;
}        
.CSM_Message {
text-shadow: 1px 1px 2px white;
color: #333;
}        
.CSM_Hidden {
visibility:hidden; 
opacity:0
}        
.CSM_Visible {
visibility:visible; 
opacity:1}
</style>
<link rel="stylesheet" type="text/css" href="css/eoDialog.css">
</head>

<body>

    <script>

    </script>
    <div style="min-height:100%;position:relative;">
    <div class="stlHeader">
        <div class="sol">
            <div>
                <div style="float: left">
                    <a href="login.php"><img src="">Logo</a>
                </div>
                <div style="float: left;margin-left:3px">
                    Yazılım.<br>
                    <span class="stlSiteName">CevapSitesi<span style="font-size: smaller; color: #dadada">.com</span>&nbsp;<sup><small>Beta!</small></sup></span>
                    <br>
                    <span style="color: silver;font-size:12px">Çözüm Noktası</span>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="orta">
            
			<div id="dvPaylas" style="color: #cccccc">
    <span id="spnMetinBasi">Bu siteyi</span>
    <a href="http://www.facebook.com">Facebook</a>,
    <a href="http://twitter.com">Twitter</a>,
    <a href="https://plus.google.com">Google+</a> veya
    <a href="mailto:aykuterdal">e-posta</a>
    ile paylaşın.
</div>


<div style="text-align:center">

<div class="sUstAramaKutu"><input type="text" id="ittUstArama" placeholder="Ne aramıştınız?" class="sUstArama" onkeydown="ara(event)"><a href="javascript:;" onclick="ara(null)" class="sAramaTusu"><img src="/Resimler/Ara.png" style="position:relative;top:6px"></a></div>
</div>

<style>
    .sSiteler {
        border: 0px;
        color: white;
        background-color: transparent;
        width: 45px;
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        cursor:pointer;
    }
    .sSiteler:hover {
        text-decoration:underline;
    }

        .sSiteler option {
            color: black;
            padding: 3px;
            background-color: white;
        }
</style>

<select class="sSiteler" onchange="sitelerMenusuSecim(this)">
    <option selected="selected" value="#">Siteler</option>
    <option value="http://CevapSitesi.com">CevapSitesi.com Ana Sayfa</option>
    <option value="http://Yazilim.CevapSitesi.com">Yazılım.CevapSitesi.com</option>
    <option value="http://Egitim.CevapSitesi.com" disabled="">Eğitim.CevapSitesi.com (Yakında)</option>
</select>

 |
            <a href="/Sorular/Yeni-Sorular"><b>Sorular</b></a> |
            <a href="/Makaleler/Tum-Makaleler"><b>Makaleler</b></a> |
            <a href="/Uyeler">Üyeler</a> |
            <a href="/Etiketler">Etiketler&nbsp;</a> |
            <a href="/SiteSayfalar/Iletisim">İletişim</a>
        </div>
        <div class="sag">
            <div id="eouk1_dvGirmemisUye">
    <div class="stlUye">
        Soru sormak ya da cevap vermek için;<br>
        <a id="aUyelikGiris" href="login.php">giriş yapın</a> veya <a id="aUyelikKayit" href="login.php">üye olun</a>.<br>
        <br>
        Sosyal medya hesaplarınızla da giriş yapabilirsiniz.
    </div>
</div>

</div>
    </div>

    <form method="post" action="/Sorular/Yeni-Sorular" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTg4OTkzMzgzMw9kFgICDA8WAh4GYWN0aW9uBRUvU29ydWxhci9ZZW5pLVNvcnVsYXJkZB60OoN8kzFYvQw4j2BANhpJmXiq">
</div>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0564CA07">
</div>
        <div class="stlMain">
            <div class="orta">
                <div id="dvIcerik">
                <div id="ctl15_dvIcerik">

<div id="dvMobilYeniSoru">
    <a href="/Sorular/Yeni-Soru" class="sYeniSoruTusu">Soru Sor</a>
</div>

<div style="margin-bottom: 5px;">
    <div id="ctl15_ctl00_eostb1_dvEtiketBasligi" style="font-size: 16px; float: left"><h1 class="sEtiketSayfaBasligi1">Yeni Yazılım Soruları</h1></div>
    <div style="margin-right: 5px; float: right;padding-bottom:20px">
        
    </div>
    <div id="dvSoruTablari" class="stlSoruTablari">
        <ul class="dvAnaTablar" style="font-size:13px">
<li class="stlAktifTab" id="liYeni-Sorular"><a href="/Sorular/Yeni-Sorular">Yeni</a></li>
<li class="stlPasifTab" id="liCevapsiz-Sorular"><a href="/Sorular/Cevapsiz-Sorular">Cevapsız</a></li>
<li class="stlPasifTab" id="liAktif-Sorular"><a href="/Sorular/Aktif-Sorular">Aktif</a></li>
<li class="stlPasifTab" id="liTum-Sorular"><a href="/Sorular/Tum-Sorular">Tümü</a></li>
<li style="clear:both"></li>
</ul>

    </div>
</div>

<div style="text-align:right">
    
</div>
<div class="sGonderiler">
 
</div>
<div style="text-align:right">
    <br>
    
    <br><br>
</div>
</div>

</div>
            </div>
            <div class="sag">
                <div id="dvYeniSoru" style="padding:10px;">
                    <a href="/Sorular/Yeni-Soru" class="sYeniSoruTusu">Soru Sor</a>
                </div>
                
                <br>
                <h4>Sayfalar</h4>
                <div id="dvSagBaglantilar">
                <a href="/SiteSayfalar/Gizlilik-Bildirimi">Gizlilik Bildirimi</a><br>
                <a href="/SiteSayfalar/Kullanim-Sartlari">Kullanım Şartları</a><br>
                <a href="/SiteSayfalar/Cerezler">Çerezler</a><br>
                <a href="/SiteSayfalar/Puanlama">Puanlama Sistemi</a><br>
                <a href="/SiteSayfalar/Unvanlar-Rozetler">Ünvanlar ve Rozetler</a><br>
                <a href="/SiteSayfalar/Nasil-Calisir">Nasıl Çalışır?</a><br>
                <a href="/SiteSayfalar/Lisanslar">Lisanslar</a>

                </div>
                
<div id="dvSayaclar">
    <h4>Sayaçlar</h4>
    <b>126</b> Soru<br><b>141</b> Cevap<br><b>68</b> Makale<br><b>72</b> Yorum
</div>
                <h4>Son Verilen Ünvan ve Rozetler</h4>
                <a href="/Uyeler/73/aspnetsorucevap"><b>aspnetsorucevap</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=201">Yazar</a></div><br><a href="/Uyeler/73/aspnetsorucevap"><b>aspnetsorucevap</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=101">Öğrenci</a></div><br><a href="/Uyeler/68/ufovase"><b>ufovase</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=101">Öğrenci</a></div><br><a href="/Uyeler/67/asinam"><b>asinam</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=201">Yazar</a></div><br><a href="/Uyeler/67/asinam"><b>asinam</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=101">Öğrenci</a></div><br><a href="/Uyeler/66/arifarif"><b>arifarif</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=201">Yazar</a></div><br><a href="/Uyeler/63/sertuncselen"><b>sertuncselen</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=101">Öğrenci</a></div><br><a href="/Uyeler/62/kavakli"><b>kavakli</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=101">Öğrenci</a></div><br><a href="/Uyeler/60/webing"><b>webing</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=101">Öğrenci</a></div><br><a href="/Uyeler/56/serdaryilmaz"><b>serdaryilmaz</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=101">Öğrenci</a></div><br><a href="/Uyeler/55/tahsin"><b>tahsin</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=201">Yazar</a></div><br><a href="/Uyeler/54/omertekin"><b>omertekin</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=201">Yazar</a></div><br><a href="/Uyeler/49/hoplaytali"><b>hoplaytali</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=101">Öğrenci</a></div><br><a href="/Uyeler/44/benimo"><b>benimo</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=201">Yazar</a></div><br><a href="/Uyeler/44/benimo"><b>benimo</b></a><br><div class="sUnvan"><a href="/SiteSayfalar/Unvanlar-Rozetler?k=202">Eğitmen</a></div><br>
            </div>
            <div style="clear:both"></div>
        </div>
    </form>
        
<div id="dvAlt">
    <div class="ic">
        <div style="float:left;width:200px">
            <h3>Siteler</h3>
            <ul>
                <li><a href="http://yazilim.cevapsitesi.com">Yazılım</a></li>
                <li><a href="http://egitim.cevapsitesi.com">Eğitim</a></li>
            </ul>
        </div>
        <div style="float:left;width:200px">
            <h3>Bölümler</h3>
            <ul>
                <li><a href="/Sorular/Yeni-Soru">Soru Sor</a></li>
                <li><a href="/Makaleler/Yeni-Makale">Makale Yaz</a></li>
                <li><a href="/Sorular/Yeni-Sorular">Sorular</a></li>
                <li><a href="/Makaleler/Tum-Makaleler">Makaleler</a></li>
                <li><a href="/Uyeler">Üyeler</a></li>
                <li><a href="/Etiketler">Etiketler</a></li>
            </ul>
        </div>
        <div style="float:left;width:200px">
            <h3>Sayfalar</h3>
            <ul>
                <li><a href="/SiteSayfalar/Nasil-Calisir">Nasıl Çalışır?</a></li>
                <li><a href="/SiteSayfalar/Gizlilik-Bildirimi">Gizlilik Bildirimi</a></li>
                <li><a href="/SiteSayfalar/Kullanim-Sartlari">Kullanım Şartları</a></li>
                <li><a href="/SiteSayfalar/Cerezler">Çerezler</a></li>
                <li><a href="/SiteSayfalar/Puanlama">Puanlama Sistemi</a></li>
                <li><a href="/SiteSayfalar/Unvanlar-Rozetler">Ünvanlar ve Rozetler</a></li>
            </ul>
        </div>
        <div style="float:left;width:200px">
            <h3>İletişim</h3>
            <ul>
                <li><a href="/SiteSayfalar/Iletisim">İletişim Formu</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>


    </div>
	<div id="dvKapak"></div></body></html>
