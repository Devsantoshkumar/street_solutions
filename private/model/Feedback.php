<?php

class Feedback extends Model
{
    protected $table = "feedbacks";
    public $errors = [];

    protected $allowedColumns = [
        'title',
        'description',
        'image',
        'video',
        'location',
        'citizen_id',
        'date',
        'department_id'
    ];


    public function validate($data){

        $this->errors = [];

        if(empty($data['title'])){
           $this->errors['title'] = "Title is required";
        }

        if(empty($data['description'])){
            $this->errors['description'] = "Description is required";
        }

        if(empty($data['location'])){
            $this->errors['location'] = "Location is required";
        }


        if(count($this->errors) == 0){
           return true;
        }
        return false;
     }


     public function fileValidate($FILE, $imageExt=[]){

        $this->errors = [];

        if(!empty($FILE['image']['name'])){
           $imageName = $FILE['image']["name"];
           $imageType = $FILE['image']["type"];
           $imageError = $FILE['image']["error"];
           $imageSize = $FILE['image']["size"];

           if(empty($imageName)){
               $this->errors['imageName'] = "The image can not be empty.";
            }

            if(!in_array($imageType, $imageExt)){
                $this->errors['imageType'] = "Image type is invalid.";
            }


            if($imageError !== 0){
               $this->errors['fileError'] = "An error occurred while uploading the image.";
            }


            if(count($this->errors) == 0){
                return true;
             }
             return false;
        }

    }

    public function videoValidate($FILE, $imageExt=[]){

        $this->errors = [];

        if(!empty($FILE['video']['name'])){

           $imageName = $FILE['video']["name"];
           $imageType = $FILE['video']["type"];
           $imageError = $FILE['video']["error"];
           $imageSize = $FILE['video']["size"];

           if(empty($imageName)){
               $this->errors['imageName'] = "The image can not be empty.";
            }

            if(!in_array($imageType, $imageExt)){
                $this->errors['imageType'] = "Image type is invalid.";
            }


            if($imageError !== 0){
               $this->errors['fileError'] = "An error occurred while uploading the image.";
            }


            if(count($this->errors) == 0){
                return true;
             }
             return false;
        }

    }

}

?>