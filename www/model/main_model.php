<?php
require_once 'db.php';

function make_room($db,$room_name,$name){
    $sql = 'INSERT INTO user_room_data(
            room_name,
            administrator
            )
            VALUE (?,?)';
        $params[] = $room_name;
        $params[] = $name;
        return execute_query($db,$sql,$params);
}

function get_room($db){
    $sql = 'SELECT
            room_id,
            room_name,
            administrator
            FROM
            user_room_data';
        return fetch_all_query($db,$sql);
}