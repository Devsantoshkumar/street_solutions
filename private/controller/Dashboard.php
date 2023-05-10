<?php

class Dashboard extends Controller{
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