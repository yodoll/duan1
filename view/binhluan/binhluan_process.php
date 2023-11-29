<?php 
    include "./model/pdo.php";
    
    if(isset($_SESSION['user'])){
        if(isset($_POST['submit']) && ($_POST['submit'])){
            $content = $_POST['message'];
            $user = $_SESSION['user'];
        }
    }
?>