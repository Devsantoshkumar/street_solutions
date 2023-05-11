<?php

class Queries extends Controller{
    function index(){

        $feedback = new Feedback();

        $data = $feedback->query("SELECT * FROM feedbacks ORDER BY feedbacks_id DESC");
        
        $this->view("query",['rows'=>$data]);
    }
}