<?php

function show($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


function get_val($key, $default="")
{
  if(isset($_POST[$key]))
  {
    return $_POST[$key];
  }
  return $default;
}



function send_mail($recipient, $subject, $message){

  $EmailHeaders = [
      "MINE-Version: 1.0",
      "Content-type: text/html; charset=utf-8",
      "From: theweb@thewebsources.com"
      ]; 

  $EmailHeaders = implode("\r\n",$EmailHeaders);

  $SendMail = mail($recipient, $subject, $message, $EmailHeaders);

  if($SendMail){
      return true;
  }else{
      return false;
  }
  
}



?>