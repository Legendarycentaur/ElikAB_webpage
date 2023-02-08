<?php session_start();
include "db_connect.php";
if (isset($_POST['uname'])&&isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = validate($_POST['uname']);
$password = validate($_POST['password']);

if(empty($uname)){
    header("Location: logInPage.html?erro=Username is required");
    exit();
}
else if(empty($password)){
    header("Location: logInPage.html?error=Password is required");
    exit();
}

$sql = "SELECT * FROM users where User_name='$uname' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysql_num_rows($result)===1){
    $row = mysql_fetch_assoc($result);
    if($row['user_name'])
}