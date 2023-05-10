<?php

class Administrations extends Controller{
    function index(){
        
        $errors = [];

        if(count($_POST)>0){
            $department = new Dapartment();
            if($department->validate($_POST)){
                $_POST['date'] = date("y-m-d H:i:s");
                $department->insert($_POST);
            }else{
                $errors = $department->errors;
            }
        }

        $this->view("administrations",['errors'=>$errors]);
    }
}