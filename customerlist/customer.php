<?php

if (!isset($_GET["id"]))
{
    header("Location: /customerlist");
}
include  "../includes/db.php";
$con = getDBConnection();
$customerID = $_GET["id"];

try {
    $query = 'SELECT * FROM customerlisting WHERE CustomerID = ?';
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $customerID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result);

    $firstName = $row["FirstName"];
    $lastName = $row["LastName"];
    $address = $row["Address"];
    $city = $row["City"];
    $state = $row["State"];
    $zip = $row["Zip"];
    $phone = $row["Phone"];
    $email = $row["Email"];
    $password = $row["password"];
}
catch (mysqli_sql_exception $ex){
    echo $ex;
}
// do the update(update the db)
if (!empty($_POST["firstname"]) && !empty($_POST["lastname"])){

    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    try {
        $query = 'UPDATE customerlisting SET FirstName = ?,
                                            LastName = ?, 
                                            Address = ?,
                                            City = ?,
                                            State = ?,
                                            Zip = ?,
                                            Phone = ?,
                                            Email = ?,
                                            password = ?
                       WHERE CustomerID = ?;';
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "sssssiissi",   $firstName, $lastName, $address, $city, $state, $zip, $phone, $email, $password, $customerID );
        mysqli_stmt_execute($stmt);

        header("Location: /customerlist");
        }
    catch (mysqli_sql_exception $ex){
        echo $ex;
    }
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
        .grid-header    { grid-area: grid-header; }
        .first-name     { grid-area: first-name; }
        .firstname-input{ grid-area: firstname-input; }
        .last-name      { grid-area: last-name; }
        .lastname-input { grid-area: lastname-input; }
        .address        { grid-area: address; }
        .address-input  { grid-area: address-input; }
        .city           { grid-area: city; }
        .city-input     { grid-area: city-input; }
        .state-title    { grid-area: state-title; }
        .state-input    { grid-area: state-input; }
        .zip            { grid-area: zip; }
        .zip-input      { grid-area: zip-input; }
        .phone          { grid-area: phone; }
        .phone-input    { grid-area: phone-input; }
        .email          { grid-area: email; }
        .email-input    { grid-area: email-input; }
        .password       { grid-area: password; }
        .password-input { grid-area: password-input; }
        .grid-footer    { grid-area: grid-footer; }

        .grid-container {
            display: grid;
            grid-template-areas:
                "grid-header grid-header"
                "first-name firstname-input"
                "last-name lastname-input"
                "address address-input"
                "city city-input"
                "state-title state-input"
                "zip zip-input"
                "phone phone-input"
                "email email-input"
                "password password-input"
                "grid-footer grid-footer"
        ;
            border: 1px solid black;
        }
        .grid-container > div {
            border: 1px solid black;
            text-align: center;
        }
        .grid-container input[type="text"]{
            width: 98%;
            margin: 0 2px;
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
    <form method="post">
        <div class="grid-container">
            <div class="grid-header">
                <h3>Add new customer:</h3>
            </div>
            <div class="first-name">
                <label for="firstname">First Name</label>
            </div>
            <div class="firstname-input">
                <input type="text" name="firstname" id="firstname" value="<?=$firstName;?>">
            </div>

            <div class="last-name">
                <label for="lastname">Last Name</label>
            </div>
            <div class="lastname-input">
                <input type="text" name="lastname" id="lastname" value="<?=$lastName;?>">
            </div>

            <div class="address">
                <label for="address">Address</label>
            </div>
            <div class="address-input">
                <input type="text" name="address" id="address" value="<?=$address;?>">
            </div>

            <div class="city">
                <label for="city">City</label>
            </div>
            <div class="city-input">
                <input type="text" name="city" id="city" value="<?=$city;?>">
            </div>

            <div class="state-title">
                <label for="state">State</label>
            </div>
            <div class="state-input">
                <input type="text" name="state" id="state" value="<?=$state;?>">
            </div>

            <div class="zip">
                <label for="zip">Zip</label>
            </div>
            <div class="zip-input">
                <input type="text" name="zip" id="zip" value="<?=$zip;?>">
            </div>

            <div class="phone">
                <label for="phone">Phone</label>
            </div>
            <div class="phone-input">
                <input type="text" name="phone" id="phone" value="<?=$phone;?>">
            </div>

            <div class="email">
                <label for="email">Email</label>
            </div>
            <div class="email-input">
                <input type="text" name="email" id="email" value="<?=$email;?>">
            </div>

            <div class="password">
                <label for="password">Password</label>
            </div>
            <div class="password-input">
                <input type="password" name="password" id="password" value="<?=$password;?>">
            </div>

            <div class="grid-footer">
                <input type="submit" value="Update Customer">
                <input type="button" value="Delete Customer" id="delete">
            </div>

        </div>
    </form>
</main>
<footer>
    <?php include '../includes/footer.php'; ?>
</footer>
<script>
    const deleteButton = document.querySelector('#delete')
    deleteButton.addEventListener('click', ()=>{
        window.location = `./delete.php?id=<?=$customerID?>`
    })
</script>
</body>
</html>
