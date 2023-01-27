<!doctype html>
<html lang="en">
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
    
    <form method="get">
        <label for="num1">Arv 1:</label>
        <input type="text" id="num1" name="num1">
        <br>
        <label for="num2">Arv 2:</label>
        <input type="text" id="num2" name="num2">
        <br>
        <input type="submit" value="Jaga">
    </form>

    <form method="get">
        <label for="vanus1">1. Vanus</label>
        <input type="text" id="vanus1" name="vanus1">
        <br>
        <label for="vanus2">2. Vanus</label>
        <input type="text" id="vanus2" name="vanus2">
        <br>
        <input type="submit" value="Võrdle">
    </form>

    <form method="get">
        <label for="pikkus">Pikkus:</label>
        <input type="text" id="pikkus" name="pikkus">
        <br>
        <label for="laius">Laius:</label>
        <input type="text" id="laius" name="laius">
        <br>
        <input type="submit" value="Otsusta">
    </form>

    <form method="get">
        <label for="length">Pikkus II: </label>
        <input type="text" id="length" name="length">
        <br>
        <label for="width">Laius II:</label>
        <input type="text" id="width" name="width">
        <br>
        <input type="submit" value="Joonista kujund">
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
        echo "<p>Error: One or both inputs are empty</p>";
    }


    ?>
</div>
</body>