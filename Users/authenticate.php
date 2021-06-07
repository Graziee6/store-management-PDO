<?php 
session_start();
// if(!$_SESSION['userId']){
//     header("Location:login.php");
//  }
include("../connection.php");
$username = trim($_POST['username']);
$user_password = trim($_POST['password']);
if( ($username =="") || ($user_password =="") ){
echo  "Username and Password are required";
}else{
$hash=hash("SHA512",$user_password);
$userId=$currentPassword=$roleName=$roleId="";
$query=$connection->query("SELECT * FROM stk_users where username='$username'");
foreach($query as $row){
    $currentPassword=$row["passwd"];
    $userId=$row["userId"];
    $roleId=$row["roleId"];   
}
$roleQuery=$connection->query("SELECT role FROM roles where roleId='$roleId' ");
foreach( $roleQuery as $rolesResult){
    $roleName=$rolesResult["role"];
}
if(!mysqli_num_rows($query)){
    echo "Invalid username or password";
}
if($hash!=$currentPassword){
   echo "Invalid username or password";
}
else{
    $_SESSION['userId']=$userId;
    $_SESSION['roleName']=$roleName;
    $_SESSION["roleId"]=$roleId;
    header("Location:./../home.php");
}
}
?>