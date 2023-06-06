<?php
// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the submitted credentials match the hard-coded login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace 'your_username' and 'your_password' with your desired login credentials
    $hardCodedUsername = 'admin';
    $hardCodedPassword = 'admin';

    if ($username === $hardCodedUsername && $password === $hardCodedPassword) {
        // Start a session and set a flag to indicate successful login
        session_start();
        $_SESSION['logged_in'] = true;

        // Redirect the user to index.php
        header('Location: index.php');
        exit();
    } else {
        // Invalid login credentials
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="styles/stylesheet.css" rel="stylesheet">
    <style>
        .container-login {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #111111;
            border: 1px none #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #111111;
            border: 1px none #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #59005F;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .error {
            color: #f00;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container-login">
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
            <?php if (isset($error)) { ?>
                <p class="error"><?php echo $error; ?></p>
            <?php } ?>
        </form>
    </div>
</body>
</html>
