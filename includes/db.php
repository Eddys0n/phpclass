<?php
function getDBConnection()
{
    return$con = mysqli_connect("localhost", "dbuser", "dbdev123", "phpclass");
}

