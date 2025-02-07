<!doctype html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container mt-5">
        <h1>Harjutus10</h1>

        <?php

        //Harjutus 10
        //Kevin Joarand
        //04.05.2023

        $correct_username = 'kasutaja';
        $correct_password = 'parool';

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === $correct_username && $password === $correct_password) {
                echo '<p>Sisse logitud!</p>';
                echo '<ul><li><a href="Harjutus10.php">Avaleht</a></li></ul>';
                echo '<ul><li><a href="Harjutus8.php?leht=portfoolio">Harjutus8</a></li></ul>';
                echo '<ul><li><a href="Harjutus5.php?leht=kaart">Harjutus5</a></li></ul>';
                echo '<ul><li><a href="Harjutus3.php?leht=kontakt">Harjutus3</a></li></ul>';
            } else {
                echo '<p>Vale kasutajanimi või parool!</p>';
            }
        } else {
            echo '<form method="post">
                    <label for="username">Kasutajanimi:</label>
                    <input type="text" id="username" name="username" placeholder="kasutaja" required>
                    <br>
                    <label for="password">Parool:</label>
                    <input type="password" id="password" name="password" placeholder="parool" required>
                    <br>
                    <input type="submit" value="Logi sisse">
                </form>';
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