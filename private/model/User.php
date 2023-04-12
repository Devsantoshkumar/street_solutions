<?php

class User extends Model
{

    protected $table = "users";
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email'
    ];


    public function validate($data){

        $this->errors = [];

        if(empty($data['firstname'])){
           $this->errors['firstname'] = "First name is required";
        }

        if(empty($data['lastname'])){
            $this->errors['lastname'] = "Last name is required";
         }

        if(isset($data['email'])){
           if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL))
           {
                 $this->errors['email'] = "Email id is required";
           }
        }
       
        if(!empty($data['email'])){
           if($this->where('email',$data['email'])){
                 $this->errors['email'] = "<span class='fw-bold'>".$data['email']."</span> is already exist";
           }
        }


        if(count($this->errors) == 0){
           return true;
        }
        return false;
     }




    }

?>