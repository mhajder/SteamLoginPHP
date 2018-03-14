<?php
if (empty($_SESSION['steam_uptodate']) or empty($_SESSION['steam_personaname'])) {
    require 'Config.php';
    $url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamlogin['apikey']."&steamids=".$_SESSION['steamid']);
    $content = json_decode($url, true);
    $_SESSION['steam_steamid'] = $content['response']['players'][0]['steamid'];
    $_SESSION['steam_communityvisibilitystate'] = $content['response']['players'][0]['communityvisibilitystate'];
    $_SESSION['steam_profilestate'] = $content['response']['players'][0]['profilestate'];
    $_SESSION['steam_personaname'] = $content['response']['players'][0]['personaname'];
    $_SESSION['steam_lastlogoff'] = $content['response']['players'][0]['lastlogoff'];
    $_SESSION['steam_profileurl'] = $content['response']['players'][0]['profileurl'];
    $_SESSION['steam_avatar'] = $content['response']['players'][0]['avatar'];
    $_SESSION['steam_avatarmedium'] = $content['response']['players'][0]['avatarmedium'];
    $_SESSION['steam_avatarfull'] = $content['response']['players'][0]['avatarfull'];
    $_SESSION['steam_personastate'] = $content['response']['players'][0]['personastate'];
    if (isset($content['response']['players'][0]['realname'])) {
           $_SESSION['steam_realname'] = $content['response']['players'][0]['realname'];
    } else {
           $_SESSION['steam_realname'] = "Real name not given";
    }
    if (isset($content['response']['players'][0]['loccountrycode'])) {
           $_SESSION['steam_loccountrycode'] = $content['response']['players'][0]['loccountrycode'];
    } else {
           $_SESSION['steam_loccountrycode'] = "Country not given";
    }
    if (isset($content['response']['players'][0]['locstatecode'])) {
           $_SESSION['steam_locstatecode'] = $content['response']['players'][0]['locstatecode'];
    } else {
           $_SESSION['steam_locstatecode'] = "State not given";
    }
    if (isset($content['response']['players'][0]['loccityid'])) {
           $_SESSION['steam_loccityid'] = $content['response']['players'][0]['loccityid'];
    } else {
           $_SESSION['steam_loccityid'] = "City not given";
    }
    $_SESSION['steam_primaryclanid'] = $content['response']['players'][0]['primaryclanid'];
    $_SESSION['steam_timecreated'] = $content['response']['players'][0]['timecreated'];
    $_SESSION['steam_uptodate'] = time();
}

$steamprofile['steamid'] = $_SESSION['steam_steamid'];
$steamprofile['communityvisibilitystate'] = $_SESSION['steam_communityvisibilitystate'];
$steamprofile['profilestate'] = $_SESSION['steam_profilestate'];
$steamprofile['personaname'] = $_SESSION['steam_personaname'];
$steamprofile['lastlogoff'] = $_SESSION['steam_lastlogoff'];
$steamprofile['profileurl'] = $_SESSION['steam_profileurl'];
$steamprofile['profileurlperm'] = ("http://steamcommunity.com/profiles/".$_SESSION['steam_steamid']."");
$steamprofile['avatar'] = $_SESSION['steam_avatar'];
$steamprofile['avatarmedium'] = $_SESSION['steam_avatarmedium'];
$steamprofile['avatarfull'] = $_SESSION['steam_avatarfull'];
$steamprofile['personastate'] = $_SESSION['steam_personastate'];
$steamprofile['realname'] = $_SESSION['steam_realname'];
$steamprofile['loccountrycode'] = $_SESSION['steam_loccountrycode'];
$steamprofile['locstatecode'] = $_SESSION['steam_locstatecode'];
$steamprofile['loccityid'] = $_SESSION['steam_loccityid'];
$steamprofile['primaryclanid'] = $_SESSION['steam_primaryclanid'];
$steamprofile['timecreated'] = $_SESSION['steam_timecreated'];
$steamprofile['uptodate'] = $_SESSION['steam_uptodate'];