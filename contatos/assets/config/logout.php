<?php
if($_SESSION['login'] == false){
    header("Location:../../index.html");
    exit;
}