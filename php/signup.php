<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
$username = filter_input(
  INPUT_POST,
  'username'
);
$email = $_POST['email'] ?? '';
$pass1= $_POST['pass1'] ?? '';
$pass2= $_POST['pass2'] ?? '';
$feavorit_film = $_POST['feavorit_film'] ?? '';
$rights = 'Пользователь';

$_SESSION['message'] = [];
if( !$username ) {
  $_SESSION['message'][] = 'Введите ответственного';  
  header('Location: /?signup');
  exit;
}
if( !$pass1 || !$pass2 ) {
  $_SESSION['message'][] = 'Задайте пароль и подтверждение';
  header('Location: /?signup');
  exit;
}
if( $pass1 != $pass2 ) {
  $_SESSION['message'][] = 'Укажите одинаковые пароли';
  header('Location: /?signup');
  exit;
}
$servername = "localhost";
$name = "root";
$password = "";
$dbname = "kinozal_db";

$db = mysqli_connect($servername, $name, $password, $dbname);
$query_dop = "'SELECT id FROM users WHERE username= " . $username;
if (mysqli_query($db, $query_dop)) {
  if( $username ){
    $_SESSION['message'][] = 'Этот ответственный уже зарегистрирован';
    header('Location: /?signup');
    exit;
  }
  
}

$pass = password_hash($pass1, PASSWORD_BCRYPT, ['cost' => 12,]);
$query = "INSERT INTO users (email, username, password, feavorit_film, rights) VALUES ('$email','$username', '$pass', '$feavorit_film', '$rights')";

if(mysqli_query($db, $query)){
  header('Location: /');
} else{
  echo "Ошибка: " . mysqli_error($db);
}

}