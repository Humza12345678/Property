<?php
include 'head.php';
?>
<br>
<button onclick="javascript:window.location='user-edit.php'">Go Back</button>
<?php
$userid = $_REQUEST['userid'];
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['c-password'];
$email = $_REQUEST['email'];
$active = $_REQUEST['active'];
$delete = $_REQUEST['delete'];
if ($password !== $cpassword) {
    die("Password doesnt matches ,Try again to continue ");
    
}

$conn = new mysqli('localhost','root','','property');
if($conn->connect_error){
    die ('Connection Failed! Try again');
}
else{
    $stmt = $conn -> prepare("insert into users(user_id,name,password,email,active,deleted) values(?,?,?,?,?,?)");
    $stmt->bind_param("isssss",$userid,$name,$password,$email,$active,$delete);
    $stmt -> execute();
    echo ('Changes saved');
    $stmt->close();
    $conn->close();
}   
?>
<?php
include 'footer.php';
?>