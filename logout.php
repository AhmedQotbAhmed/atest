<?php
//Start the session
session_start();
// unset the data
session_unset();
//Destroy  the Session
session_destroy();

header('Location: index.php');

exit();
