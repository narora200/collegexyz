<?php
    /********************************
    * Configures Pages              *
    ********************************/  
    
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    //Requiring the functions
    require("functions.php");

    // Not allowing the user to access any pages except the one mentioned
    if (!in_array($_SERVER["PHP_SELF"], ["/index.php"]))
    {
        redirect("index.php");
    }
    if(!isset($_SESSION["id"]))
    {
        if(in_array($_SERVER["PHP_SELF"], ["/level.php", "/submission.php"]))
        {
            redirect("index.php");
        }      
    }
?>
