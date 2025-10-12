
<?php
if (!empty($_GET["firstname"]) && !empty($_GET["lastname"])&& !empty($_GET["address"])&& !empty($_GET["city"])&&
    !empty($_GET["state"])&& !empty($_GET["zip"])&& !empty($_GET["phone"])&& !empty($_GET["email"])&&
    !empty($_GET["password"])){

    include  "../includes/db.php";
    $con = getDBConnection();

    $firstName = $_GET["firstname"];
    $lastName = $_GET["lastname"];
    $address = $_GET["address"];
    $city = $_GET["city"];
    $state = $_GET["state"];
    $zip = $_GET["zip"];
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $password = $_GET["password"];


    try {
        $query = 'INSERT INTO customerlisting (firstname, lastname, address, city, state, zip, phone, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);';
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "sssssiiss", $firstName, $lastName, $address,$city, $state, $zip, $phone, $email, $password);
        mysqli_stmt_execute($stmt);

        header("Location:index.php");
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
    <form method="GET">
        <div class="grid-container">
            <div class="grid-header">
                <h3>Add new customer:</h3>
            </div>
            <div class="first-name">
                <label for="firstname">First Name</label>
            </div>
            <div class="firstname-input">
                <input type="text" name="firstname" id="firstname">
            </div>

            <div class="last-name">
                <label for="lastname">Last Name</label>
            </div>
            <div class="lastname-input">
                <input type="text" name="lastname" id="lastname">
            </div>

            <div class="address">
                <label for="address">Address</label>
            </div>
            <div class="address-input">
                <input type="text" name="address" id="address">
            </div>

            <div class="city">
                <label for="city">City</label>
            </div>
            <div class="city-input">
                <input type="text" name="city" id="city">
            </div>

            <div class="state-title">
                <label for="state">State</label>
            </div>
            <div class="state-input">
                <input type="text" name="state" id="state">
            </div>

            <div class="zip">
                <label for="zip">Zip</label>
            </div>
            <div class="zip-input">
                <input type="text" name="zip" id="zip">
            </div>

            <div class="phone">
                <label for="phone">Phone</label>
            </div>
            <div class="phone-input">
                <input type="text" name="phone" id="phone">
            </div>

            <div class="email">
                <label for="email">Email</label>
            </div>
            <div class="email-input">
                <input type="text" name="email" id="email">
            </div>

            <div class="password">
                <label for="password">Password</label>
            </div>
            <div class="password-input">
                <input type="password" name="password" id="password">
            </div>

            <div class="grid-footer">
                <input type="submit" value="Add Customer">
            </div>

        </div>
    </form>
</main>
<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</body>
</html>
