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
        echo "<h$i>Test</h$i>";
        $i++;
    }
    $i = 6;
    while($i>0){
        echo "<h$i>Test</h$i>";
        $i--;
    }
    for ($i = 1; $i <= 6; $i++){
        echo "<h$i>test</h$i>";
    }
    for ($i = 6; $i > 1; $i--){
        echo "<h$i>test</h$i>";
    }

    $a = 100;
    $b = 50;

    //echo "<p>" . ($a+$b) . "</p>";
    $firstName = "eDiSon";
    $lastName = "meDiNa";

    //$fullName = strtolower("$firstName $lastName");
    $fullName = strtolower($firstName) .  " " . strtolower($lastName);

    //echo $fullName;
    echo strtolower($fullName);

    //var_dump(str_split($fullName));

    echo $fullName[0];

    ?>
</main>
<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</body>
</html>
