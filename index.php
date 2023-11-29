<?php
ob_start();
session_start();

include "./model/pdo.php";
include "./model/sanpham.php";
include "./model/comment.php";
include "./model/danhmuc.php";
include "./model/taikhoan.php";
$category = loadall_category();
$products = loadall_products();
$bestSeller = loadall_bestseller();
include "./view/header.php";
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'contact':
            include "./view/about.php";
            break;
        case 'category':
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $sp_cungloai = loadsp_cungloai($_GET['iddm']);
                include "./view/category.php";
            } else {
                include "./view/home.php";
            }
            break;
        case 'detail':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sp = loadone_sanpham($_GET['idsp']);
                $comments = loadall_comments($_GET['idsp']);
                $total = count_comment($_GET['idsp']);
                include "./view/detail_product.php";
            } else {
                include "./view/home.php";
            }
            break;
        case 'comment':
            if(isset($_POST['submit']) && ($_POST['submit'])){
                $name = $_SESSION['user']['id'];
                $content = $_POST['noidung'];
                $productId = $_POST['idsp'];
                $date = $_POST['currentDateTime'];
                insert_comment($content, $productId, $name, $date);
                header("location: index.php?act=detail&idsp=". $productId);
            }
            break;
        case 'cart':
            include "./view/cart.php";
            break;
        case 'addcart':
            // Lấy dữ liệu từ form để lưu giỏ hàng
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $image = $_POST['image'];
                $price = $_POST['gia'];
                if(isset($_POST['sl']) && ($_POST['sl']) > 0){
                    $amount = $_POST['sl'];
                }else {
                    $amount = 1;
                }
                $fg = 0; // nếu $fg = 0 thì số lượng không đổi
                $i = 0;
                foreach ($_SESSION['giohang'] as $value) {
                    if ($value['1'] === $tensp) {
                        $amountNew = $amount + $value['4'];
                        $_SESSION['giohang'][$i]['4'] = $amountNew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }
                // khởi tạo 1 mảng con trc khi đưa vào giỏ hàng
                if ($fg == 0) {
                    $item = array($id, $tensp, $image, $price, $amount);
                    $_SESSION['giohang'][] = $item;
                }
                header("location: index.php?act=cart");
            }
            break;

        case 'deleteCart':
            if(isset($_GET['i']) && ($_GET['i']) > 0){
                if(isset($_SESSION['giohang'])){
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
                }
            }else {
                if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
            }
            if(isset($_SESSION['giohang']) && ($_SESSION['giohang']) > 0){
                header("location: index.php?act=cart");
            }else {
                header("location: index.php");
            }
            break;

        case 'dangky':
            if (isset($_POST['dangky'])) {
                $username = $_POST['username'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                // Kiểm tra trùng lặp email trước khi đăng nhập
                $emailExists = get_user_by_name($_POST['email']);

                if ($emailExists) {
                    header("location: index.php?login&error=Tài khoản đã tồn tại!");
                    exit();
                } else {
                    // Băm mật khẩu trước khi lưu vào cơ sở dữ liệu
                    $hashed = password_hash($password, PASSWORD_DEFAULT);
                    insert_taikhoan($username, $phone, $address, $email, $hashed);
                    header("location: index.php");
                }
            }
            include "./view/home.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap'])  && ($_POST['dangnhap'] != "")) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $emailExists = get_user_by_name($_POST['user']);

                if (!$emailExists) {
                    header("location: index.php?login&error=Tài khoản không tồn tại!");
                    exit();
                }
                $userDb = getUserByUsername($user, $password);
                if (is_array($userDb)) {
                    $_SESSION['user'] = $userDb;
                    header("location: index.php");
                } else {
                    header("location: index.php?error= Tài khoản hoặc mật khẩu không đúng!");
                }
            }
            include "./view/home.php";
            break;

        case 'dangxuat':
            dangxuat();
            header("location: index.php");
            exit();
            break;

        case 'checkout':
            include "./view/checkout.php";
            break;
    }
} else {
    include "./view/home.php";
}

include "./view/footer.php";
