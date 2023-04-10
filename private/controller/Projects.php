<?php

class Projects extends Controller{
    function index(){

        $errors = [];

        
        $this->view("projects",['errors'=>$errors]);
    }
}