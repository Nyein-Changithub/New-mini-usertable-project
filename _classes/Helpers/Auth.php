<?php 

namespace Helpers;

class Auth 
{
    static function check() 
    {
        // echo " Auth Check <br>";

        session_start();
        if(isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        HTTP:: redirect("/index.php","auth=fail");
    }
}