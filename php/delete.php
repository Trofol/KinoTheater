<?php 
session_start();
$id = $_GET['id'];
$user_like_id = $_SESSION['id'];

$servername = "localhost";
$name = "root";
$password = "";
$dbname = "kinozal_db";

$db = mysqli_connect($servername, $name, $password, $dbname);

$res = "DELETE FROM film_like WHERE user_like_id = '$user_like_id' and film_like_id = '$id'";
if (mysqli_query($db, $res))
{   
    header('Location: /user.php?id= '.$user_like_id);
    } else{
        echo "Ошибка: " . mysqli_error($db);
    }
?>