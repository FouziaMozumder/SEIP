<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "../assets/css/bootstrap.css"/>
</head>
<body>
<?php if (isset($_SESSION['id'])) { ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class = "container">
            <a href = "" class = "navbar-brand">LOGO</a>
            <ul class = "navbar-nav">
                <li><a href = "" class = "nav-link">Add Product</a></li>
                <li><a href = "" class = "nav-link">Manage Product</a></li>
                <li><a href = "" class = "nav-link">Add User</a></li>
                <li><a href = "" class = "nav-link">Manage User</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <?php echo isset($_SESSION['name'])? $_SESSION['name']: ''; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Portfolio</a></li>
                        <li><a href="action.php?status=logout" class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
<?php } ?>