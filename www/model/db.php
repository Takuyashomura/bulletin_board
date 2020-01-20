<?php

function get_db_conect(){

    $dsn = 'mysql:dbname='. DB_NAME . ';host='. DB_HOST .';charset='. DB_CHARSET;

    try{
        $dbh = new PDO($dsn, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'));
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        exit('接続できませんでした。 理由:'.$e->getMessage());
    }
    return $dbh;
}

function fetch_query($db,$sql,$params = array()){
    try{
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch();
    } catch(PDOException $e){
        $err_message[] = 'データ取得に失敗しました。';
    }
    return $err_message;
}

function fetch_all_query($db,$sql,$params = array()){
    try{
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchALL();
    } catch (PDOException $e){
        $err_message[] = 'データ取得に失敗しました。';
    }
    return $err_message;
}

function execute_query($db,$sql,$params = array()){

    try{
        $stmt = $db->prepare($sql);
        return $stmt->execute($params);
    } catch(PDOException $e){
        $err_message[] = $e->getMessage();
    }
    return $err_message;
}