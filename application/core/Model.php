<?php

class Model {
    use Database;
    function test(){
        $query="SELECT * from new_user";
        $result=$this->query($query);
        show($result);
        // $this->connect();
    }
    
    public function insert(){

    }
    public function delete(){

    }
    public function upadate(){

    }
    
}