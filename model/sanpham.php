<?php 
    // load tất cả sản phẩm
    function loadall_products(){
        $sql = 'SELECT * FROM products';
        $result = pdo_query($sql);
        return $result;
    }

    function load_products(){
        $sql = "SELECT products.id, products.name, products.image, products.price, products.amount, products.groupProduct_Id , groupproduct.name as group_name FROM products
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

    function insert_sanpham($name, $image, $giatien, $soluong, $categoryid){
        $sql = "INSERT INTO products (name, image, price, amount, groupProduct_Id) VALUES ('$name', '$image', '$giatien', '$soluong', '$categoryid')";
        pdo_execute($sql);
    }

    function update_sanpham($id, $name, $image, $giatien, $soluong, $categoryid){
        $sql = "UPDATE products SET name = '$name', image = '$image', price = '$giatien', amount = '$soluong', groupProduct_Id = '$categoryid' WHERE id = '$id'";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "DELETE FROM products WHERE id = '$id'";
        pdo_execute($sql);
    }

    function delete_cart($id){
        $sql = "DELETE FROM products WHERE id = '$id'";
        pdo_execute($sql);
    }
?>