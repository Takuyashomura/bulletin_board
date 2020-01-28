<?php
require_once 'db.php';

function get_user_data($db,$name){
    $sql = 'SELECT
            user_name,
            user_password
            FROM
            user_data
            WHERE
            user_name =
            ?';
            $params[] = $name;
            return fetch_all_query($db,$sql,$params);
}