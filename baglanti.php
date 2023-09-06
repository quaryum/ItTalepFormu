<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	 <?php
	/* Example (MySQLi Object-oriented) test edildi çalıştı https://www.youtube.com/watch?v=lWu33V3Cork 
$servername = "192.168.0.54";
$username = "quaryum";
$password = "qwE1234--";
$dbname = "calisma";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO haber (ad, soyad, mail)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

*/

	
	
	/* Example (MySQLi Procedural) çalıştı 
	
$servername = "192.168.0.54";
$username = "quaryum";
$password = "qwE1234--";
$dbname = "calisma";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO haber (ad, soyad, mail)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();	

*/
	
	
	/* PDO bağlantı şekli 
$servername = "192.168.0.54";
$username = "quaryum";
$password = "qwE1234--";
$dbname = "calisma";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO haber (ad, soyad, mail)
  VALUES ('John', 'Doe', 'john@example.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
*/

	
$servername = "192.168.0.54";
$username = "quaryum";
$password = "qwE1234--";
$dbname = "calisma";

try {
  $conn=new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$sql = "INSERT INTO haber (Talep_turu, Talep_tarihi, Talep_departmani)
  //VALUES ('IT talep formu', '2023-06-12 16:20:12', 'bilgi işlem')";
  // use exec() because no results are returned
  //$conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $e->getMessage();
}

//$conn = null;	


	
	
	/* Çalışan şekilde yedek
$servername = "192.168.0.54";
$username = "quaryum";
$password = "qwE1234--";
$dbname = "calisma";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO haber (ad, soyad, mail)
  VALUES ('John', 'Doe', 'john@example.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;	
	
	*/
	
?>
	
</body>
</html>