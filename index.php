<?php
session_start();
// $id = $_GET['id'];
switch($_GET['page']){
	case 1: include 'home.php';break;
	default:include 'home.php';break;
	case 2: include 'search.php';break;
	case 3: include 'innerpage.php';break;
}