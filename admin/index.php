<?php 
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/danhmuc.php";
    include "../model/comment.php";
    include "../model/taikhoan.php";
    include "../model/donhang.php";
    include "header.php";
    if(isset($_GET['act']) && ($_GET['act']) != ""){
        $act = $_GET['act'];
        switch($act){
            case 'listsp':
                $sanpham = load_products();
                include "sanpham/list.php";
                break;

            case 'list-user':
                $user = loadall_users();
                include "user/list.php";
                break;

            case 'listdm':
                $danhmuc = loadall_category();
                include "danhmuc/list.php";
                break;

            case 'list-comment':
                $comment = loadall_binhluan();
                include "comment/list.php";
                break;

            case 'list-donhang':
                $donhang = loadall_donhang();
                include "donhang/list.php";
                break;

            case 'list-thongke':
                include "thongke/thong-ke.php";
                break;
        }
    }else {
        include "home.php";
    }
    include "footer.php";
?>