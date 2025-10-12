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
        table{
            border: 1px solid black;
            width: 80%;
            margin: 10px auto;
        }
        th, td{
            border: 1px solid black;
            padding: 2rem;
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
    <h2>My Movie List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php

        include "../includes/db.php";
        $con = getDBConnection();
        $result = mysqli_query($con,"SELECT * FROM customerlisting");

        while ($row = mysqli_fetch_array($result)){

            $customerID = $row["CustomerID"];
            $firstName = $row["FirstName"];
            $lastName = $row["LastName"];
            $address = $row["Address"];
            $city = $row["City"];
            $state = $row["State"];
            $zip = $row["Zip"];
            $phone = $row["Phone"];
            $email = $row["Email"];
            $password = $row["password"];

            echo "<tr>";
            echo "    <td>$customerID</td>";
            echo "    <td>$firstName</td>";
            echo "    <td>$lastName</td>";
            echo "    <td>$address</td>";
            echo "    <td>$city</td>";
            echo "    <td>$state</td>";
            echo "    <td>$zip</td>";
            echo "    <td>$phone</td>";
            echo "    <td>$email</td>";
            echo "    <td>password</td>";
            echo "</tr>";
        }

        ?>
    </table>
    <a href="addcustomer.php">Add a new movie</a>
</main>
<footer>
    <?php include '../includes/footer.php'; ?>
</footer>

</body>
</html>
