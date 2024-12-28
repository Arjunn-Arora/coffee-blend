<?php

require "../includes/header.php";
require "../config.php";

if(!isset($_SESSION['user_id'])){
	header("location: ".APPURL." ");
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete = $conn->query("DELETE FROM cart WHERE id = '$id' ");
    $delete->execute();

    header("location: cart.php");
}

?>