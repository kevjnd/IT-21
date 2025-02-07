<!doctype html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container mt-5">
        <h1>Harjutus8</h1>

                <?php

                //Harjutus 8
                //Kevin Joarand
                //02.03.2023
                
                //Kuva kuupäev ja kellaaeg
                echo "<h3>1. Kuva kuupäev ja kellaaeg</h3>";
                $date = date('d.m.Y H:i');
                echo $date;

                //Leia kui vana on või kui vanaks saab kasutaja sellel aastal
                echo "<h3>2. Leia kui vana on või kui vanaks saab kasutaja sellel aastal</h3>";
                $birth_year = 2004; // kasutaja sünniaasta
                $current_year = date("Y"); // praegune aasta
                $age = $current_year - $birth_year;
                echo "Kasutaja on/saab: " . $age . "\n";

                //Mitu päeva on käesoleva kooliaasta lõpuni?
                echo "<h3>3. Mitu päeva on käesoleva kooliaasta lõpuni?</h3>";
                $aasta = date('Y');

                $a = date_create($aasta . '-06-30');

                $kuupaev = date_create();

                $vahe = date_diff($kuupaev, $a);
                $paevad = $vahe->days;

                echo $paevad . ' päeva jäänud ' . $aasta . ' kooli aasta lõpuni';

                //Väljasta vastavalt aastaajale pilt
                echo "<h3>4. Väljasta vastavalt aastaajale pilt</h3>";

                $current_month = date("n"); // praegune kuu
                if ($current_month >= 3 && $current_month <= 5) {
                echo "<img src='https://hips.hearstapps.com/ghk.h-cdn.co/assets/18/12/spring-cherry-blossoms.jpg'>";
                } else if ($current_month >= 6 && $current_month <= 8) {
                echo "<img src='https://community.thriveglobal.com/wp-content/uploads/2020/06/summer.jpg'>";
                } else if ($current_month >= 9 && $current_month <= 11) {
                echo "<img src='https://cdn.britannica.com/88/137188-050-8C779D64/Boston-Public-Garden.jpg'>";
                } else {
                echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b0/Winter_forest_silver.jpg'>";
                }
                ?>
                <img src="<?php echo $image; ?>" alt="Current Season">
            </div>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
                integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
                integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
                crossorigin="anonymous"></script>
</body>

</html>