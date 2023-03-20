<?php
    class Controller
    {
        public function view($name){
            $filename="../application/views/".$name.".view.php";
        if(file_exists($filename)){
            require $filename;
        }
        else{
            $filename="../application/views/404.view.php";
            require $filename;
            // echo "controller not found";
        }
        }
    }

?>