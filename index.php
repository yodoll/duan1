<?php 
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

    include "./model/pdo.php";
    include "./model/sanpham.php";
    include "./model/comment.php";
    include "./model/danhmuc.php";
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
                if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                    $sp_cungloai = loadsp_cungloai($_GET['iddm']);
                    include "./view/category.php";
                }else {
                    include "./view/home.php";
                }
                break;
            case 'detail':
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sp = loadone_sanpham($_GET['idsp']);
                    $comments = loadall_comments($_GET['idsp']);
                    include "./view/detail_product.php";
                }else {
                    include "./view/home.php";
                }
                break;
            case 'cart':
                // Lấy dữ liệu từ form để lưu giỏ hàng
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $image = $_POST['image'];
                    $price = $_POST['gia'];
                    $amount = 1;
                    $fg = 0; // nếu $fg = 0 thì số lượng không đổi
                    $i = 0;
                    foreach ($_SESSION['giohang'] as $value) {
                        if($value['1'] === $tensp){
                            $amountNew = $amount + $value['4'];
                            $_SESSION['giohang'][$i]['4'] = $amountNew;
                            $fg = 1;
                            break;
                        }
                        $i++;
                    }
                    // khởi tạo 1 mảng con trc khi đưa vào giỏ hàng
                    if($fg == 0){
                        $item = array($id, $tensp, $image, $price, $amount);
                        $_SESSION['giohang'][] = $item;
                    }
                   
                }
                include './view/cart.php';
                break;

            case 'deleteCart':
                if(isset($_SESSION['giohang'])){
                    unset($_SESSION['giohang']);
                }
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