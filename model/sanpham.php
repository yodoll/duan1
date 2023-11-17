<?php 
    // load tất cả sản phẩm
    function loadall_products(){
        $sql = 'SELECT * FROM products';
        $result = pdo_query($sql);
        return $result;
    }

    function load_products(){
        $sql = "SELECT products.id, products.name, products.image, products.price, products.amount, groupproduct.name as group_name FROM products
        LEFT JOIN groupproduct ON products.groupProduct_Id = groupproduct.id";
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

    function loadall_sanpham($id){
        $sql = "SELECT * FROM products where id = $id";
        $result = pdo_query($sql);
        return $result;
    }
?>