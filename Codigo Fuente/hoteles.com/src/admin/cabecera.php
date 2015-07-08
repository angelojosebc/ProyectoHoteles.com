<?php
    session_start();
    if (!$_SESSION['id_admin']) header('Location:entrada.php');
    else $id = $_SESSION['id_admin'];
	error_reporting(0);
?>