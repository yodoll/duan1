<?php 
    // load tất cả danh mục cùng loại
   function loadsp_cungloai($iddm){
        $sql = "SELECT * FROM products WHERE groupProduct_Id = '$iddm'";
        $result = pdo_query($sql);
        return $result;
   }
    // load tất cả danh mục
    function loadall_category(){
        $sql = "SELECT * FROM groupproduct";
        $result = pdo_query($sql);
        return $result;
    }


?>