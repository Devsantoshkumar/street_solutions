<?php

class Actions extends Controller{
    function __construct(){
        if(!Auth::loggedIn()){
          $this->redirect('home');
        }
    }
    function index($id=NULL){
        
         $errors = [];

         $feedback = new Feedback();

         if(count($_POST)>0){
            $feedback->update($id, $_POST);
            $this->redirect("dashboard");
         }


         $data = $feedback->where("feedbacks_id",$id);


        $this->view("action",['errors'=>$errors, 'rows'=>$data]);
    }


    function taken($id=NULL){

        $feedback = new Feedback();
        $fid = $feedback->where("feedbacks_id", $id);

        if($fid[0]->status == 0){
            $_POST['status'] = 1;
            $feedback->update($id, $_POST);
            $this->redirect("dashboard");
        }
    }
}