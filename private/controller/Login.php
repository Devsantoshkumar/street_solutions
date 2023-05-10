<?php

class Login extends Controller{
    function index(){

        $errors = [];

        if(count($_POST)>0){
          $user = new User();
          if($row = $user->where('email',$_POST['email']))
          {
            $row = $row[0];
            if(password_verify($_POST['password'], $row->password))
            {
                Auth::authenticate($row);
                $this->redirect('feedbacks');
            }else
            {
                $errors['email'] = 'Email or password are incorrect';
            }
          }else
          {
               $errors['email'] = 'Email or password are incorrect';
          }
        }
        $this->view("login", ["errors"=>$errors]);
    }
}