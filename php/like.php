<?php 
session_start();
$user_like_id = $_SESSION['id'];
$film_like_id = $_SESSION['kino_id'];
if($user_like_id == ''){
    header('Location: /kino.php?id='.$film_like_id);
}
$servername = "localhost";
$name = "root";
$password = "";
$dbname = "kinozal_db";

$db = mysqli_connect($servername, $name, $password, $dbname);

$query = "INSERT INTO film_like (user_like_id, film_like_id) VALUES ('$user_like_id','$film_like_id')";
$res = "DELETE FROM film_like WHERE user_like_id = '$user_like_id' and film_like_id = '$film_like_id'";
if (mysqli_query($db, $res))
{
    if(mysqli_query($db, $query)){

        header('Location: /kino.php?id='.$film_like_id);
    } else{
        echo "Ошибка: " . mysqli_error($db);
    }
}



?>


