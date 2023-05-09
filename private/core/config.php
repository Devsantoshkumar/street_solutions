<?php

/////////////////////////////////////////


    if($_SERVER['SERVER_NAME'] == 'localhost'){
        define("DBNAME","streetsolution");
        define("DBHOST","localhost");
        define("DBUSER","root");
        define("DBPASSWORD","");
        define("DBDRIVER","mysql");

    }else{
        
        define("DBNAME","u204810223_thewebsources");
        define("DBHOST","localhost");
        define("DBUSER","u204810223_thewebsources");
        define("DBPASSWORD","S5wDbmG?5");
        define("DBDRIVER","mysql");

    }

/////////////////////////////////////////


/////////////////////////////////////

define("URI",$_SERVER['REQUEST_URI']);     // /theweb3/

/////////////////////////////////////


/////////////////////////////////////////////////////

define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);    // GET

//////////////////////////////////////////////////////


/////////////////////////////////////////

define('ROOT', $_SERVER['DOCUMENT_ROOT']);     // C:/xampp/htdocs

//////////////////////////////////////////


//////////////////////////////////////////


if($_SERVER['SERVER_NAME'] == 'localhost'){

    define("BASE","http://localhost/street_solutions/"); 

}else{

    define("BASE","https://thewebsources.com/"); 
}
    

///////////////////////////////////////////


//////////////////////////////////////////

if($_SERVER['SERVER_NAME'] == 'localhost'){

    define("ASSETS","http://localhost/street_solutions/assets/"); 
}else{

    define("ASSETS","https://thewebsources.com/assets/"); 
}




///////////////////////////////////////////


/////////////////////////////////////////////////

define("CONTROLLERS","private/controller/");

/////////////////////////////////////////////////


///////////////////////////////////////

define("MODELS","private/model/");

///////////////////////////////////////


////////////////////////////////////

define("VIEWS","private/view/");

////////////////////////////////////


////////////////////////////////////

define("ADMIN","private/view/admin/");

////////////////////////////////////


define('ERROR_REPORTING_LEVEL', -1);

?>