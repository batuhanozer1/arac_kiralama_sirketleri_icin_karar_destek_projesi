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
       
       
           


            <form class="bul" action="#" >
                <fieldset class="dene"  >
                    <legend >Araç Bilgileri</legend>

                                <table id="bilgi_form">
                                    <tr>
                                      <th> <label > Plaka</label></th>
                                      <th><label > Şase Numarası</label> </th>
                                      <th><label > Marka</label></th>
                                      <th><label > Model</label></th>
                                      <th><label > Model Yılı</label></th>
                                      <th><label > Cinsi</label></th>
                                      <th><label > Renk</label></th>
                                       


                                    </tr>
                                    <?php 

                                        $sorgu= "SELECT arac.plaka ,arac.sase_id ,marka.marka_adi , model.model_adi ,arac.model_yil,arac_cinsi.cins_ad, renk.renk_ad
                                        FROM renk,arac,arac_cinsi,marka,model
                                        WHERE arac.cins_id=arac_cinsi.cins_id
                                        AND model.marka_id=marka.marka_id
                                        AND arac.renk_id=renk.renk_id
                                        ORDER BY arac.model_yil DESC";
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
                                            echo"<td>".$satir{"cins_ad"}."</td>";
                                            echo"<td>".$satir{"renk_ad"}."</td>";
                                            echo"</tr>";
                                        }

                                    ?>       


                                    
                                      
                                    
                                </table>


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