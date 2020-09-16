<?php 
/* 
 * Basic Site Settings and Database Configuration 
 */ 
 
// Site Settings 
$siteName = 'Architecto'; 
$siteEmail = 'architectoinfo@gmail.com'; 
 if (isset ($_SERVER["HTTPS"])) {
    $siteURL = ($_SERVER["HTTPS"] == "on")?'https://':'http://'; 
} 
else {
    $siteURL = 'http://';
}

$siteURL = $siteURL.$_SERVER["SERVER_NAME"].":8080".dirname($_SERVER['REQUEST_URI']).'/'; 
 
// Database configuration 
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'architecto'); 