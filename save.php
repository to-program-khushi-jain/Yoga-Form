<?php

$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "yoga";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}


//start
// Check if form data is set and not empty before processing
if (
    isset($_POST['fullName'], $_POST['email'], $_POST['phoneNumber'], $_POST['age'], $_POST['batch'])
    && !empty($_POST['fullName'])
    && !empty($_POST['email'])
    && !empty($_POST['phoneNumber'])

    && !empty($_POST['age'])
    && !empty($_POST['batch'])
) {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];

    $age = $_POST['age'];
    $batch = $_POST['batch'];

    // SQL query (assuming your table name is 'registrations')
    $sql = "INSERT INTO register (fullName, email, phoneNumber, age, batch) 
            VALUES ('$fullName', '$email', '$phoneNumber', '$age', '$batch')";

    // Execute the query
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data submitted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
