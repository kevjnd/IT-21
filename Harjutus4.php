<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"> 
    <h1>Harjutus4</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  
    <h3>Jagamine</h3>
    <form method="get">
        <label for="num1">Arv 1:</label>
        <input type="text" id="num1" name="num1" placeholder="Arv 1">
        <br>
        <label for="num2">Arv 2:</label>
        <input type="text" id="num2" name="num2" placeholder="Arv 2">
        <br>
        <input type="submit" value="Jaga" class="btn btn-success">
    </form>

    <h3>Vanus</h3>
    <form method="get">
        <label for="vanus1">1. Vanus:</label>
        <input type="text" id="vanus1" name="vanus1" placeholder="Vanus 1">
        <br>
        <label for="vanus2">2. Vanus:</label>
        <input type="text" id="vanus2" name="vanus2" placeholder="Vanus 2">
        <br>
        <input type="submit" value="Võrdle" class="btn btn-danger">
    </form>

    <h3>Ristkülik või Ruut</h3>
    <form method="get">
        <label for="pikkus">Pikkus:</label>
        <input type="text" id="pikkus" name="pikkus" placeholder="Pikkus">
        <br>
        <label for="laius">Laius:</label>
        <input type="text" id="laius" name="laius" placeholder="Laius">
        <br>
        <input type="submit" value="Otsusta" class="btn btn-primary">
    </form>

    <h3>Ristkülik või ruut II</h3>
    <form method="get">
        <label for="length">Pikkus II: </label>
        <input type="text" id="length" name="length" placeholder="Pikkus II">
        <br>
        <label for="width">Laius II:</label>
        <input type="text" id="width" name="width" placeholder="Laius II">
        <br>
        <input type="submit" value="Joonista kujund" class="btn btn-outline-warning">
    </form>

    <h3>Juubel</h3>
    <form method="get">
      <label for="saasta">Sünniaasta:</label>
      <input type="text" id="saasta" name="saasta" placeholder="Sünniaasta">
      <input type="submit" value="Kontrolli" class="btn btn-light">
    </form>

    <h3>Hinne</h3>
    <form method="get">
    <label for="punktid">Punktid:</label>
    <input type="text" name="punktid" id="punktid" placeholder="Punktid">
    <input type="submit" name="Lisa" value="Lisa" class="btn btn-outline-info">
    </form>
    <?php
    //Harjutus4
    //Kevin Joarand
    //24.01.2023

    //2. Jagamine
    if (!empty($_GET['num1']) && !empty($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    if ($num2 == 0) {
        echo "<p>Ei saa jagada</p>";
    } else {
        $result = $num1 / $num2;
        echo "<p>Vastus: $result</p>";
    }
    } elseif(empty($_GET['num1']) || empty($_GET['num2'])) {
    echo "<p>Pole sisestatud arve.</p>";
    }

    //3. Vanus
    if (!empty($_GET['vanus1']) && !empty($_GET['vanus2'])) {
        $vanus1 = $_GET['vanus1'];
        $vanus2 = $_GET['vanus2'];
        if ($vanus1 > $vanus2) {
            echo "<p>1. on vanem kui 2.</p>";
        } elseif ($vanus1 < $vanus2) {
            echo "<p>2. on vanem kui 1.</p>";
        } else {
            echo "<p>1. ja 2. on sama vanad</p>";
        }
    } else {
        echo "<p>Sisestage kaks vanust!</p>";
    }

    //4. Ristkülik või ruut
    if (!empty($_GET['pikkus']) && !empty($_GET['laius'])) {
        $pikkus = $_GET['pikkus'];
        $laius = $_GET['laius'];
        if ($pikkus == $laius) {
            echo "<p>Ruut</p>";
        } else {
            echo "<p>Ristkülik</p>";
        }
    } else {
        echo "<p>Siesta pikkus ja laius!</p>";
    }
    
    //5. Ristkülik või ruut II
    if (!empty($_GET['length']) && !empty($_GET['width'])) {
        $length = $_GET['length'];
        $width = $_GET['width'];
        if ($length == $width) {
            echo "<div style='width: $length"."px; height: $width"."px; background-color: black;'></div>";
        } else {
            echo "<div style='width: $length"."px; height: $width"."px; background-color: white; border: 1px solid black;'></div>";
        }
    } else {
        echo "<p>Joonistamiseks sisesta pikkus ja laius!</p>";
    }

    //6. Juubel
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $saasta = $_GET['saasta'];
        if (!empty($saasta)) {
          if ($saasta % 50 == 0) {
            echo "<p>$saasta on juubeliaasta.</p>";
          } else {
            echo "<p>$saasta pole juubeliaasta.</p>";
          }
        } else {
          echo "<p>Sisesta sünniaasta!</p>";
        }
      }

      //7. Hinne
      if (isset($_GET['Lisa'])) {
        $punktid = $_GET['punktid'];
        switch ($punktid) {
          case ($punktid >= 10):
            echo "SUPER!";
            break;
          case ($punktid >= 5 && $punktid < 10):
            echo "DONE!";
            break;
          case ($punktid < 5):
            echo "KASIN!";
            break;
          default:
            echo "SISESTA OMA PUNKTID!";
        }
      }
    ?>
</div>
</body>
</html>