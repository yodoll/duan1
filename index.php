<?php 
    include "./model/pdo.php";
    include "./model/sanpham.php";
    $category = loadall_category();
    $products = loadall_products();
    $bestSeller = loadall_bestseller();
    include "./view/header.php";
    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch ($act) {
            case 'contact':
                include "./view/about.php";
                break;
            case 'category':
                include "./view/category.php";
                break;
            case 'detail':
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sp = loadone_sanpham($_GET['idsp']);
                }else {
                    include "./view/home.php";
                }
                include "./view/detail_product.php";
                break;
            case 'cart':
                include "./view/cart.php";
                break;
            case 'checkout':
                include "./view/checkout.php";
                break;
        }
    }else {
        include "./view/home.php";
    }

    include "./view/footer.php";

?>