<?php 

$do='';

$do=(isset($_GET['do']))?$_GET['do']: 'Manage';

if($do == 'Manage'){

    echo 'Welcom You Are In Manger Category Page';
    echo '<a href="?do=Insert"> Add New Category +</a>';
}elseif($do =='Add'){
    echo'Welcom You Are In Add Category Page';

}

?>