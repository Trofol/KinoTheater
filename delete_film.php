<?php
if(isset($_POST["id"]))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kinozal_db";
    
    $db = mysqli_connect($servername, $username, $password, $dbname);
    if($db->connect_error){
        die("Ошибка: " . $db->connect_error);
    }

    $userid = $db->real_escape_string($_POST["id"]);

    $sql = "DELETE FROM kino WHERE id = '$userid'";
    if($db->query($sql)){
        
        header("Location: /admin.php");
    }
    else{
        echo "Ошибка: " . $db->error;
    }
    $db->close();  
}
?>