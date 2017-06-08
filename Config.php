<?php
//Version 1.0.0
$steamlogin['apikey'] = "API_KEY_HERE"; // Your Steam WebAPI-Key found at http://steamcommunity.com/dev/apikey
$steamlogin['domainname'] = "domain.local"; // The main URL of your website displayed in the login page
$steamlogin['logoutpage'] = "index.php"; // Page to redirect to after a successfull logout (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
$steamlogin['loginpage'] = "index.php"; // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning! 

// System stuff
if (empty($steamlogin['apikey'])) {die("<div style='display: block; width: 100%; color: red; text-align: center;'>STEAMLOGIN:<br>SET YOUR APIKEY IN THE CONFIG.PHP!!</div>");}
if (empty($steamlogin['domainname'])) {$steamlogin['domainname'] = $_SERVER['SERVER_NAME'];}
if (empty($steamlogin['logoutpage'])) {$steamlogin['logoutpage'] = $_SERVER['PHP_SELF'];}
if (empty($steamlogin['loginpage'])) {$steamlogin['loginpage'] = $_SERVER['PHP_SELF'];}
?>