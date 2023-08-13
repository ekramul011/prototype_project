<?php
//session_start();
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="./assets/css/all.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Prototype Project</a>
        <ul class="navbar-nav">
            <li><a class="nav-link" href="action.php?page=home">Home</a></li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">Product Category</a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category) { ?>
                    <li><a href="action.php?page=category&id=<?php echo $category['id']; ?>" class="dropdown-item"><?php echo $category['name']; ?></a></li>
                    <?php } ?>
                </ul>
            </li>
<!--            --><?php //if (empty($_SESSION['id'])) { ?>

            <?php if (isset($_SESSION['id'])) { ?>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href=""><?php echo $_SESSION['name']; ?></a>
                <ul class="dropdown-menu">
                    <li><a href="action.php?page=dashboard" class="dropdown-item">Dashboard</a></li>
                    <li><a href="action.php?page=logout" class="dropdown-item">Logout</a></li>
                </ul>
            </li>

                <li><a class="nav-link" href="action.php?page=full_name">Full Name</a></li>
                <li><a class="nav-link" href="action.php?page=calculator">Calculator</a></li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">Series</a>
                    <ul class="dropdown-menu">
                        <li><a href="action.php?page=series_one" class="dropdown-item" name="series_one">Series One</a></li>
                        <li><a href="action.php?page=series_two" class="dropdown-item">Series Two</a></li>
                        <li><a href="action.php?page=series_three" class="dropdown-item">Series Three</a></li>
                    </ul>
                </li>
            <?php } else { ?>

<!--            --><?php //} ?>
<!--            --><?php //if (isset($_SESSION['id'])) { ?>
            <li><a class="nav-link" href="action.php?page=login">Login</a></li>
            <?php } ?>


<!--            --><?php //} ?>
        </ul>
    </div>
</nav>