<?php  
include("ekle.php");

?>


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
       
       
           


            <form class="bul" method="post" action="ekle.php">
                <fieldset class="dene">
                    <legend >Araç Ekle</legend>
                    
                    <table id="bilgi_form" >
                            <tr>
                                <td><label for="marka"> Plaka:</label> </td>
                                <td><input type="text" name="plaka" maxlength="15" size="30" /></td>
                            </tr>

                            <tr>
                                <td><label for="marka"> Cinsi:</label> </td>
                                <td name="cins_id"> 
                                    

                                        <select name="cins_id" >
                                        <?php

                                            
                                            $sorgu= "SELECT * FROM arac_cinsi";
                                            $baglanti=mysqli_connect("localhost","root","","arac_kiralaaa"); mysqli_set_charset($baglanti, "utf8"); 


                                            $sonuc= $baglanti->query($sorgu);


                                            while($yaz= $sonuc->fetch_assoc())

                                            {
                                                echo " <option value='".$yaz["cins_id"]."'>".$yaz["cins_ad"]. "</option>";
                                            }




                                        ?>
                                        </select>
                                    
                                        
                                </td> 
                            </tr>

                            <tr>
                                <td><label for="model"> Modeli:</label> </td>
                                <td name="model_id">   
                                        <select name="model_id" >
                                        <?php

                                            
                                            $sorgu= "SELECT * FROM model";
                                            $baglanti=mysqli_connect("localhost","root","","arac_kiralaaa"); mysqli_set_charset($baglanti, "utf8"); 


                                            $sonuc= $baglanti->query($sorgu);


                                            while($yaz= $sonuc->fetch_assoc())

                                            {
                                                echo " <option value='".$yaz["model_id"]."'>".$yaz["model_adi"]. "</option>";
                                            }




                                        ?>
                                        </select>
                                </td> 
                            </tr>

                            <tr>
                                <td><label for="ruhsat"> Ruhsat No:</label> </td>
                                <td><input type="text" name="ruhsat_id" maxlength="15" size="30" /></td>
                            </tr>

                            <tr>
                                <td><label for="marka"> Araç Renk:</label> </td>
                                <td name="renk_id">   
                                        <select name="renk_id" >
                                        <?php

                                            
                                            $sorgu= "SELECT * FROM renk";
                                            $baglanti=mysqli_connect("localhost","root","","arac_kiralaaa"); mysqli_set_charset($baglanti, "utf8"); 


                                            $sonuc= $baglanti->query($sorgu);


                                            while($yaz= $sonuc->fetch_assoc())

                                            {
                                                echo " <option value='".$yaz["renk_id"]."'>".$yaz["renk_ad"]. "</option>";
                                            }




                                        ?>
                                        </select>
                                </td> 
                            </tr>

                           

                            <tr>
                                <td><label for="marka"> Şase Numarası:</label> </td>
                                <td><input type="text" name="sase_id" maxlength="15" size="30" /></td>
                            </tr>
                           
                           

                           

                            <tr>
                                <td><label for="marka"> Model Yılı:</label> </td>
                                <td><input type="text" name="model_yil" maxlength="15" size="30" /></td>
                            </tr>

                            <tr>
                                <td><label for="marka"> Kayıtlı Olduğu Şube:</label> </td>
                                <td><input type="text" name="kayit_sube" maxlength="15" size="30" /></td>
                            </tr>


                                            
                     

                             

                           


                    </table>
                    <div id="tus">
                        <input type="submit" value="Kaydet" id="ara">
                    </div>
                </fieldset>
            
            </form>

            


            <form class="bul"  method="post" action="ekle_sube.php">
                <fieldset class="dene">
                    <legend >Şube Ekle </legend>
                    
                    <table id="bilgi_form" >
                            <tr>
                                <td><label for="marka">Şube İd:</label> </td>
                                <td><input type="text" name="sube_id" maxlength="15" size="30" /></td>
                            </tr>

                            <tr>
                                <td><label for="marka"> Şube Adı:</label> </td>
                                <td><input type="text" name="sube_adi" maxlength="15" size="30" /></td>
                            </tr>

                            <tr>
                                <td><label for="model"> Bulunduğu İlçe:</label> </td>
                                <td name="ilce_id">   
                                        <select name="ilce_id" >
                                        <?php

                                            
                                            $sorgu= "SELECT * FROM ilce";
                                            $baglanti=mysqli_connect("localhost","root","","arac_kiralaaa"); mysqli_set_charset($baglanti, "utf8"); 


                                            $sonuc= $baglanti->query($sorgu);


                                            while($yaz= $sonuc->fetch_assoc())

                                            {
                                                echo " <option value='".$yaz["ilce_id"]."'>".$yaz["ilce_ad"]. "</option>";
                                            }




                                        ?>
                                        </select>
                                </td> 
                            </tr>

                           
                            <tr>
                                <td><label for="marka"> Şube Araç Sayısı:</label> </td>
                                <td><input type="text" name="arac_say" maxlength="15" size="30" /></td>
                            </tr>

                            <tr>
                                <td><label for="marka">Aylık Kazanç:</label> </td>
                                <td><input type="text" name="aylik_kazanc" maxlength="15" size="30" /></td>
                            </tr>

                           

                           
                           


                    </table>
                    <div id="tus">
                        <input type="submit" value="Kaydet" id="ara">
                    </div>
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