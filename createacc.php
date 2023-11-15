<?php
session_start();
include("includes/functions.php");
$nume = $_REQUEST['nume'];
$prenume = $_REQUEST['prenume'];
$email = $_REQUEST['email'];
$options = ['cost' => 8];
$password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT, $options);

$sql = "SELECT * FROM account WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header('Location: signup.php?already=1');
} 
 else{
    $timestamp = time();
    $dateAndTime = date("Y-m-d H:i:s", $timestamp);
    $sql = "INSERT INTO account (email, password, nume, prenume,register_date) VALUES ('$email', '$password', '$nume', '$prenume','$dateAndTime');";
    if(mysqli_query($conn, $sql)){
        header('Location: index.php');
    } else{
        echo "Am intampinat o eroare in crearea contului :( "
            . mysqli_error($conn);
    }}
	$conn->close();
?>