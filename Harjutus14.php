<!doctype html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container mt-5">
        <h1>Harjutus14</h1>

        <?php

        //Harjutus 14
        //Kevin Joarand
        //04.05.2023

        // Suvaline pilt
        function suvapilt() {
            echo "<h3>1. Suvaline pilt</h3>";

            $pildid = array(
            "https://picsum.photos/seed/1/500",
            "https://picsum.photos/seed/2/500",
            "https://picsum.photos/seed/3/500",
            "https://picsum.photos/seed/4/500",
            "https://picsum.photos/seed/5/500",
            "https://picsum.photos/seed/6/500",
            "https://picsum.photos/seed/7/500",
            "https://picsum.photos/seed/8/500",
            "https://picsum.photos/seed/9/500",
            "https://picsum.photos/seed/10/500",
            "https://picsum.photos/seed/11/500",
            "https://picsum.photos/seed/12/500",
            "https://picsum.photos/seed/13/500",
            "https://picsum.photos/seed/14/500",
            "https://picsum.photos/seed/15/500",
            "https://picsum.photos/seed/16/500",
            "https://picsum.photos/seed/17/500",
            "https://picsum.photos/seed/19/500",
            "https://picsum.photos/seed/20/500"
            );
            $suvapilt = $pildid[array_rand($pildid)];
            echo "<img src='$suvapilt' alt='Suvaline pilt'>";
        }

        suvapilt();

       // Pisipildid veergudes
        echo "<h3>2. Pisipildid veergudes</h3>";

        // Muutujad pildi seadistamiseks
        $pildi_lingi_alus = 'https://picsum.photos/seed/';
        $pildi_suurus = '500';

        // Piltide lingid massiivis
        $pildi_lingid = array(
            array('id' => '1', 'link' => $pildi_lingi_alus . '1/' . $pildi_suurus),
            array('id' => '2', 'link' => $pildi_lingi_alus . '2/' . $pildi_suurus),
            array('id' => '3', 'link' => $pildi_lingi_alus . '3/' . $pildi_suurus)
        );

        // Kuvame pisipildid veergudena
        $veerud = 3; // veergude arv
        echo '<div class="pildid">';
        for ($i=0; $i<count($pildi_lingid); $i++) {
            if ($i % $veerud == 0) { // kui rida täis, alusta uut rida
                echo '</div><div class="pildid">';
            }
            echo '<div class="pilt">';
            echo '<a href="' . $pildi_lingid[$i]['link'] . '"><img src="' . $pildi_lingid[$i]['link'] . '" alt="Pilt ' . ($i+1) . '" width="200" height="200"></a>';
            echo '</div>';
        }
        echo '</div>';

        // Kuvame suurema pildi, kui kasutaja klõpsab pisipildil
        if (isset($_GET['pilt'])) {
            $suur_pilt = $_GET['pilt'];
            echo '<div class="suur-pilt-container">';
            echo '<img src="' . $suur_pilt . '" alt="Suur pilt" class="suur-pilt">';
            echo '</div>';
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