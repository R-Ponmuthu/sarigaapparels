<?php

// class DatabaseConnect {

	// Host Name
$dbhost = "68.183.82.22";

// Database Name
$dbname = 'sarigaapparels';

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = '';

// private $pdo = null;

// public function getPdo(){
//                return $this->pdo;
//                         }

//   public function __construct(){
//               try {
//                    $this->pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass );

//                   // $this->pdo = new PDO("mysql:host='.$dbhost.';dbname={$dbname}", $dbuser, $dbpass);
// 				  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//               }
//               catch(PDOException $e) {
//                   echo 'Połączenie nie mogło zostać utworzone.<br />';
//               }
//           }

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}

// }

 ?>



