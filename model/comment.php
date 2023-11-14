<?php 
    // load người bình luận sản phẩm
    function loadall_comments($idsp){
       $sql = "SELECT comments.content, comments.created_at, comments.updated_at, users.name FROM comments
                LEFT JOIN users ON comments.user_id = users.id
                LEFT JOIN products ON comments.product_id = products.id
                WHERE products.id = $idsp";
        $result = pdo_query($sql);
        return $result;
    }
?>