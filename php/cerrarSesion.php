<?php

session_start();
unset($_SESSION['user']);
unset($_SESSION['tipo']);
header("location: ./../index.php");

?>