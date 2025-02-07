<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: https://liivakast.hkhk.edu.ee/~kjoarand/PHP/PHP_KT2.php");
    exit;
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: https://liivakast.hkhk.edu.ee/~kjoarand/PHP/PHP_KT2.php");
    exit;
}

$filename = "/home/kjoarand/public_html/PHP/PHP_KT2_save.txt";
$defaultTitle = "Blog title goes here";
$defaultContent = "This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.";


if (file_exists($filename)) {

    $fileContent = file_get_contents($filename);
    $content = json_decode($fileContent, true);
    $title = $content['title'];
    $content = $content['content'];
} else {

    $title = $defaultTitle;
    $content = $defaultContent;
}
?>

<!doctype html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP_KT2_admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-2 me-lg-0 d-none d-md-inline-block">
                    <h1 class="btn btn-primary px-5 btn-lg rounded-0">
                        <a href="https://youtu.be/dQw4w9WgXcQ" class="text-white"
                            style="text-decoration: none;">Krõbin</a>
                    </h1>
                </li>
            </ul>
            <ul class="navbar-nav d-flex flex-row me-1">
                <li class="nav-item active">
                    <a class="nav-link text-black me-2" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary me-2" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary me-2" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary me-2" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary me-2" href="#">About</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <button type="submit" name="logout" class="btn btn-outline-dark">Log out</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="p-5 mb-4 bg-light jumbo">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-8">
                <h1 class="display-1" contenteditable="true" id="editable-title"><?php echo htmlspecialchars($title); ?>Blog title goes here</h1>
                <p class="fs-6" contenteditable="true" id="editable-content"><?php echo htmlspecialchars($content); ?>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <button type="button" class="btn btn-primary"><i class="navbar-nav"></i>Learn more<i class="bi bi-arrow-right-short"></i></button>
                <button type="button" class="btn btn-primary" id="save-button">Save</button>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 border-0">
                        <div class="card-body" contenteditable="true" id="editable-image-container">
                            <img id="editable-image" src="https://via.placeholder.com/400x400.jpg" alt="Image">
                        </div>
                        <div class="card-footer text-end"></div>
                    </div>

                    <div class="card mb-3 border-0">
                        <div class="card-body">
                            <h5 class="card-title" contenteditable="true">Card title</h5>
                            <p class="card-text" contenteditable="true">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text" contenteditable="true"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card mb-3 border-0">
                        <div class="card-body">
                            <h5 class="card-title" contenteditable="true">Card title</h5>
                            <p class="card-text" contenteditable="true">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text" contenteditable="true"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card mb-3 border-0">
                        <div class="card-body">
                            <h5 class="card-title" contenteditable="true">Card title</h5>
                            <p class="card-text" contenteditable="true">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text" contenteditable="true"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="py-4 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2023 Krõbin. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline mb-0 social-icons">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OhIJt3u4SwELvbhuQxgzCPlkzNSz/vvG5Z2tFh4iVNctY8AxarGZ+WjTxCnDNV3L"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

        $("#save-button").on("click", function () {
            var title = $("#editable-title").text();
            var content = $("#editable-content").text();

            $.ajax({
                type: "POST",
                url: "https://liivakast.hkhk.edu.ee/~kjoarand/PHP/PHP_KT2_save.php",
                data: {
                    title: title,
                    content: content
                },
                success: function (response) {
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.log("Error:", status, error);
                    console.log(xhr.responseText);
                }
            });
        });
    });
    </script>

</body>

</html>