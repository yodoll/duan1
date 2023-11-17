<?php 
    function loadall_users(){
        $sql = "SELECT * FROM users ORDER BY id ASC";
        $result = pdo_query($sql);
        return $result;
    }
?>