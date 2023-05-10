<?php

class Departments extends Controller{
    function index(){
        
         $errors = [];
         $department = new Dapartment();

        if(count($_POST)>0){
            if($department->validate($_POST)){
                $_POST['date'] = date("y-m-d H:i:s");
                $department->insert($_POST);
                $this->redirect("departments");
            }else{
                $errors = $department->errors;
            }
        }

        $data = $department->findAll();

        $this->view("department",['errors'=>$errors, "rows"=>$data]);
    }
}