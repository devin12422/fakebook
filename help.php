
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Users";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} /*
$sql = "INSERT INTO Users (username, firstname, lastname, email, password)
VALUES ('devin12422', 'Devin', 'Kramer', 'kramerdevin321@gmail.com', 'pieguyking')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} */
/*
$sql = "DELETE FROM Users WHERE id=3";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
} */
?>
<?php
include 'header.php';
include'/main.css';
?>
<!DOCTYPE html>
<html>
    <link href="https://fonts.googleapis.com/css?family=K2D|Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script type="text/javascript" src="main.js"></script>
    <head>
        <link rel="shortcut icon" href="/favicon.png" type="image/png">
        <link rel="shortcut icon" type="image/png" href="img/FIcon.png" />
        <title>Fakebook</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="topnav">
            <a class="active" href="index.php"><h3>Fakebook</h3></a>
            <ul> 
                <a href="help.php"><strong>Quick Help</strong></a>
                <a href="post.php"><strong>My Feed</strong></a>
            </ul>
            <div class="search-container">
                <form action="/search.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Search</button>
                </form>       
            </div>
        </div>
        <div style="padding-left:16px">
            <h1>Welcome to Fakebook</h1>
        </div>
    </body>
</html>
