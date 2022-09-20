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
       
       
           


            <form class="bul" id="" action="#">
                <fieldset class="dene">
                    <legend >Şube Bilgileri</legend>

                                <table id="sube"  >
                                    <tr>
                                      <th> <label > Şube İd</label></th>
                                      <th><label > Şube Adı </label></th>
                                      <th><label > Şube Araç Sayısı</label></th>
                                      <th><label > Şubenin Bulunduğu Şehir</label></th>
                                      <th><label > Şubenin Bulunduğu İlçe</label> </th>
                                      


                                    </tr>


                                    <?php 

                                        $sorgu= "SELECT kiralayan_sube.sube_id,kiralayan_sube.sube_adi,kiralayan_sube.arac_sayisi,sehir.sehir_adi,ilce.ilce_ad
                                        FROM kiralayan_sube,sehir,ilce
                                        WHERE ilce.ilce_id=kiralayan_sube.ilce_id
                                        AND sehir.sehir_id=ilce.sehir_id";
                                        $baglanti=mysqli_connect("localhost","root","","arac_kiralaaa"); mysqli_set_charset($baglanti, "utf8"); 
                                        
                                    
                                        
                                    
                                        
                                        $sonuc= $baglanti->query($sorgu);
                                    
                                        
                                        while($satir= $sonuc->fetch_assoc())
                                        {
                                            echo"<tr>";

                                            
                                            echo"<td>".$satir{"sube_id"}."</td>";
                                            echo"<td>".$satir{"sube_adi"}."</td>";
                                            echo"<td>".$satir{"arac_sayisi"}."</td>";
                                           
                                            echo"<td>".$satir{"sehir_adi"}."</td>";
                                            echo"<td>".$satir{"ilce_ad"}."</td>";
                                            


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