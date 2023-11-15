<?php
session_start();

include("includes/functions.php");

$email = $conn->real_escape_string($_POST['email']);

$stmt = $conn->prepare("SELECT nume, prenume, password, email FROM account WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($_POST['password'], $row['password'])) {
        session_regenerate_id();
        $_SESSION['loggedin'] = true;
        $_SESSION['nume'] = $row['nume'];
        $_SESSION['prenume'] = $row['prenume'];
        $_SESSION['email'] = $row['email'];
        header('Location: index.php');
        exit();
    } else {
         header('Location: login.php?errorwrong=1');
        exit();

    }
} else {
    header('Location: login.php?errorunknown=1');
    exit();
}

$stmt->close();
$conn->close();
?>
