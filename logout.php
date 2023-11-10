<?php

    session_start();

    session_unset();
    session_destroy();
    
    // echo "successful";

    header("location: http://localhost/HMS/login.php");

?>