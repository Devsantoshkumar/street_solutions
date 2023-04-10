<?php

class Comming extends Controller{
    function index(){

        $errors = [];

        
        $this->view("comming",['errors'=>$errors]);
    }
}