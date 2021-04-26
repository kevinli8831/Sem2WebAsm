<?php
session_start();

unset($_SESSION['adminStatus']);
header("Location:index.php");

?>
