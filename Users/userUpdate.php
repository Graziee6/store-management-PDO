<?php
$user_Id=$_POST['user_Id'];
$firstName=$_POST["fistName"];
$lastName=$_POST["lastName"];
$gender=$_POST["gender"];
$telephone=$_POST["phone"];
$nationality=$_POST["nationality"];
$username=$_POST["username"];
$email=$_POST["email"];
$upassword=$_POST["password"];
$cpassword=$_POST["passwordConfirm"];
include './../connection.php';
  if($upassword==$cpassword){
    $sql="UPDATE  stk_users SET firstName= '$firstName',lastName= '$lastName',gender='$gender',nationality='$nationality',telephone='$telephone',email='$email',username='$username' WHERE userId='$user_Id'";
    $update=$connection->query($sql);
    if($update){
      echo "<h1> Data Updated successfully</h1>";
      echo "<a href=displayUser.php>Display</a>";
    }else{
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
  }
  else{
    echo "Passwords do not match. <a href=displayUser.php>Go back to users list</a>";
  }
?>