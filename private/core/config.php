<?php

/////////////////////////////////////////

    // define("DBNAME","myweb");
    // define("DBHOST","localhost");
    // define("DBUSER","root");
    // define("DBPASSWORD","");
    // define("DBDRIVER","mysql");


    define("DBNAME","u204810223_thewebsources");
    define("DBHOST","localhost");
    define("DBUSER","u204810223_thewebsources");
    define("DBPASSWORD","S5wDbmG?5");
    define("DBDRIVER","mysql");




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

    
// define("BASE","http://localhost/thewebsources/"); 


define("BASE","https://thewebsources.com/"); 


///////////////////////////////////////////


//////////////////////////////////////////

// define("ASSETS","http://localhost/thewebsources/assets/"); 

define("ASSETS","https://thewebsources.com/assets/"); 


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