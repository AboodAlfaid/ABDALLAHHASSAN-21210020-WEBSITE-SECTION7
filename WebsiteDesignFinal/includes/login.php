<?php
if(isset($_POST['submit']))
{
    require_once "../DB/AccountController.php";
    $AccController = new AccountController;
    $username =$_POST['Username'];
    $password=$_POST['Password'];

    if (empty($username) || empty($password)) {
        echo"true";
        die();
    } else {
        $result = false;
        echo"false";
    }
    echo"here";
    $row= $AccController->login_user($username,$password);     
    if ($password == $row[0]['Password']) {
       session_start();
       $_SESSION['Username'] = $row[0]['Username'];
       $_SESSION['UserID'] = $row[0]['UserID'];
       $_SESSION['Subscription'] = $row[0]['Subscription'];
       header("location: ../FinalDeliverable.php");
       exit();
    }
    echo"error";
}