<!doctype html>
<html lang="et">
  <head>
    <meta synniaeget="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 
<body>
<div class="container mt-5"> 
    <h1>Harjutus7</h1>

    <div class="container mt-5">
        <div class="row">
            <form>
            <div class="form-group">
                <label for="email"><h3>Liitu uudiskirjaga</h3></label>
                <input type="email" class="form-control" placeholder="juku@gmail.com" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Sisesta email</small>
            </div>
            <button type="submit" class="btn btn-primary">Sisesta</button>
            </form>
        </div>

        <form method="get">
        <div class="form-group">
            <label for="kasutajanimi"><h3>Sisesta kasutajanimi</h3></label>
            <input type="text" class="form-control" placeholder="Kasutajanimi" id="kasutajanimi" name="kasutajanimi">
        </div>
        <button type="submit" class="btn btn-primary">Sisesta</button>
        </form>

        <form action="#" method="get">
          Vali vahemiku algus: <input type="text" name="algus" />
          Vali vahemiku lõpp: <input type="text" name="lopp" />
          <input type="submit" name="submit" class="btn btn-primary" value="Kuva vahemik" />
        </form>

        <form method="get">
        <label for="pikkus">Pikkus:</label>
        <input type="number" name="pikkus" id="pikkus" required><br><br>

        <label for="laius">Laius:</label>
        <input type="number" name="laius" id="laius" required><br><br>

        <input type="submit" value="Arvuta" class="btn btn-primary">
        </form>

        <form method="get">
            <label for="ikood">Sisesta isikukood</label>
            <input type="number" name="isikukood" id="isikukood">
            <button type="submit" class="btn btn-primary">Sisesta</button>
        </form>

    <?php
        //Harjutus 7
        //Kevin Joarand
        //31.01.2023

        //Tervitus
        echo "<h3>Tervitus</h3>";
        function greet($tervitus) {
            return "Tere " . $tervitus ;
          }
          
          echo greet("päiksekesekene!");

        //Kasutajanimi ja email
        echo "<h3>Kasutajanimi ja email</h3>";
        if(isset($_GET['kasutajanimi'])) {
            $kasutajanimi = strtolower($_GET['kasutajanimi']);
            $email = $kasutajanimi . "@hkhk.edu.ee";
            $kood = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 7)), 0, 7);
            echo "<br>";
            echo "kasutajanimi: " . $kasutajanimi . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Code: " . $kood . "<br>";
          }

        //Arvud
        echo "<h3>Arvud</h3>";
        if (isset($_GET['submit'])) {
          $algus = $_GET['algus'];
          $lopp = $_GET['lopp'];
          for ($i = $algus; $i <= $lopp; $i++) {
            echo  $i . ' ';
          }
        }

        //Ristküliku pindala
        echo "<h3>Ristküliku pindala</h3>";
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
          $pikkus = $_GET["pikkus"];
          $laius = $_GET["laius"];
      
          $pindala = $pikkus * $laius;
      
          echo "<br>Ristküliku pindala on: " . $pindala;
        }

        //Isikukood
        echo "<h3>Isikukood</h3>";
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
          $ikood = $_GET["isikukood"];
          if (strlen($ikood) == 11) {
              echo "Isikukood on õige pikkusega<br>";
          } else {
              echo "Isikukood on vale pikkusega<br>";
          }
          if (substr($ikood, 0, 1) == 1 || substr($ikood, 0, 1) == 3 || substr($ikood, 0, 1) == 5) {
            echo "Mees<br>";
          } else {
            echo "Naine<br>";
          }
          $ikood_subset = substr($ikood, 1, 6);
          $ikood_subset_formatted = implode(".", str_split($ikood_subset, 2));
          echo $ikood_subset_formatted;

        }
        //Head mõtted
        echo "<h3>Head mõtted</h3>";
        $alus = array("Goblin", "Koer", "Minni");
        $öeldis = array("ütles", "karjus", "haukus");
        $sihitis = array("Mwahhh", "Kus mu sokid on?", "UwU");

        function yhepikkune($alus, $öeldis, $sihitis) {
          $alussõna = $alus[array_rand($alus)];
          $öeldissõna = $öeldis[array_rand($öeldis)];
          $sihitissõna = $sihitis[array_rand($sihitis)];
          return $alussõna . " " . $öeldissõna . " " . $sihitissõna;
        }

        echo yhepikkune($alus, $öeldis, $sihitis);

    ?>
  </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>