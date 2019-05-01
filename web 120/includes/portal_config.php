<?php
/*
portal-confir.php

Used to store all of our WEB120 configuration information


*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE' ,basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Kelly's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'contactme.php':
        $title = "Kelly's WEB120 Title Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Kelly';
    break;
        
    default:
        $title = THIS_PAGE;
         $logo = 'fa-home';
        $PageID = 'Welcome';
}


?>