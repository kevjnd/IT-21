<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 
<body>
<div class="container"> 
    <h1>Harjutus6</h1>

    <form action="#" method="get">
    <label for="suurus">Sisesta ruudu suurus:</label>
    <input type="number" name="suurus" id="suurus" required>
    <input type="submit" value="Ruut">
  </form>

    <?php
        //Harjutus7
        //Kevin Joarand
        //31.01.2023

        //1. Genereeri
        echo "<h3>1. Genereeri</h3>";
        for ($i = 1; $i <= 100; $i++) {
            echo "$i.";
            if ($i % 10 == 0) {
              echo "<br>";
            }
          }

        //2. Rida
        echo "<h3>2. Rida</h3>";
        for ($i = 0; $i < 10; $i++) {
            echo "*";
          }

        //3. Rida II
        echo "<h3>3. Rida II</h3>";
        for ($i=0; $i<10; $i++) {
          echo "*<br>";
        }
        
        //4. Ruut
        echo "<h3>4. Ruut</h3>";
        if (isset($_GET['suurus'])) {
          $size = $_GET['suurus'];
          for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
              echo "* ";
            }
            echo "<br>";
          }
        }

        //5. Kahanev
        echo "<h3>5. Kahanev</h3>";
        $arvud = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        $paarisarvud = array_filter($arvud, function($arv) {
          return $arv % 2 == 0;
        });

        rsort($paarisarvud);

        foreach($paarisarvud as $paarisarv) {
          echo $paarisarv . "<br>";
        }
      
        //6. Kolmega jagunevad
        echo "<h3>6. Kolmega jagunevad</h3>";
        for ($i=1; $i<=100; $i++) {
          if ($i % 3 == 0) {
            echo $i . "<br>";
          }
        }

        //7. Massiivid ja tsüklid
        echo "<h3>7. Masiivid ja tsüklid</h3>";
        $tydrukud = array("Emily", "Jessica", "Sarah", "Ashley");
        $poisid = array("John", "Michael", "Eric", "David");

        for ($i = 0; $i < count($poisid); $i++) {
            echo $poisid[$i] . " - " . $tydrukud[$i] . "<br>";
        }

        //8. Massiivid ja tsüklid (Bonus)
        echo "<h3>8. Massiivid ja tsüklid (Bonus)</h3>";
        $tydrukud = array("Mary", "Jane", "Emily", "Sophie");
        $poisid = array("John", "Michael", "David", "Adam");

        $tydrukud_copy = array_values(array_unique($tydrukud));
        $poisid_copy = array_values(array_unique($poisid));

        print_r($tydrukud_copy);
        print_r($poisid_copy);
    ?>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>