<?php
session_start();
$_SESSION['UserId']='1';

include 'db/connect.php';
include 'func/article.php';
include 'func/like.php';

?>