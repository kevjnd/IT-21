<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 
    <style>
    .img-box {
      width: 200px;
      height: 200px;
      margin: 20px;
    }
  </style>
  </head>
  <body>
<div class="container"> 
    <h1>Harjutus5</h1>

    <form action ="#" method="get">
      <label for="fnimi">Firma nimi:</label>
      <input type="text" id="fnimi" name="fnimi">
      <input type="submit" name="eemalda" value="Eemalda">
    </form>

    <h3>Otsingumootor</h3>
    <form action="#" method="get">
      <input type="text" name="nimi" placeholder="Sisesta nimi">
      <button><input type="submit" class="btn btn-primary" name="otsing" value="Otsi"></button>
    </form>

    <?php
        //Harjutus5
        //Kevin Joarand
        //31.01.2023

        //Tüdrukud
        echo "<h3>Tüdrukud</h3>";
        $tydrukud = array("Allah","Muhameed","Rahmaan","Salam","Nikolai","Karen","Asasasasasa","Minni");
        sort($tydrukud);
        $loend = count($tydrukud);
        for ($i = 0; $i < $loend; $i++)
        echo $tydrukud[$i] . "<br>";

        //Tüdrukud II
        echo "<h3>Tüdrukud II</h3>";
        for ($i = 0; $i < 3; $i++) {
          echo $tydrukud[$i] . "<br>";
        }
        echo $tydrukud[$loend - 1] . "<br>";
        $suvanimi = rand(0, $loend - 1);
        echo $tydrukud[$suvanimi] . "<br>";

        //Autod
        echo "<h3>Autod</h3>";
        $margid = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
        "Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
        "Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
        "Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
        "Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
        "Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");

        $VIN = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
        "1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
        "2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
        "WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
        "SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
        "WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
        "1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
        "3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
        "1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
        "TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
        "SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
        "2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
        "5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
        "1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
        "1N6AA0EDXFN868772", "WBADW3C59DJ422810");

        echo "<h5>Autode arv</h5>";
        $loend = array_count_values($margid);
        echo "Autosid on kokku: " . count($margid)."<br>";
        
        echo "<h5>Massiivi pikkused</h5>";
        if (count($margid) == count($VIN)){
          echo "Massiivid on sama pikad."."<br>";
        } else {
          echo "Massiividel on erinev pikkus."."<br>";
        }

        echo "<h5>Toyota ja Audi arv</h5>";
        $toyota_loend = 0;
        $audi_loend = 0;

        foreach ($margid as $auto) {
          if ($auto == 'Toyota') {
            $toyota_loend++;
          }
          if ($auto == 'Audi') {
            $audi_loend++;
          }
        }

        echo "Toyotade arv: " . $toyota_loend ."<br>";
        echo "Audide arv: " . $audi_loend ."<br>";

        echo "<h5>VIN koodid</h5>";
        foreach ($VIN as $mark) {
          if (strlen($mark) < 17) {
            echo $mark . "\n";
          }
        }
        //Keskmised palgad
        echo "<h3>Keskmised palgad</h3>";
        $palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
        $kokku = array_sum($palgad);
        $ploend = count($palgad);
        $keskmine = $kokku/$ploend;

        echo "2018 Palkade keskmine: " . $keskmine ."€";

        //Firmad
        echo "<h3>Firmad</h3>";
        $firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");
        sort($firmad);

        if(isset($_GET["eemalda"])){
          $fnimi = $_GET["fnimi"];
          if(($k = array_search($fnimi, $firmad)) !== false) {
              unset($firmad[$k]);
          }
          sort($firmad);
        }
        foreach ($firmad as $firma) {
          echo "<li>$firma</li>";
        }

        //Riigid
        echo "<h3>Riigid</h3>";
        $riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
        "Philippines","Canada","Philippines","South Sudan","Brazil",
        "Democratic Republic of the Congo","Indonesia","Syria","Sweden",
        "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
        "Kazakhstan","Cuba","Portugal","Czech Republic");

        $a = 0;
        $b = 0;
        foreach ($riigid as $riik) {
          if (strlen($riik) > $b) {
            $b = strlen($riik);
            $a = $riik;
          }
        }

        echo "Kõige pikema riigi nime märkide arv on: $a - $b Märki";

        //Hiina nimed
        echo "<h3>Hiina nimed</h3>";
        $hnimed = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
        "思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
        "璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");
        sort($hnimed);

        echo "Esimene nimi: " . $hnimed[0] . "<br>";
        echo "Viimane nimi: " . end($hnimed) . "<br>";

        //Google
        echo "<h3>Google</h3>";
        if (isset($_GET["otsing"])) {
          $nimi = $_GET["nimi"];
          $nimed = array("Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett",
          "Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
          "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
          "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
          "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");
            
          if (in_array($nimi, $nimed)) {
            echo "<div class='alert alert-success mt-3' role='alert'>Nimi leitud!</div>";
          } 
          else {
            echo "<div class='alert alert-danger mt-3' role='alert'>Nime ei leitud!</div>";
          }
        }

        //Pildid

        $pildid = array(
          "devlin.jpg",
          "freeland.jpg",
          "gabriel.jpg",
          "pete.jpg",
          "peterus.jpg",
          "prentice.jpg"
        );
    
        echo "<h5>Kolmas pilt:</h5>";
        echo "<div class='img-box'><img width='200' height='200'src='https://www.metshein.com/wp-content/uploads/2016/06/" . $pildid[2] . "' alt='" . $pildid[2] . "'></div>";
    
        echo "<h5>Kõik pildid:</h5>";
        echo "<div class='d-flex flex-wrap'>";
        foreach($pildid as $pilt) {
          echo "<div class='img-box'><img width='200' height='200' src='https://www.metshein.com/wp-content/uploads/2016/06/" . $pilt . "' alt='" . $pilt . "'></div>";
        }
        echo "</div>";
    ?>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
</body>
</html>