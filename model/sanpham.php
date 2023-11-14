<?php 
    // load tất cả danh mục
    function loadall_category(){
        $sql = 'SELECT * FROM groupproduct';
        $result = pdo_query($sql);
        return $result;
    }

    // load tất cả sản phẩm
    function loadall_products(){
        $sql = 'SELECT * FROM products';
        $result = pdo_query($sql);
        return $result;
    }

    // load ra những sản phẩm bán chạy
    function loadall_bestseller(){
        $sql = 'SELECT * FROM products where quantity_sold > 0';
        $result = pdo_query($sql);
        return $result;
    }

    // load ra 1 sản phẩm
    function loadone_sanpham($id){
        $sql = "SELECT * FROM products where id = $id";
        $result = pdo_query_one($sql);
        return $result;
    }
?>