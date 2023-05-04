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
        
		<h3>1. Sõiduaeg</h3>
        <form method="GET" action="#">
            <label for="start-time">Start Time (hh:mm):</label>
            <input type="text" id="start-time" name="start-time" minlength="5" required><br><br>
            <label for="end-time">End Time (hh:mm):</label>
            <input type="text" id="end-time" name="end-time" minlength="5" required><br><br>
            <button type="submit">Calculate</button>
        </form>
  
        <?php

        //Harjutus 12
        //Kevin Joarand
        //16.04.2023

        //1. Sõiduaeg
        if(isset($_GET["start-time"]) && isset($_GET["end-time"])) {
			$start_time = $_GET["start-time"];
			$end_time = $_GET["end-time"];
			
			if(strlen($start_time) >= 5 && strlen($end_time) >= 5) {
				$start_timestamp = strtotime($start_time);
				$end_timestamp = strtotime($end_time);
				
				if($end_timestamp > $start_timestamp) {
					$driving_time_seconds = $end_timestamp - $start_timestamp;
					$driving_time_hours = floor($driving_time_seconds / 3600);
					$driving_time_minutes = floor(($driving_time_seconds % 3600) / 60);
					
					echo "<p>Driving Time: " . $driving_time_hours . " hours " . $driving_time_minutes . " minutes</p>";
				} else {
					echo "<p>End time must be after start time.</p>";
				}
			} else {
				echo "<p>Please enter valid start and end times in hh:mm format.</p>";
			}
		}

        //2. Palkade võrdlus
        // Path to the CSV file
		$file = 'C:/Users/kevin/Downloads/tootajad.csv';

		// Open the file and read its contents
		$handle = fopen($file, "r");
		$data = fgetcsv($handle, 1000, ";");

		// Define variables for average and highest salaries
		$avg_m = 0;
		$highest_m = 0;
		$count_m = 0;
		$avg_n = 0;
		$highest_n = 0;
		$count_n = 0;

		// Loop through each row in the CSV file
		while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
			// Check if the employee type is "m" or "n"
			if ($data[1] == "m") {
				$count_m++;
				$salary = intval($data[2]);
				$avg_m += $salary;
				if ($salary > $highest_m) {
					$highest_m = $salary;
				}
			} elseif ($data[1] == "n") {
				$count_n++;
				$salary = intval($data[2]);
				$avg_n += $salary;
				if ($salary > $highest_n) {
					$highest_n = $salary;
				}
			}
		}

		// Calculate the average salaries
		if ($count_m > 0) {
			$avg_m /= $count_m;
		}
		if ($count_n > 0) {
			$avg_n /= $count_n;
		}

		// Close the file handle
		fclose($handle);

		// Print the results
		echo "<h3>2. Palkade võrdlus</h3>";
		echo "<p>Keskmine meeste palk: " . round($avg_m) . " EUR</p>";
		echo "<p>Kõrgeim meeste palk: " . $highest_m . " EUR</p>";
		echo "<p>Keskmine naiste palk: " . round($avg_n) . " EUR</p>";
		echo "<p>Kõrgeim naiste palk: " . $highest_n . " EUR</p>";

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