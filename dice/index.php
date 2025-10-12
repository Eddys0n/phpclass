<?php
//$randomIndex = mt_rand(0,count($responses)-1);

$randomDice1 = mt_rand(1,6);
$randomDice2 = mt_rand(1,6);
$randomDice3 = mt_rand(1,6);
$randomDice4 = mt_rand(1,6);
$randomDice5 = mt_rand(1,6);
$your = $randomDice1 + $randomDice2;
$computer = $randomDice3 +$randomDice4 +$randomDice5;
$win = "";
if ($your < $computer){
    $win = "Computer Wins";
}
else if ($your > $computer){
    $win = "You Win";
}
else  {
    $win = "Ties";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edison's Website</title>
    <link rel="stylesheet" type="text/css" href="/css/base.css">
    <style>
    .Container{
        display: flex;
    }
    </style>
</head>
<body>
<header>
    <?php include '../includes/header.php'; ?>
</header>
<nav>
    <?php include '../includes/nav.php'; ?>
</nav>
<main>
    <h1>DICE GAME</h1>

    <h2>Your Score <?= $your?></h2>
    <div class="Container">
    <img src="../images/dice_<?= $randomDice1?>.png" alt="dice">
    <img src="../images/dice_<?= $randomDice2?>.png" alt="dice">
    </div>
    <h2>Computer Score <?= $computer?></h2>
    <div class="Container">
    <img src="../images/dice_<?= $randomDice3?>.png" alt="dice">
    <img src="../images/dice_<?= $randomDice4?>.png" alt="dice">
    <img src="../images/dice_<?= $randomDice5?>.png" alt="dice">
    </div>
    <p class="answer">Result:  <?= $win?>

</main>
<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</body>
</html>
