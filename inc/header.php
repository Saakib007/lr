<?php
$filepath= realpath(dirname(__FILE__));
include_once $filepath.'/../lib/Session.php';
Session::init();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
</head>

<?php
    if (isset($_GET['action']) && $_GET['action'] == "logout") {
        Session::destroy();
    }
?>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Login Register System</a>
                </div>
                <ul class="nav navbar-nav pull-right">
                    
                    <?php
                    $id = Session::get("id");
                    $userlogin=Session::get("login");
                    if ($userlogin==true) {

                    ?>
                    <tr>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="profile.php?id=<?php echo $id;?>">Profile</a></li>
                    <li><a href="?action=logout">Logout</a></li>
                    <?php }else{?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    </tr>
                    <?php } ?>
                </ul>
            </div>
        </nav>