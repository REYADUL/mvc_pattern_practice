<?php
    if($_SERVER['SERVER_NAME']=='localhost'){

        define("ROOT",'http://localhost/mvc_pattern/public');


    }
    else{
        define('ROOT','https://www.reyadul.dev.com');
    }

    /**database config */
    define('DBNAME','userdb');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASSWORD','');

?>