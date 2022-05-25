<?php
require_once "functions.php";
session_start();
$_SESSION=array();
header("location:index.php");
