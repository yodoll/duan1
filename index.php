<?php 
    include "./view/header.php";
    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch ($act) {
            case 'contact':
                include "./view/about.php";
                break;
        }
    }else {
        include "./view/home.php";
    }

    include "./view/footer.php";

?>