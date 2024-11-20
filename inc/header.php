<?php
include('../config.php');
include('checkin.php');
checkin();

$page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');
$pageName = ucwords($page_name);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Silaris Electic Stock Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="icon" type="image/gif" href="../assets/img/fevicon.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  	<link rel="stylesheet" href="../assets/css/bootstrap.css">
  	<script src="../assets/js/jquery.js"></script>
  	
</head>
<body>