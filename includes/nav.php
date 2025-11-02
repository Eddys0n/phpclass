
<?php
$isMagic8Ball = $_SERVER['REQUEST_URI'] == '/magic-8ball' ? 'selected' : '';
$isMovieList = $_SERVER['REQUEST_URI'] == '/movielist/' ? 'selected' : '';
$isLogin = $_SERVER['REQUEST_URI'] == '/login/' ? 'selected' : '';
$customer = $_SERVER['REQUEST_URI'] == '/customerlist/' ? 'selected' : '';
$dice = $_SERVER['REQUEST_URI'] == '/dice/' ? 'selected' : '';
?>
<ul>
    <li>
        <a href="/">Homepage</a>
    </li>
    <li>
        <a href="/loops/">Loops</a>
    </li>
    <li>
        <a href="/countdown/">CountDown</a>
    </li>
    <li>
        <a href="#">Other</a>
    </li>
    <li class="<?=$isMagic8Ball?>">
        <a href="/magic-8ball">Magic 8 Ball</a>
    </li>
    <li class="<?=$isMovieList?>">
        <a href="/movielist">Movie List</a>
    </li>
    <li class="<?=$isLogin?>">
        <a href="/login">Login</a>
    </li>
    <li class="<?=$dice?>">
        <a href="/dice">Dice</a>
    </li>
    <li class="<?=$customer?>">
        <a href="/customerlist">Customer</a>
    </li>

</ul>
