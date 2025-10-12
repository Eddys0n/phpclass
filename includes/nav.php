
<?php
$isMagic8Ball = $_SERVER['REQUEST_URI'] == '/magic-8ball' ? 'selected' : '';
$isMovieList = $_SERVER['REQUEST_URI'] == '/movielist/' ? 'selected' : '';
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
</ul>
