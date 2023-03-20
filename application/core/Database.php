<?php
    trait Database{
        
        public function connect(){
        
            $connection= new mysqli(DBHOST,DBUSER,DBPASSWORD,DBNAME);
            if(!$connection){
                die("<h1>Database Connection Failed");
            }
            echo 'db connected';
            return  $connection;
        }
        public function query($query){

            $connection=$this->connect();
            $data = mysqli_query($connection,$query);
            while($row= mysqli_fetch_array($data)){
                $email=$row['email_address'];
                $name=$row['username'];
                echo $email.' '.$name.'<br>';
            }
           
        }

    }

