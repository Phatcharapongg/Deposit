<?PHP 
ob_start();
date_default_timezone_set("Asia/Bangkok");


$_SESSION['uri'] = 'http://localhost';
$path = 'deposit';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deposit";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}

?>