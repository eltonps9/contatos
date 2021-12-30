<?php
session_start();
if($_SESSION['login']){
    session_unset($_SESSION['login']);
    session_destroy($_SESSION['login']);

    header("Location:../../index.html");
    exit;
}

?>