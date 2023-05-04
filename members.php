<?php
session_start();
if(isset($_SESSION['Username'])){

    $pageTitle = 'Members';
    include 'init.php';

    $do=(isset($_GET['do']))?$_GET['do']: 'Manage';

    if($do == 'Manage'){
        echo 'Welcom You Are In Manger Category Page';
    }elseif($do =='Edit'){
        echo'Welcom You Are In Edit Page '.$_GET['userId'];

    }

    include  $tpl.'footer.php';
}
else{
header('Location: index.php');
exit();
}
?>