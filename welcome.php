<?php

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header('location:'.$session_name.'.html');

    exit;
}

// disconnect after 30 min
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 17)) {
    header("Location: logout_".$session_name.".php");
}


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href=<?php echo "logout_".$session_name.".php";?> class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>