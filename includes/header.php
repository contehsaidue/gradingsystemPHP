<?php
session_start();
include './controller/Controller.php';


// User login data capture

if (isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$loginQuery = $Controller->userLogin($username, $password);
  
if($loginQuery){  
    $_SESSION['status'] = "Welcome back online!";
    $_SESSION['type'] = "success";

  }else{
    $_SESSION['status'] = "Last login attempt failed!";
    $_SESSION['type'] = "error";

 }

}

?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Njala Grading System - NU</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="assets/css/owl.carousel.min.css" rel="stylesheet">

        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

        <link href="assets/css/nugradingsys.css" rel="stylesheet">

    </head>
    
    <body id="top">
    
        <main>