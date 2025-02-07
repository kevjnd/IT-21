<!doctype html>
<html lang="et">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container mt-5">
        <h1>Harjutus12</h1>
        <?php

        //Harjutus 12
        //Kevin Joarand
        //16.04.2023

        //1. Sõiduaeg
        function soiduaeg() {
			echo '<h2>Sõiduaeg</h2>';
			echo '
				<form method="get">
					<label>Stardi aeg: </label>
					<input type="text" name="start_time" placeholder="hh:mm"><br><br>
					<label>Lõpp aeg: </label>
					<input type="text" name="end_time" placeholder="hh:mm"><br><br>
					<input type="submit" class="btn btn-primary" name="submit_time" value="Arvuta sõiduaeg">
				</form>';
			if(isset($_GET['submit_time'])) {
				$start_time = $_GET['start_time'];
				$end_time = $_GET['end_time'];
		
				if(empty($start_time) || empty($end_time)) {
					echo "<p>Väljad ei saa olla tühjad!</p>";
				} elseif(strlen($start_time) < 5 || strlen($end_time) < 5) {
					echo "<p>Ajad peavad olema vähemalt 5 sümbolit pikad!</p>";
				} else {
					$start_timestamp = strtotime($start_time);
					$end_timestamp = strtotime($end_time);
					$diff = $end_timestamp - $start_timestamp;
		
					$hours = floor($diff / 3600);
					$minutes = floor(($diff / 60) % 60);
		
					echo "<p>Sõiduaeg: $hours tundi ja $minutes minutit</p>";
				}
			}
		}
		soiduaeg();


        //2. Palkade võrdlus
        $data = array(
			array('Hubert Hunt', 'm', 2340),
			array('Siim Siil', 'm', 2570),
			array('Märt Mäger', 'm', 1960),
			array('Vilma Vihmauss', 'n', 2060),
			array('Merike Metskits', 'n', 2250),
			array('Kati Karu', 'n', 2370),
			array('Elmar Elevant', 'm', 2900),
			array('Timoteus Tigu', 'm', 2850),
			array('Reet Rebane', 'n', 2340),
			array('Kalev Kaamel', 'm', 2570),
			array('Karmen Kass', 'n', 2120),
			array('Kornelius Koer', 'm', 2250)
		);
		
		$meeste_summa = 0;
		$naiste_summa = 0;
		$meeste_arv = 0;
		$naiste_arv = 0;
		
		foreach ($data as $row) {
			if (isset($row[1]) && isset($row[2])) {
				if ($row[1] == "m") {
					$meeste_summa += $row[2];
					$meeste_arv++;
				} elseif ($row[1] == "n") {
					$naiste_summa += $row[2];
					$naiste_arv++;
				}
			} else {
				$row[1] = "";
				$row[2] = 0;
			}
		}
		
		if ($meeste_arv > 0 && $naiste_arv > 0) {
			$meeste_keskmine_palk = round($meeste_summa / $meeste_arv);
			$naiste_keskmine_palk = round($naiste_summa / $naiste_arv);
		
			$meeste_maksimum_palk = 0;
			$naiste_maksimum_palk = 0;
		
			foreach ($data as $row) {
				if ($row[1] == "m" && $row[2] > $meeste_maksimum_palk) {
					$meeste_maksimum_palk = $row[2];
				} elseif ($row[1] == "n" && $row[2] > $naiste_maksimum_palk) {
					$naiste_maksimum_palk = $row[2];
				}
			}
		
			echo "Meeste keskmine palk: " . $meeste_keskmine_palk . "<br>";
			echo "Naiste keskmine palk: " . $naiste_keskmine_palk . "<br>";
			echo "Kõrgeim meeste palk: " . $meeste_maksimum_palk . "<br>";
			echo "Kõrgeim naiste palk: " . $naiste_maksimum_palk . "<br>";
		} else {
			echo "Andmefailis ei ole piisavalt ridu meeste ja naiste palga võrdlemiseks.";
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