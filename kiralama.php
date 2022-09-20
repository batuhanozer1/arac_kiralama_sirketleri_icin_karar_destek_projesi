<html lang="tr">
<head>
    <meta charset="UTF-8">

    
   
    <title>Anasayfa</title>
    <link rel="stylesheet" href="kds.css">
</head>
<body>
   
        <div id="marka">
            <h1>Car-app</h1>
        </div>    
    <nav id="menu">
        <ul>

            
            <li><a href="arac_bilgi.php"> Araçlar</a></li>
            <li><a href="kiralama.php"> Kiralama İşlemleri</a></li>
            <li><a href="musteri.php"> Müşteriler </a></li>
            <li><a href="sube_bilgi.php"> Şubeler </a></li>
            <li><a href="analiz.php"> Analiz Sayfası </a></li>
            <li><a href="ekleme.php"> Veri Girişi </a></li>

            
            

        </ul>
        
    </nav>

    <article id="icerik">
       
       
           


            <form class="bul" id="kiralma" action="#">
                <fieldset class="dene">
                    <legend >Kiralama Bilgileri</legend>
                    <table id="randevu">
                        <tr>
                          <th> <label > Plaka</label></th>
                          <th><label > Şase Numarası</label> </th>
                          <th><label > Marka</label></th>
                          <th><label > Model</label></th>
                          <th><label > Model Yılı</label></th>
                          <th><label > Müşteri Tc</label></th>
                          <th><label > Müşteri Adı</label></th>
                          <th><label > Müşteri Soyadı</label></th>
                          <th><label > Kiralanan Şube</label></th>
                          <th><label > Ücret </label></th>
                          <th><label > Aracı Alış Tarihi </label></th>
                          <th><label > Aracı Bırakış Tarihi </label></th>
                          


                        </tr>
                        <style>

                        </style>
                        <?php 

                            $sorgu= "SELECT arac.plaka, arac.sase_id, marka.marka_adi,model.model_adi,arac.model_yil, surucu.surucu_id,surucu.ad,surucu.soyad,kiralayan_sube.sube_adi,gunluk_ucret.ucret_miktari,kiralama.kiralama_tarihi,kiralama.birakis_tarih
                            FROM arac, marka,model,surucu,kiralama,kiralayan_sube,gunluk_ucret
                            WHERE kiralama.plaka_id=arac.plaka 
                            AND kiralama.ucret_id=gunluk_ucret.ucret_id
                            AND kiralama.surucu_id=surucu.surucu_id
                            AND kiralama.sube_id=kiralayan_sube.sube_id";
                            $baglanti=mysqli_connect("localhost","root","","arac_kiralaaa"); mysqli_set_charset($baglanti, "utf8"); 
                            
                           
                            $sonuc= $baglanti->query($sorgu);
                           
                            
                            while($satir= $sonuc->fetch_assoc())
                            {
                                echo"<tr>";

                                echo"<td>".$satir{"plaka"}."</td>";
                                echo"<td>".$satir{"sase_id"}."</td>";
                                echo"<td>".$satir{"marka_adi"}."</td>";
                                echo"<td>".$satir{"model_adi"}."</td>";
                                echo"<td>".$satir{"model_yil"}."</td>";
                                echo"<td>".$satir{"surucu_id"}."</td>";
                                echo"<td>".$satir{"ad"}."</td>";
                                echo"<td>".$satir{"soyad"}."</td>";
                                echo"<td>".$satir{"sube_adi"}."</td>";
                                echo"<td>".$satir{"ucret_miktari"}."</td>";
                                echo"<td>".$satir{"kiralama_tarihi"}."</td>";
                                echo"<td>".$satir{"birakis_tarih"}."</td>";


                                echo"</tr>";
                            }

                        ?>       
                        <tr class="satır">
                         
                        </tr>
                       

                       
                    </table>    
                   
                    
                </fieldset>
            
            </form>

            
        
   
            </div>
        
        
        

    </article>
    
    
    <footer>
        <div id="footer">
            <h1 id="">Telif Hakları Saklıdır.</h1>
           
        </div>
    </footer>
  



</body>
</html>