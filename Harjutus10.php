<!doctype html>
<html lang="et">

<head>
    <meta synniaeget="utf-8">
    <meta nimi="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <div class="container mt-5">
        <h1>Harjutus10</h1>
        <menu>
            <a href="index.php">Avaleht</a> |
            <a href="index.php?leht=portfoolio">Portfoolio</a> |
            <a href="index.php?leht=kaart">Kaart</a> |
            <a href="index.php?leht=kontakt">Kontakt</a> 
        </menu>


            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <div class="container">
        <?php
        $pages = array("Harjutus10_1", "Harjutus9", "Harjutus3", "Harjutus5");
        $page = isset($_GET['page']) ? $_GET['page'] : "Harjutus10_1";

        if (!in_array($page, $pages)) {
            die("Vabandame, sellist lehte ei eksisteeri.");
        }

        if (isset($_GET['logout'])) {
            session_destroy();
            header("Location: Harjutus10.php");
            exit();
        }

        if (!isset($_SESSION['logged_in'])) {
            $_SESSION['logged_in'] = false;
        }

        if (isset($_POST['username']) && isset($_POST['password'])) {
            if ($_POST['username'] == "admin" && $_POST['password'] == "parool") {
                $_SESSION['logged_in'] = true;
            } else {
                echo '<div class="alert alert-danger mt-4" style="height:60px" role="alert">Vale kasutajanimi või parool.';
            }
        }

        if (!$_SESSION['logged_in']) {
            ?>
            <form class= "container bg-primary bg-opacity-25 mt-4 text-black" action="" method="post">
                Kasutajanimi: <input class="m-1" type="text" name='username'><br>
                Parool: <input class="m-1" type="password" name="password"><br>
                <input type="submit" class="m-2 bg-success text-white" value="Logi sisse">
            </form>
            <?php
            exit();
        }
        ?>

        <div>
        <a href="Harjutus10.php?page=Harjutus10_1">Leht 1</a> |
        <a href="Harjutus10.php?page=Harjutus9">Leht 2</a> |
        <a href="Harjutus10.php?page=Harjutus3">Leht 3</a> |
        <a href="Harjutus10.php?page=Harjutus5">Leht 4</a>
        <br><br>
        </div>

        <?php
        switch ($page) {
            case "Harjutus10_1":
                include "Harjutus10_1.php";
                break;
            case "Harjutus9":
                include "Harjutus9.php";
                break;
            case "Harjutus3":
                include "Harjutus3.php";
                break;
            case "Harjutus5":
                include "Harjutus5.php";
                break;
        }
        ?>

        <br><br>
        <a href="Harjutus10.php?logout=true">Logi välja</a>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>