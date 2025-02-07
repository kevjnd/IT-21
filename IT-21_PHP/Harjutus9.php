<!doctype html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container mt-5">
        <h1>Harjutus9</h1>

                <form method="get">
                    <label for="nimi">Sisesta nimi:</label>
                    <input type="text" id="nimi" name="nimi">
                    <input type="submit" value="sisesta" class="btn btn-primary">
                </form>

                <form method="get">
                    <label for="text">Sisesta tekst:</label>
                    <input type="text" id="text" name="text">
                    <input type="submit" value="Sisesta" class="btn btn-warning">
                </form>

                <form method="get">
                    <label for="sonum">Sisesta sõnum:</label>
                    <input type="text" id="sonum" name="sonum">
                    <input type="submit" value="Sisesta" class="btn btn-danger">
                </form>

                <form method="get">
                    <label for="enimi">Eesnimi:</label>
                    <input type="text" id="enimi" name="enimi">
                    <br>
                    <label for="pnimi">Perenimi:</label>
                    <input type="text" id="pnimi" name="pnimi">
                    <br>
                    <input type="submit" value="Sisesta" class="btn btn-secondary">
                </form>

                <?php

                //Harjutus 9
                //Kevin Joarand
                //07.03.2023

                //Suured ja väikesed tähed läbisegi
                echo "<h3>1. Suured ja väikesed tähed läbisegi</h3>";
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $nimi = $_GET['nimi'];
                    $nimi = ucfirst(strtolower($nimi));
                    echo "Tere $nimi!";
                }

                //Teksti iga tähe järgi lisada punkt
                echo "<h3>2. Teksti iga tähe järgi lisada punkt</h3>";
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $text = $_GET['text'];
                    $tpikkus = strlen($text);
                    $ptekst = '';
        
                    for ($i = 0; $i < $tpikkus; $i++) {
                        $ptekst .= strtoupper($text[$i]) . '.';
                    }
        
                    echo $ptekst;
                }
                
                //Tekstiväli kuvab kasutaja sisestatud sõnumeid
                echo "<h3>3. Tekstiväli kuvab kasutaja sisestatud sõnumeid</h3>";
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $sonum = $_GET['sonum'];
                    $tarnid = ['noob', 'roblox', 'koer'];
                    $kensoreeritud = $sonum;
        
                    foreach ($tarnid as $sona) {
                        $skensoreeritud = str_repeat('*', strlen($sona));
                        $kensoreeritud = str_ireplace($sona, $skensoreeritud, $kensoreeritud);
                    }
        
                    echo $kensoreeritud;
                }

                //Eesnime ja perenime põhjal luuakse email lõpuga @hkhk.edu.ee.
                echo "<h3>4. Eesnime ja perenime põhjal luuakse email lõpuga @hkhk.edu.ee.</h3>";
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $enimi = $_GET['enimi'];
                    $pnimi = $_GET['pnimi'];
                
                    $tapitahed = ['ä', 'ö', 'ü', 'õ', 'Ä', 'Ö', 'Ü', 'Õ'];
                    $asendus = ['a', 'o', 'y', 'o', 'A', 'O', 'Y', 'O'];
                    $enimi = str_replace($tapitahed, $asendus, $enimi);
                    $pnimi = str_replace($tapitahed, $asendus, $pnimi);
                
                    $emailnimi = strtolower($enimi . '.' . $pnimi);
                
                    $email = $emailnimi . '@hkhk.edu.ee';
                
                    echo $email;
                }
                
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