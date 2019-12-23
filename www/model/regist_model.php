<?php
require_once 'db.php';
require_once 'functions.php';

function insert_user($db,$name,$passwd){
    try{
    $sql = 'INSERT INTO user_data(
            user_name,
            user_password
            )
            VALUES (?,?)';
    $params[] = $name;
    $params[] = $passwd;
    execute_query($db,$sql,$params);
    return true;

    } catch(PDOException $e){
        set_err($e->getMessage());
    }
}