<?php
class Home extends Controller
{
    public function index(){
        echo 'this is the home controller <br>';
        $model = new Model;
        $model->test();
        $this->view('home');
    }
    
}

// $home = new Home();
// call_user_func_array([$home,'index'],[])

?>