<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['nickname'] = $_POST['Name']; 
    $_SESSION['score'] = ['totoro' => 0, 'may' => 0, 'ponyo' => 0, 'sosuke' => 0, 'howl' => 0, 'sophie' => 0, 'chihiro' => 0, 'haku' => 0];
    header("Location: Question_1.php");
    exit();
}
?>