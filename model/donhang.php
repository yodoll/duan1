<?php 
    function loadall_donhang(){
        $sql = "SELECT orders.id, orders.totalMoney, orders.created_at ,orders.status ,users.name as name FROM orders
        LEFT JOIN users ON orders.user_id = users.id";
        $result = pdo_query($sql);
        return $result;
    }
?>