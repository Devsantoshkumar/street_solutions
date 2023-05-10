<?php

class Feedbacks extends Controller{
    function index(){

        $errors = [];
        
        $feedback = new Feedback();

        if(count($_POST)>0){
            if($feedback->validate($_POST)){
            
                $allowedExtenstions = ["image/jpg","image/png","image/jpeg"];
                if($feedback->fileValidate($_FILES, $allowedExtenstions)){

                    $_POST['image'] =  $feedback->uploadImage($_FILES['image']);
                    $_POST['video'] =  $feedback->uploadImage($_FILES['video']);
                    $_POST['date'] = date("y-m-d H:i:s");
                    $feedback->insert($_POST);
                    $this->redirect("home");

                }else{
                    $errors = $feedback->errors;
                } 
    
            }else{
                $errors = $feedback->errors;
            }
        }

        $this->view("feedback", ["errors"=>$errors]);
    }
}