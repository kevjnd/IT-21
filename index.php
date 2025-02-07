<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaleht</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Add your custom styles here */

        .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
        }

        .rating > input {
            display: none;
        }

        .rating > label:before {
            content: '\2605';
            margin: 5px;
            font-size: 25px;
            font-weight: bold;
            cursor: pointer;
        }

        .rating > label {
            color: grey;
        }

        .rating > input:checked ~ label,
        .rating:not(:checked) > label:hover,
        .rating:not(:checked) > label:hover ~ label {
            color: gold;
        }

        .rating > input:checked + label:hover,
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label,
        .rating > input:checked ~ label:hover ~ label {
            color: #ffd700;
        }

        body {
            padding-top: 60px;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .page-nav {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            list-style: none;
            padding: 0;
            margin: 0;
            justify-content: center;
            align-items: center;
        }

        .page-nav li {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-nav a {
            display: inline-block;
            padding: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Krõbin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning" style="color: black" href="login.php">Logi sisse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Valige asutus mida hinnata</h2>

        <?php
        // MySQL database configuration
        $host = 'localhost';
        $username = 'phpmyadmin';
        $password = 'Passw0rd';
        $database = 'kjoarand';

        // Number of entries to display per page
        $entriesPerPage = 10;

        // Establish a connection to MySQL
        $conn = new mysqli($host, $username, $password, $database);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Get the total number of entries in the table
        $totalEntriesQuery = "SELECT COUNT(*) AS total FROM tabel1";
        $totalEntriesResult = $conn->query($totalEntriesQuery);
        $totalEntries = $totalEntriesResult->fetch_assoc()['total'];

        // Calculate the total number of pages
        $totalPages = ceil($totalEntries / $entriesPerPage);

        // Get the current page number from the query parameter
        $currentPage = isset($_GET['page']) ? max(1, min($_GET['page'], $totalPages)) : 1;

        // Get the sorting parameters from the query parameters
        $sortColumn = isset($_GET['sort']) ? $_GET['sort'] : 'id';
        $sortOrder = isset($_GET['order']) && strtolower($_GET['order']) === 'desc' ? 'DESC' : 'ASC';

        // Get the search query from the query parameter
        $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

        // Build the search condition dynamically based on the columns in the table
        $searchCondition = '';
        $columnsQuery = "SHOW COLUMNS FROM tabel1";
        $columnsResult = $conn->query($columnsQuery);
        if ($columnsResult->num_rows > 0) {
            while ($columnRow = $columnsResult->fetch_assoc()) {
                $columnName = $columnRow['Field'];
                if ($columnName === 'id') {
                    continue;
                }
                if (!empty($searchCondition)) {
                    $searchCondition .= " OR ";
                }
                $searchCondition .= "`$columnName` LIKE '%$searchQuery%'";
            }
        }

        // Calculate the starting and ending positions for the current page
        $start = ($currentPage - 1) * $entriesPerPage;
        $end = $start + $entriesPerPage - 1;
        $end = min($end, $totalEntries);

        // Retrieve data from the table with sorting and search condition
        $dataQuery = "SELECT * FROM tabel1";
        if (!empty($searchCondition)) {
            $dataQuery .= " WHERE $searchCondition";
        }
        $dataQuery .= " ORDER BY $sortColumn $sortOrder LIMIT $start, $entriesPerPage";
        $dataResult = $conn->query($dataQuery);

        // Check if there is any data in the table
        if ($dataResult->num_rows > 0) {
            // Display search bar
            echo '<form class="mb-3" method="GET">';
            echo '<div class="input-group">';
            echo '<input type="text" class="form-control" name="search" placeholder="Search" value="' . htmlspecialchars($searchQuery) . '">';
            echo '<button type="submit" class="btn btn-success">Otsing</button>';
            echo '</div>';
            echo '</form>';

            // Display table
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';

            // Display column headers with sorting links
            while ($row = $dataResult->fetch_assoc()) {
                foreach ($row as $column => $value) {
                    if ($column == 'id') {
                        continue;
                    }

                    // Generate the sorting links
                    $sortUrl = '?page=' . $currentPage . '&sort=' . $column;
                    $sortUrl .= ($sortColumn === $column && $sortOrder === 'ASC') ? '&order=desc' : '&order=asc';
                    echo '<th><a href="' . $sortUrl . '">' . $column . '</a></th>';
                }
                break; // Display only the first row as the column headers
            }

            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            $dataResult->data_seek(0); // Reset the result pointer to the beginning
            while ($row = $dataResult->fetch_assoc()) {
                echo '<tr>';
                foreach ($row as $column => $value) {
                    if ($column == 'id') {
                        continue;
                    }
                    echo '<td>' . $value . '</td>';
                }
                // Add a button to show the pop-up form
                echo '<td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Hinda</button></td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';

            // Pagination links
            echo '<ul class="page-nav">';
            if ($currentPage > 1) {
                echo '<li><a href="?page=1&sort=' . $sortColumn . '&order=' . $sortOrder . '&search=' . urlencode($searchQuery) . '"><i class="fas fa-angle-double-left"></i></a></li>';
                echo '<li><a href="?page=' . ($currentPage - 1) . '&sort=' . $sortColumn . '&order=' . $sortOrder . '&search=' . urlencode($searchQuery) . '"><i class="fas fa-angle-left"></i></a></li>';
            } else {
                echo '<li><span><i class="fas fa-angle-double-left"></i></span></li>';
                echo '<li><span><i class="fas fa-angle-left"></i></span></li>';
            }
            echo '<li><span>Page ' . $currentPage . '</span></li>';
            if ($currentPage < $totalPages) {
                echo '<li><a href="?page=' . ($currentPage + 1) . '&sort=' . $sortColumn . '&order=' . $sortOrder . '&search=' . urlencode($searchQuery) . '"><i class="fas fa-angle-right"></i></a></li>';
                echo '<li><a href="?page=' . $totalPages . '&sort=' . $sortColumn . '&order=' . $sortOrder . '&search=' . urlencode($searchQuery) . '"><i class="fas fa-angle-double-right"></i></a></li>';
            } else {
                echo '<li><span><i class="fas fa-angle-right"></i></span></li>';
                echo '<li><span><i class="fas fa-angle-double-right"></i></span></li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No data found in the table.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hindamine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="Hindaja_nimi" class="form-label">Hindaja nimi:</label>
                            <input type="text" class="form-control" id="Hindaja_nimi" name="Hindaja_nimi">
                        </div>
                        <div class="mb-3">
                            <label for="Kommentaar" class="form-label">Kommentaar:</label>
                            <textarea class="form-control" id="Kommentaar" name="Kommentaar"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hinnang:</label>
                            <div class="rating">
                                <input type="radio" name="Hinnang" id="star10" value="5">
                                <label for="star10"></label>
                                <input type="radio" name="Hinnang" id="star9" value="5">
                                <label for="star9"></label>
                                <input type="radio" name="Hinnang" id="star8" value="5">
                                <label for="star8"></label>
                                <input type="radio" name="Hinnang" id="star7" value="5">
                                <label for="star7"></label>
                                <input type="radio" name="Hinnang" id="star6" value="5">
                                <label for="star6"></label>
                                <input type="radio" name="Hinnang" id="star5" value="5">
                                <label for="star5"></label>
                                <input type="radio" name="Hinnang" id="star4" value="4">
                                <label for="star4"></label>
                                <input type="radio" name="Hinnang" id="star3" value="3">
                                <label for="star3"></label>
                                <input type="radio" name="Hinnang" id="star2" value="2">
                                <label for="star2"></label>
                                <input type="radio" name="Hinnang" id="star1" value="1">
                                <label for="star1"></label>
                            </div>
                        </div>
                    </form>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">< Tagasi</button>
                    <button type="button" class="btn btn-success">Saada!</button>
                </div>
                <div id="tabel2Data"></div>
            </div>
        </div>
    </div>

    <script>
        const ratingStars = document.querySelectorAll('.rating input');
        ratingStars.forEach(star => {
            star.addEventListener('change', () => {
                const selectedRating = star.value;
                console.log('Selected Rating:', selectedRating);
            });
        });
    </script>
    <script>
        // Fetch the data from "tabel2" table
        fetch('get_tabel2_data.php')
            .then(response => response.json())
            .then(data => {
                const tabel2DataDiv = document.getElementById('tabel2Data');
                let html = '<h4>Teiste hinnangud</h4>';
                html += '<table class="table">';
                html += '<thead><tr><th>Nimi</th><th>Kommentaar</th><th>Hinnang</th></tr></thead>';
                html += '<tbody>';
                data.forEach(row => {
                    html += '<tr>';
                    html += '<td>' + row.hindaja_nimi + '</td>';
                    html += '<td>' + row.kommentaar + '</td>';
                    html += '<td>' + row.hinnang + '</td>';
                    html += '</tr>';
                });
                html += '</tbody>';
                html += '</table>';
                tabel2DataDiv.innerHTML = html;
            })
            .catch(error => console.error('Error:', error));
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
