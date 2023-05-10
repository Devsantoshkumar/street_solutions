<?php

class Queries extends Controller{
    function index(){

        $feedback = new Feedback();

        $data = $feedback->findAll();
        
        $this->view("query",['rows'=>$data]);
    }
}