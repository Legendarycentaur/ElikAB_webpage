 
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "elikab.se.mysql:3306";
$username = "elikab_seelikab";
$password = "1234567890";
$dbname = "elikab_seelikab";
$uname=$_POST['username'];
$passw=$_POST['password'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, user_name, password FROM users");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  echo $result;
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
     echo $v; 
  }
  
  echo $stmt->fetchAll();
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
echo"<p>$uname</p>";
?>



<!--echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";


/*class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}*/
/*
$servername = "elikab.se.mysql:3306";
$username = "elikab_seelikab";
$password = "1234567890";
$dbname = "elikab_seelikab";
$uname=$_POST['username'];
$passw=$_POST['password'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
  
  catch(PDOException $e) {
  echo "Database Error: " . $e->getMessage();
  exit();
}

$sql = "SELECT id, user_name, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["user_name"]. " " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

*/

/*//Get the id;
 $id = 1;
 $sql = "SELECT user_name, password FROM users WHERE id = :id";
 $result=$conn->query($sql);
 
 if (!$result) {
    die("Query failed: " . $mysqli->error);
}

// Fetch the result and store the columns in separate variables
while ($row = $result->fetch_assoc()) {
    $column1 = $row["user_name"];
    $column2 = $row["password"];}
    

//Get the user name


// Prepare statement
$stmt = $conn->prepare($sql);

// Bind parameter
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Execute statement
$stmt->execute();

// Fetch result
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// Store value in variable
$variable_uname = $row['user_name'];
echo $variable_uname;


//Get the Password
 $sql = "SELECT password FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Execute statement
$stmt->execute();

// Fetch result
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// Store value in variable
$variable_password = $row['password'];
echo $variable_password;

  
  
  /*$stmt = $conn->prepare("SELECT id,user_name , password FROM users WHERE user_name='$uname' AND password='$passw'");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
  //$user_password= $stmt->fetchall();
  $results = mysqli_query($conn, $sql);

// Fetch result
$row = mysqli_fetch_assoc($results);

// Store value in variable
$variable = $row['user_name'];
 
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }*/

//$conn = null;
//echo "</table>";



/*$servername = "elikab.se.mysql:3306";
$username = "elikab_seelikab";
$password = "1234567890";


try {
    $conn = new PDO("mysql:host=$servername;dbname=elikab_seelikab", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT id, user_name, password FROM users";
    echo "Connected successfully";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

*/-->



