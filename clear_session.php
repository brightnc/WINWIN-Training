<?php
include_once("session_include.php");
    session_destroy();
    header('Location: login.php');
    exit();
?>