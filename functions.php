<?
date_default_timezone_set( 'Europe/Bucharest' );
function greetings(){

    $ora = date('H:i');
    if($ora >= '00:00' && $ora < '06:00')
        echo "Noapte buna";
    else if($ora >= '06:00' && $ora < '12:00')
        echo "Buna dimineata";
    else if($ora >= '12:00' && $ora < '18:00')
        echo "Buna ziua";
    else if($ora >= '18:00' && $ora < '00:00')
        echo "Buna seara";
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'Crabii';
$DATABASE_PASS = 'Crabii@2023';
$DATABASE_NAME = 'Accounts';
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>