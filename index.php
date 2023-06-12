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
                        <a class="nav-link btn btn-success" href="login.php">Login</a>
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
            echo '<button type="submit" class="btn btn-warning">Search</button>';
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>