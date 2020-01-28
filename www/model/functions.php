<?php
function vd($str){
    return var_dump($str);
}


function get_session($name){
    if(isset($_SESSION[$name]) === true){
        return $_SESSION[$name];
    }
    return '';
}

function set_session($name,$value){
    $_SESSION[$name] = $value;
}

function set_err($message){
    $_SESSION['err_message'] = $message;
}

function get_err(){
    $err_message[] = get_session('err_message');
    if($err_message === ''){
        return array();
    }
    set_session('err_message', array());
    return $err_message;
}

function get_post($name){
    if(isset($_POST[$name]) === true){
        return $_POST[$name];
    }
    return '';
}

function is_logined(){
    if(!isset($_SESSION['name'])){
        header('Location: /login.php');
        exit;
    }
}

function entity_str($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function entity_assoc_array($assoc_array){
    foreach($assoc_array as $key => $value){
        foreach($value as $keys => $values){
            $assoc_array[$key][$keys] = entity_str($values); 
        }
    }
    return $assoc_array;
}