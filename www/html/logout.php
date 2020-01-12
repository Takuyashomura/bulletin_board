<?php
session_start();
if(isset($_SESSION['name'])){
    $message = 'ログアウトしました。';
} else {
    $message = 'セッションがタイムアウトしました。';
}

$_SESSION = array();

session_destroy();

include_once '../view/logout_view.php';