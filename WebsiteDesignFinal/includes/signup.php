<?php

if(isset($_POST['Username'])){
    require_once "../DB/AccountController.php";
    $AccController = new AccountController;
    $Username= $_POST['Username'];
    $Password= $_POST['Password'];
    $Subscription= $_POST['Subscription'];
    if($AccController->addUser($Username,$Subscription,$Password) != NULL){
        header("../login.php");
    }
    else{
        echo "error";
    }
}