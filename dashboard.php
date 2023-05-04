<?php
session_start();
if(isset($_SESSION['Username'])){

    $pageTitle = 'Dashboard';
    include 'init.php';
    echo 'wellcom';
    include  $tpl.'footer.php';
}
else{
header('Location: index.php');
exit();
}
?>