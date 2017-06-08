<?php

require 'steamlogin.php';

if (isset($_SESSION['steamid'])) {
	include 'userInfo.php';
    logoutbutton();
	echo "<form action='' method='get'><button class='update' name='update' type='submit'>Update</button></form>";
    echo "<br>SteamID:". $steamprofile['steamid'];
    echo "<br>CommunityVisibilityState:". $steamprofile['communityvisibilitystate'];
    echo "<br>Profilestate:". $steamprofile['profilestate'];
    echo "<br>Personaname:". $steamprofile['personaname'];
    echo "<br>Last logoff:". $steamprofile['lastlogoff'];
    echo "<br>profileURL:". $steamprofile['profileurl'];
	echo "<br>profileURL PERM:". $steamprofile['profileurlperm'];
    echo "<br>Avatar:". $steamprofile['avatar'];
    echo "<br>Medium Avatar:". $steamprofile['avatarmedium'];
    echo "<br>Full Avatar:". $steamprofile['avatarfull'];
    echo "<br>Personastate:". $steamprofile['personastate'];
    echo "<br>Realname:". $steamprofile['realname'];
    echo "<br>Primary Clan ID:". $steamprofile['primaryclanid'];
    echo "<br>Time created:". $steamprofile['timecreated'];
    echo "<br>Uptodate:". $steamprofile['uptodate'];
	echo "<br>Country:". $steamprofile['loccountrycode'];
	echo "<br>State:". $steamprofile['locstatecode'];
	echo "<br>City:". $steamprofile['loccityid'];
    
} else {
	loginbutton();
}

?>