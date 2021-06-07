<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$telephone = $_POST["telephone"];
$gender = $_POST["gender"];
$role = $_POST["role"];
$nationality = $_POST["nationality"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpass = $_POST['cpassword'];
require "./../connection.php";
if ($password == $cpass) {
    echo "Passwords do not match";
} else {
    try {
        $hash = hash("SHA512", $password);
        $sqlInsert = "INSERT INTO stk_users(firstName, lastName, telephone, gender, roleId, nationality, username, email, passwd) VALUES('$firstName','$lastName', '$telephone', '$gender', '$role', '$nationality', '$username', '$email', '$hash')";
        $connection->exec($sqlInsert);
    } catch (PDOException $e) {
        echo $sqlInsert . "<br>" . $e->getMessage();
    }
}
