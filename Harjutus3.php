<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"> 
    <h1>Harjutus3</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


    <h3>Arvuta trapetsi pindala</h3>
    <form action="#" method="get" class="form-group">
        <input type="number" name="a" required><br>
        <input type="number" name="b" required><br>
        <input type="number" name="c" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>
    </form>
    <h3>Arvuta rombi ümbermõõt</h3>
    <form action="#" method="get" class="form-grouo">
        <input type="number" name="r1" required><br>
        <input type="submit" value="Arvuta" class="btn btn-success"><br>


    

        
    <?php
        //Harjutus3
        //Kevin Joarand
        //24.01.2023

        //Trapetsi pindala
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']) && isset($_GET['s']))
        $arv1 = $_GET['a'];
        $arv2 = $_GET['b'];
        $arv3 = $_GET['c'];
        $s = $arv1 + $arv2 * $arv3 / 2;
        
        //Rombi ümbermõõt
        if (isset($_GET['r1']))
        $r1 = $_GET['r1'];
        $p = $r1 * 4;

        echo "Trapetsi pindala on " . $s. "<br>";
        echo "Rombi ümbermõõt on " . $p . "<br>";
        
    ?>
</div>
</body>
</html>