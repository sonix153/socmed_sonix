<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>sonix</title>
    <link href="views/res/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="navbar">
        <?php
        if (isset($_SESSION['aid'])) {
        ?>
        <ul class=";left-list">
            <a href="timeline.php"><li>Socmed</li></a>
        </ul>            
        <ul class="right-list">
                <a href="profile.php"><li><?= $_SESSION['firstname']; ?></li></a>
                <a href="models/logout_account.php"><li>Logout</li></a>
            </ul>
        <?php } else { ?>
        <ul class="left-list">
            <a href="login.php"><li>Socmed</li></a>
        </ul>
        <ul class="right-list">
                <a href="login.php"><li>Login</li></a>
                <a href="index.php"><li>Signup</li></a>
            </ul>
        <?php } ?>
    </div>
