<!DOCTYPE html>
<html>

<head>
    <title>You're signed in!</title>
    <link rel="stylesheet" href="../css/style.css" media="all">
</head>

<body>
    <div class="topbar"></div>
    <div class="container">
        <div class="navbar">
            <div class="item"><a href="/loginsystem/">Home</a></div>
            <div class="item"><a href="/loginsystem/register/">Register</a></div>
            <?php if (!isset($_SESSION['username'])): ?>
            <div class="item"><a href="/loginsystem/login/">Login</a></div>
            <?php else: ?>
            <div class="item"><a href="../logout.php">Logout</a></div>
            <?php endif?>
        </div>
        <div id="div_login">
            <h1>You're signed in!</h1>
            <div>
                <p>You have successfully signed in.</p>
                <p>To log out, click on the 'log out' button at the top right.</p>
            </div>
        </div>