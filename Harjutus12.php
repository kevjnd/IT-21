<!doctype html>
<html lang="et">

<head>
    <meta synniaeget="utf-8">
    <meta nimi="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container mt-5">
        <h1>Harjutus12</h1>
        
        <form method="GET" action="#">
            <label for="start-time">Start Time (hh:mm):</label>
            <input type="text" id="start-time" name="start-time" minlength="5" required><br><br>
            <label for="end-time">End Time (hh:mm):</label>
            <input type="text" id="end-time" name="end-time" minlength="5" required><br><br>
            <button type="submit">Calculate</button>
        </form>

        <h1>Salary Comparison</h1>

        <table>
            <tr>
                <th></th>
                <th>Average Salary</th>
                <th>Highest Salary</th>
            </tr>
            <tr>
                <th>Men</th>
                <td><?php echo number_format($avg_male_salary, 2); ?></td>
                <td><?php echo number_format($max_male_salary, 2); ?></td>
            </tr>
            <tr>
                <th>Women</th>
                <td><?php echo number_format($avg_female_salary, 2); ?></td>
                <td><?php echo number_format($max_female_salary, 2); ?></td>
            </tr>
        </table>
  
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
        // Open the CSV file
		$file = fopen("C:/Users/kevin/Downloads/töötajad.csv", "r");
		// Initialize variables
		$total_male_salary = 0;
		$total_female_salary = 0;
		$count_male = 0;
		$count_female = 0;
		$max_male_salary = 0;
		$max_female_salary = 0;

		// Read each line of the CSV file
		while (($data = fgetcsv($file)) !== FALSE) {
			$name = $data[0];
			$gender = $data[1];
			$salary = $data[2];

			// Calculate total salary and count for each gender
			if ($gender == "M") {
				$total_male_salary += $salary;
				$count_male++;
				if ($salary > $max_male_salary) {
					$max_male_salary = $salary;
				}
			} else {
				$total_female_salary += $salary;
				$count_female++;
				if ($salary > $max_female_salary) {
					$max_female_salary = $salary;
				}
			}
		}

		// Calculate average salary for each gender
		$avg_male_salary = $total_male_salary / $count_male;
		$avg_female_salary = $total_female_salary / $count_female;

		// Close the CSV file
		fclose($file);

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