<?php

class Home extends Controller{
    function index(){

        $errors = [];

        $user = new User();
        if(count($_POST)>0){

            if($user->validate($_POST)){

                $user->insert($_POST);
                $this->redirect("/");
                
            }

        }

        
        $this->view("home",['errors'=>$errors]);
    }
}