<?php
// session_start();
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
$firstname = $_POST["fname"];
$surname = $_POST["sname"];
$email = $_POST["email"];
$password = $_POST["pwd"];
//regex etc, special characters need to be added later
$regexName = "/^[a-zA-Z\s`\']+$/";
$regexSurname = "/^[a-zA-Z\s\']+$/";
$regexMail = "/^[a-zA-Z\d\s\._]+@[a-zA-Z\d\s\._]+.[a-zA-Z\-\d]+$/";
$regexPassword = "/^[a-zA-Z\d\s\.\-_`\']+$/";
// Throw an error if forbidden characters are used
if($firstname != preg_match($regexName)){
    echo ("Your first name contains characters that are not allowed" . "<br>");
    die;
}
if($surname != preg_match($regexSurname)){
    echo ("Your surname contains characters that are not allowed" . "<br>");
    die;
}
if($email != preg_match($regexMail)){
    echo ("Your email contains characters that are not allowed" . "<br>");
    die;
}
if($password != preg_match($regexPassword)){
    echo ("Your password contains characters that are not allowed" . "<br>");
    die;
}
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