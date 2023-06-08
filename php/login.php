<?php
session_start();
$username = '';
$db = mysqli_connect('localhost', 'root', '', 'kinozal_db' );
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
$username = filter_input(
  INPUT_POST,
  'username'
);

$pass= $_POST['pass'] ?? '';
$username= $_POST['username'] ?? '';

$_SESSION['message'] = [];
if( !$username ) {
  $_SESSION['message'][] = 'Введите ответственного для входа';  
  header('Location: /');
  exit;
}
if( !$pass ) {
  $_SESSION['message'][] = 'Задайте пароль для входа';
  header('Location: /');
  exit;
}

$query = "SELECT id, email,  username, password, feavorit_film, rights FROM kinozal_db.users WHERE username='$username'";
if ($stmt = mysqli_prepare($db, $query)) {

  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $id, $emaildb, $usernameDB, $passDB, $feavorit_filmDB, $rightsDB);
  mysqli_stmt_fetch($stmt);


  if( password_verify($pass, $passDB)  ){

    $clearid = trim(str_replace(" ","",$id));
    $_SESSION['id'] = $clearid;
    header('Location: /user.php?id= '.$id);
    exit;    
  }
//   $_SESSION['message'][] = 'Данные введены неверно';
//   header('Location: /');
//   exit; 
}
}
?>