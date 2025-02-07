<?php
// Check if the user is logged in
if (!isset($_COOKIE['loggedIn']) || $_COOKIE['loggedIn'] !== 'true') {
    header('Location: login.php');
    exit;
}

// Logout logic
if (isset($_GET['logout'])) {
    setcookie('loggedIn', '', time() - 3600); // Expire the cookie
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <p>You are logged in.</p>
    <a href="?logout=true">Logout</a>
</body>
</html>
