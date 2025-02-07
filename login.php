<?php
// Check if the user is already logged in
if (isset($_COOKIE['loggedIn']) && $_COOKIE['loggedIn'] === 'true') {
    header('Location: admin.php');
    exit;
}

// Define the valid username and password
$validUsername = 'admin';
$validPassword = 'parool';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the submitted credentials
    if ($username === $validUsername && $password === $validPassword) {
        // Set the logged in cookie
        setcookie('loggedIn', 'true', time() + 3600); // 1 hour expiration time
        header('Location: admin.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'poppins', sans-serif;
        }
        section{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url('https://w0.peakpx.com/wallpaper/152/14/HD-wallpaper-smile-seal-moustaches-funny-smile-tulle.jpg') no-repeat;
            background-position: center;
            background-size: cover;
        }
        .form-box{
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2{
            font-size: 2em;
            color: #fff;
            text-align: center;
        }
        .inputbox{
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #fff;
        }
        .inputbox label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }
        input:focus ~ label,
        input:valid ~ label{
            top: -5px;
        }
        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
        }
        .inputbox ion-icon{
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }
        button{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }
    </style>
</head>
<body>
<section>
    <div class="form-box">
        <div class="form-value">
            <form method="post" action="">
                <h2>Login</h2>
                <?php if (isset($error)) { ?>
                    <p><?php echo $error; ?></p>
                <?php } ?>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="username" id="username" placeholder="admin" required>
                    <label for="username">Username (admin)</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" id="password" placeholder="parool" required>
                    <label for="password">Password (parool)</label>
                </div>
                <button type="submit">Log in</button>
            </form>
        </div>
    </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
