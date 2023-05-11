<?php

class Dashboard extends Controller{

    function __construct(){
        if(!Auth::loggedIn()){
          $this->redirect('home');
        }
    }

    function index(){
        
         $errors = [];

         $feedback = new Feedback();
         $id = Auth::user("department");

         if(empty($id)){
            $id = 1;
         }

         $data = $feedback->query("SELECT * FROM feedbacks WHERE department_id = $id");

        $this->view("dashboard",['errors'=>$errors, 'rows'=>$data]);
    }
}