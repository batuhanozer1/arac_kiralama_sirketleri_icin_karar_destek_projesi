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
       
       
           


            <form class="bul" id="musteri" action="#">
                <fieldset class="dene">
                    <legend >Müşteri Bilgileri</legend>
                    <table id="musteri">
                        <tr>
                          <th><label > TC Kimlik Numarası</label></th>
                          <th><label > Sicil Numarası </label> </th>
                          <th><label > Müşteri Adı</label></th>
                          <th><label > Müşteri Soyadı</label></th>
                          <th><label > Ehliyet Sınıfı</label></th>
                          <th><label > Yaşadığı Şehir</label></th>
                          <th><label > Kiraladığı Şube</label></th>
                         
                         
                         


                        </tr>
                        <?php 

                            $sorgu= "SELECT surucu.surucu_id, surucu.sicil_id, surucu.ad,surucu.soyad,ehliyet.sinifi,sehir.sehir_adi,kiralayan_sube.sube_adi
                            FROM surucu,ehliyet,sehir,kiralama,kiralayan_sube
                            WHERE surucu.sehir_id=sehir.sehir_id
                            AND surucu.sicil_id=ehliyet.sicil_id
                            AND kiralama.surucu_id=surucu.surucu_id
                            AND kiralama.sube_id= kiralayan_sube.sube_id";
                            $baglanti=mysqli_connect("localhost","root","","arac_kiralaaa"); mysqli_set_charset($baglanti, "utf8"); 
                            
                           
                            $sonuc= $baglanti->query($sorgu);
                           
                            
                            while($satir= $sonuc->fetch_assoc())
                            {
                                echo"<tr>";

                                
                                echo"<td>".$satir{"surucu_id"}."</td>";
                                echo"<td>".$satir{"sicil_id"}."</td>";
                                echo"<td>".$satir{"ad"}."</td>";
                                echo"<td>".$satir{"soyad"}."</td>";
                                echo"<td>".$satir{"sinifi"}."</td>";
                                echo"<td>".$satir{"sehir_adi"}."</td>";
                                echo"<td>".$satir{"sube_adi"}."</td>";
                                


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