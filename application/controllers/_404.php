<?php
    echo "<h1 style='color: purple;text-align:center;'>404 page not found </h1>";

   
    class _404 extends Controller
    {
        public function index(){
            $this->view('404');
            echo "<h1 style='color: purple;text-align:center;'>404 page not found </h1>";
        }
    }

   

?>