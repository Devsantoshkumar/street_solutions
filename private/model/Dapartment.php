<?php

class Dapartment extends Model
{
    protected $table = "dapartments";
    public $errors = [];

    protected $allowedColumns = [
        'dapartment',
        'state',
        'city',
        'date'
    ];


    public function validate($data){

        $this->errors = [];

        if(empty($data['dapartment'])){
           $this->errors['dapartment'] = "dapartment is required";
        }

        if(empty($data['state'])){
            $this->errors['state'] = "state is required";
        }

        if(empty($data['city'])){
            $this->errors['city'] = "city is required";
        }


        if(count($this->errors) == 0){
           return true;
        }
        return false;
     }


}

?>