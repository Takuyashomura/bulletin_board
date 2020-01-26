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
function get_room_data($db,$room_id){
    $sql = 'SELECT
            room_id,
            room_name,
            administrator
            FROM
            user_room_data
            WHERE
            room_id = ?';
            $params[] = $room_id;
            return fetch_query($db,$sql,$params);
}

function get_room($db){
    $sql = 'SELECT
            room_id,
            room_name,
            administrator
            FROM
            user_room_data ORDER by room_id DESC';
        return fetch_all_query($db,$sql);
}

function insert_comment($db,$room_id,$user_name,$user_comment,$nowdate){
    $sql = 'INSERT INTO
            comment_data(
            room_id,
            user_name,
            user_comment,
            created
            )
            VALUE (?,?,?,?)';
        $params[] = $room_id;
        $params[] = $user_name;
        $params[] = $user_comment;
        $params[] = $nowdate;
        return execute_query($db,$sql,$params);
}

function get_room_comment($db,$room_id){
    $sql = 'SELECT
            comment_id,
            user_name,
            user_comment,
            created
            FROM
            comment_data
            WHERE room_id = ?';
        $params[] = $room_id;
        return fetch_all_query($db,$sql,$params);
}

function delete_comment($db,$comment_id){
    $sql = 'DELETE FROM
            comment_data
            WHERE
            comment_id = ?';
        $params[] = $comment_id;
        return execute_query($db,$sql,$params);
}

function delete_room($db,$room_id){
    $sql = 'DELETE FROM
            user_room_data
            WHERE
            room_id = ?';
        $params[] = $room_id;
        return execute_query($db,$sql,$params);
}