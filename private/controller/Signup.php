<?php

class Signup extends Controller{

    function __construct(){
        if(Auth::loggedIn()){
          $this->redirect('/');
        }
    }

    function index(){

        $errors = [];
        $user = new User();

        if(count($_POST)>0){
           
          if($user->validate($_POST)){

            $_POST['date'] = date("y-m-d H:i:s");

             $user->insert($_POST);

             $this->redirect("/");

          }else{
            $errors = $user->errors;
          }

         }

      $this->view('signup',['errors'=>$errors]);
    }
}
?>