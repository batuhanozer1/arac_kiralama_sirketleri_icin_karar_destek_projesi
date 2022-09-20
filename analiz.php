

<?php

@session_start();
@ob_start();
define("degisken","degisken/");




include_once(degisken."analiz2.php");
include_once(degisken."analiz3.php");
 ?>


<html lang="tr">
    
<head>
    <meta charset="UTF-8">
   <title>Anasayfa</title>
    <link rel="stylesheet" href="kds.css">
    <script>

window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Kiralanan Araç Modellerinin Dağılımı"
	},
	data: [{
		type: "pie", //change type to bar, line, area, pie, etc  
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
	
});
chart.render();
 
}
var chart2 = new CanvasJS.Chart("tablo2", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Şubelerin Aylık Kazanç Verisi"
	},
	data: [{
		type: "bar", //change type to bar, line, area, pie, etc  
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
	
});
chart2.render();
</script>    
</head>

<body>  
        <div id="marka">
            <h1>Car-app</h1>
        </div>    
    <nav id="menu" >
        <ul style="display: block;
    padding: 15px 250px;">

            
            <li><a href="arac_bilgi.php"> Araçlar</a></li>
            <li><a href="kiralama.php"> Kiralama İşlemleri</a></li>
            <li><a href="musteri.php"> Müşteriler </a></li>
            <li><a href="sube_bilgi.php"> Şubeler </a></li>
            <li><a href="analiz.php"> Analiz Sayfası </a></li>
            <li><a href="ekleme.php"> Veri Girişi </a></li>
            

            
            

        </ul>
        
    </nav  >
    
    
    <article id="icerik">

</body>
</html>
    
    
   
    
    






<!-- hesaplayıcı-->
    <?php error_reporting(0);
    $sayi1=$_POST['sayi1'];
    $sayi2=$_POST['sayi2'];
    
    
    $ortalama=( $sayi2 - $sayi1) ;
    
    if ($ortalama < 0)
    {
        $oneri="Zarar Ediyorsunuz.";
    }
    else
    {
        $oneri="Kar Ediyorsunuz Bu Modeldeki Araç Alımını Arttırın.";	
    }
    
    ?>



        <form method="post" action=" " method="post" style="  padding: 70; ">
            <fieldset class="dene" id="hesaplayıcı" style=" width: 550px; height: 400px; font-size: 25px; left: 30px; top: 20px;  ">
            <legend >Kar Tahminleyicisi</legend>

            
                <table style="  padding: 50  100;">
                <tr style="  position: relative; left: 30px; " >
                      
                        <td>Model Seçin:</td>
                        <td>
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
                <tr style="  position: relative; left: 30px; top: 20px; " >
                    <td>Ortalama Masrafı Girin:</td>
                    <td><input name="sayi1" type="text" /></td>
                </tr>
                <tr style="  position: relative; left: 30px; top: 20px; " >
                    <td> Ortalama Kazancı Girin:</td>
                    <td><input name="sayi2" type="text" /></td>
                </tr>
                        
                    <td>&nbsp;</td>
                    <td style=" height: 55px; width: 100px; position: relative; left: 150px; top: 45px; "><input style=" height: 45px; width: 80px;" name="gonder" type="submit" value="Hesapla" /></td>
                </tr>

                <tr style="  position: relative; left: 30px; top: 20px; ">
                <td >Ortalaması:</td>
                <td><strong><?php echo $ortalama; ?></strong></td>
                </tr>
                <tr style="  position: relative; left: 30px; top: 50px; ">
                    <td>Öneri:</td>
                    <td > <strong><?php error_reporting(0); echo $oneri; ?></strong></td>
                </tr>
                <tr>


                </table>
            </fieldset>
        </form>                
                
       
        
    

    </article>
    
    
    <footer>
        <div id="footer">
            <h1 id="">Telif Hakları Saklıdır.</h1>
           
        </div>
    </footer>
  



</body>
</html>