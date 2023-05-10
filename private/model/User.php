<?php

class User extends Model
{
    protected $table = "users";
    public $errors = [];

    protected $allowedColumns = [
        'name',
        'email',
        'password',
        'phone',
        'date'
    ];

    protected $beforeInsert = [
        'hash_password'
    ];



    public function validate($data){

        $this->errors = [];

        if(empty($data['name'])){
           $this->errors['name'] = "Name is required";
        }

        if(empty($data['phone'])){
         $this->errors['phone'] = "phone is required";
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

        if(isset($data['password']) && isset($data['cpassword'])){
           if(($data['password'] != $data['cpassword']) || empty($data['password'])){
              $this->errors['password'] = "Password not matched.";
           }
        }else{
           unset($data['password']);
           unset($data['cpassword']);
        }


        if(count($this->errors) == 0){
           return true;
        }
        return false;
     }



    public function hash_password($data)
    {
       $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
       return $data;
    }
}

?>