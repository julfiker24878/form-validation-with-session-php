<?php
session_start();

$errors = [];
$field_names = ['name'=>'Name required', 'email'=>'Email required', 'password'=>'Password required'];

foreach($field_names as $field_name => $msg){
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $msg;
    }
}

if(count($errors) == 0){
    echo $_POST['name'].'<br>';
    echo $_POST['email'].'<br>';
    echo $_POST['password'].'<br>';
}else{
    $_SESSION['err'] = $errors;
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header('location: index.php');
}