<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
/*
Maken een class voor de post data, en t object bevat dan de post data ($this->username = $_POST['username']).
Vervolgens doen de methods de data valideren (kan in meerdere stappen, bijv whitespace trimmen, RegEx, special chars weghalen etc)
*/




/*
if(!isset($_POST['submit'])){
    header('Location: C:\xampp\htdocs\FamilyPlanner\WEB\FamilyPlannerWeb\Pages\register.php);
    die;
}
protected username
protected email
protected password
protected repeatPassword

$UserNamePost = $_POST['username]
__construct($UserNamePost){
    $this->username = $UserNamePost;
}

*/
if(!isset($_POST['submit'])){
    header('Location: C:\xampp\htdocs\FamilyPlanner\WEB\FamilyPlannerWeb\Pages\register.php');
    die;
}
else
{
$_SESSION['submit'] = $_POST['submit'];
$firstname = $_POST["fname"];
$surname = $_POST["sname"];
$email = $_POST["email"];
$password = $_POST["pwd"];
var_dump($firstname, $surname, $email, $password);
echo "<br>";
//regex etc, special characters need to be added later
$regexName = "/^[a-zA-Z\s\']+$/"; 
$regexMail = "/^[a-zA-Z\d\s\._]+@[a-zA-Z\d\s\._]+.[a-zA-Z\-\d]+$/";
$regexPassword = "/^[a-zA-Z\d\s\.\-_\']+$/";
// Throw an error if forbidden characters are used
echo "<br>";
if(!preg_match($regexName, $firstname)){
   $_SESSION['fErr'] = 1;
   header('Location: C:\xampp\htdocs\FamilyPlanner\WEB\FamilyPlannerWeb\Pages\register.php');
   die;
}
echo "<br>";
if(!preg_match($regexName, $surname)){
    echo (ErrorMessage::$snameErr . "<br>");
    $_SESSION['snameErr'] = 1;
    header('Location: C:\xampp\htdocs\FamilyPlanner\WEB\FamilyPlannerWeb\Pages\register.php');
    die;
}
echo "<br>";
if(!preg_match($regexMail, $email)){
    echo (ErrorMessage::$mailErr . "<br>");
    $_SESSION['mailErr'] = 1;
    header('Location: C:\xampp\htdocs\FamilyPlanner\WEB\FamilyPlannerWeb\Pages\register.php');
    die;
}
echo "<br>";
if(!preg_match($regexPassword, $password)){
    echo (ErrorMessage::$pwdErr . "<br>");
    $_SESSION['pwdErr'] = 1;
    header('Location: C:\xampp\htdocs\FamilyPlanner\WEB\FamilyPlannerWeb\Pages\register.php');
    die;
}
echo "<br>";
//remove special html characters
$firstname = htmlspecialchars($firstname);
$surname = htmlspecialchars($surname);
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);
//$this->password = password_hash($password,PASSWORD_BCRYPT);
$password = password_hash($password,PASSWORD_BCRYPT);
var_dump($firstname, $surname, $email, $password);
/*
include_once"database.php";
$conn of $sql = "INSERT INTO 'users' (variabelen) values (variabelen)
*/
}
?>