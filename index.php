<?php
session_start();
$noNavbar='';
$pageTitle = 'Login';

if(isset($_SESSION['Username'])){
    
    header('Location: dashbord.php'); //redirect to dashbord
}
include 'init.php';
include_once $langs. 'english.php';
include $tpl.'header.php';

if( $_SERVER['REQUEST_METHOD']=='POST'&& !empty($_POST) ){
    $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password= $_POST['password']; 
    $hashedPass=sha1($password);

    // check if the user exist in db 
    $stmt= $con->prepare("SELECT Username, Password 
    FROM users 
    Where Username=? 
    AND Password=? 
    AND GroupID=1
    LIMIT 1");
    $stmt->execute(array($user,$hashedPass));
    $row= $stmt->fetch();
    $count= $stmt->rowCount();
    //LOGIN
    if($stmt->rowCount()>0){
        $_SESSION ['Username']= $user; // Regiser session name
        $_SESSION ['userId']= $row['UserId']; // Regiser session ID
        header('Location: dashboard.php'); //redirect to dashbord
        exit();
    }
}
?>
<!-- body -->


<form class="login" action="<?php echo $_SERVER['PHP_SELF']?> " method="POST">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="username" placeholder="Username"
     value="<?php if (isset($user)) { echo $user; } ?>
     " autocomplete="off" />
    <input class="form-control" type="password" name="password" value="
    <?php if (isset($Password)) { echo $Password; } ?>" 
    placeholder="Password" autocomplete="new-password" />
    <input class="btn btn-primary btn-block" type="submit" value="Login" />
</form>



<!-- footer -->

<?php
include  $tpl.'footer.php';?>