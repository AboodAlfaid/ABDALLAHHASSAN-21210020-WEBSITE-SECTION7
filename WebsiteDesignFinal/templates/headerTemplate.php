<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
</head>
<body>

<header class="book-shelf">
    <h1>EasyBook</h1>
    <nav>
        <ul>
            <li><a href="index.php">Best Sellers</a></li>
            <li><a href="index.php">About Us</a></li>
            <li><a href="index.php">Contact</a></li>
            <li><a href="index.php">Subscription</a></li>
        </ul>
    </nav>
    <form action="#" method="post">
        <input type="text" name="search" placeholder="Search" />
        <input type="submit" value="Search" />
    </form>
    <?php
    if (!isset($_SESSION['Username'])) {
    ?>
        <button onclick="window.location.href='login.php'"><i class="material-icons">person</i></button>
    <?php
    } else {
    ?>
        <p><?php echo $_SESSION['Username']?></p>
        <button onclick="window.location.href='includes/logout.php'">Logout</button>
    <?php
    }
    ?>
</header>
</body>
</html>
