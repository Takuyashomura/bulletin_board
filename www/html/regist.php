<?php
require_once '../conf/const.php';
require_once '../model/login_model.php';
require_once '../model/regist_model.php';
session_start();
$result = '';
$err_msg = array();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
if(get_post('user_name') === '' || get_post('user_name') < 0){
    $err_msg[] = 'ユーザー名を入力してください。';
} elseif(mb_strlen(get_post('user_name')) > 10 ){
    $err_msg[] = 'ユーザー名は１０文字以内で入力してください。';
} else {
    $user_name = get_post('user_name');
}
if(mb_strlen(get_post('user_password')) < '4'){
    $err_msg[] = 'パスワードは４文字以上で入力してください。';
} else {
    $user_password = get_post('user_password');
    $pass_hash = password_hash($user_password,PASSWORD_DEFAULT);
}

$db = get_db_conect();
$user_data = '';
$user_data = get_user_data($db,$user_name);

if(count($user_data) === 0){
    if(insert_user($db,$user_name, $pass_hash) === true){
        $result = '登録完了しました！';
    }
} else {
    $result = 'ユーザー名が重複しています。';
}

}


include_once '../view/regist_view.php';