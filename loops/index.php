<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edison's Website</title>
    <link rel="stylesheet" type="text/css" href="/css/base.css">
</head>
<body>
<header>
    <?php include '../includes/header.php'; ?>
</header>
<nav>
    <?php include '../includes/nav.php'; ?>
</nav>
<main>
    <?php
    $num1 = "<h3>";
    $num1 .= 100;
    $num1 .= "</h3>";

    echo $num1;

    $i = 1;

    while($i<7){
        echo "<h$i>Hello World</h$i>";
        $i++;
    }

    $i = 6;

    while($i>0){
        echo "<h$i>Hello World</h$i>";
        $i--;
    }

    ?>
</main>
<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</body>
</html>
