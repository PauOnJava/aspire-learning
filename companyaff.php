<?
include("includes/functions.php");
$nume = $_REQUEST['nume_companie'];
$judet = $_REQUEST['judet'];
$oras = $_REQUEST['local'];
$adresa = $_REQUEST['adresa'];
$cod_postal = $_REQUEST['cod_postal'];
$telefon = $_REQUEST['telefon'];
$dateAndTime = date("Y-m-d H:i:s");
$sql = "SELECT * FROM comprequests WHERE nume_companie = '$nume'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    header('Location: affiliate-signup.php?affcomp=1&already=1');
} 
else{
$sql = "INSERT INTO comprequests (nume_companie, judet, oras, adresa, cod_postal, telefon, request_since) VALUES ('$nume', '$judet', '$oras', '$adresa', '$cod_postal', '$telefon', '$dateAndTime');";
    if(mysqli_query($conn, $sql)){
        header('Location: affiliate-signup.php?affcomp=1&success=1');
    }else{
        echo "Am intampinat o eroare in crearea solicitarii :( "
            . mysqli_error($conn);
    }
}
?>