<?php

    // Check if User Coming From A Request
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $cell = filter_var($_POST['cellphone'], FILTER_SANITIZE_NUMBER_INT);
        $msg  = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        
        // Creating Array of Errors
        $formErrors = array();
        if (strlen($user) <= 3) {
            $formErrors[] = 'Username must be larger than <strong>3</strong> characters';
        }
        if (strlen($msg) < 10) {
            $formErrors[] = 'message can\'t be less than <strong>10</strong> characters'; 
        }
        
        // If No Errors Send The Email 
        
        $headers = 'From: ' . $mail . '\r\n';
        $myEmail = 'o@o.com';
        $subject = 'Contact Form';
        
        if (empty($formErrors)) {
            
            // mail($myEmail, $subject, $msg, $headers);
            
            $user = '';
            $mail = '';
            $cell = '';
            $msg = '';
            
            $success = '<div class="alert alert-success">We Have Recieved Your Message</div>';
            
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Elzero Contact Form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/contact.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700,900,900i">
   
    </head>
    <body>
        
        <!-- Start Form -->
        
        <div class="container">
            <h1 class="text-center">Contact Me</h1>
            <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <?php if (! empty($formErrors)) { ?>
                <div class="alert alert-danger alert-dismissible" role="start">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php
                        foreach($formErrors as $error) {
                            echo $error . '<br/>';
                        }
                    ?>
                </div>
                <?php } ?>
                <?php if (isset($success)) { echo $success; } ?>
                <div class="form-group">
                                <!-- username -->
                    <input 
                           class="username form-control" 
                           type="text" 
                           name="username" 
                           placeholder="Type Your Username"
                           value="<?php if (isset($user)) { echo $user; } ?>" />
                    <i class="fa fa-user fa-fw"></i>
                    <span class="asterisx">*</span>
                    <div class="alert alert-danger custom-alert">
                        Username Must Be Larger Than <strong>3</strong> Characters
                    </div>
                </div>
                <div class="form-group">
                             <!-- email -->

                    <input 
                           class="email form-control" 
                           type="email" 
                           name="email" 
                           placeholder="Please Type a Valid Email" 
                           value="<?php if (isset($mail)) { echo $mail; } ?>" />
                    <i class="fa fa-envelope fa-fw"></i>
                    <span class="asterisx">*</span>
                    <div class="alert alert-danger custom-alert">
                        Email Can't Be <strong>Empty</strong>
                    </div>
                </div>
                         <!-- cellphone -->

                <input 
                       class="form-control" 
                       type="text" 
                       name="cellphone" 
                       placeholder="Type Your Cell Phone" 
                       value="<?php if (isset($cell)) { echo $cell; } ?>" />
                <i class="fa fa-phone fa-fw"></i>
                <div class="form-group">
                    
                      <!-- cellphone -->

                    <textarea 
                          class="message form-control" 
                          name="message"
                          placeholder="Your Message!"><?php if (isset($msg)) { echo $msg; } ?></textarea>
                    <span class="asterisx">*</span>
                    <div class="alert alert-danger custom-alert">
                        Message Can\'t Be Less Than <strong>10</strong> Characters
                    </div>
                </div>
                <input 
                       class="btn btn-success" 
                       type="submit" 
                       value="Send Message" />
                <i class="fa fa-send fa-fw send-icon"></i>
            </form>
        </div>
        
        <!-- End Form -->
        
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>