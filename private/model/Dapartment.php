<?php

class Dapartment extends Model
{
    protected $table = "dapartments";
    public $errors = [];

    protected $allowedColumns = [
        'dapartment',
        'date'
    ];


    public function validate($data){

        $this->errors = [];

        if(empty($data['dapartment'])){
           $this->errors['dapartment'] = "dapartment is required";
        }

        if(count($this->errors) == 0){
           return true;
        }
        return false;
     }


}

?>