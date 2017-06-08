# SteamLoginPHP
Steam Login PHP
## Instalation
Edit: **Config.php**
```php
$steamlogin['apikey'] = "API_KEY_HERE"; // Your Steam WebAPI-Key found at http://steamcommunity.com/dev/apikey
$steamlogin['domainname'] = "domain.local"; // The main URL of your website displayed in the login page
$steamlogin['logoutpage'] = "index.php"; // Page to redirect to after a successfull logout (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
$steamlogin['loginpage'] = "index.php"; // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning! 
```
## Login Button
### Login (1)
```php
loginbutton(1);
```
![Login Image 1](https://steamcommunity.com/public/images/signinthroughsteam/sits_01.png)
### Login (2)
```php
loginbutton(2);
```
![Login Image 1](https://steamcommunity.com/public/images/signinthroughsteam/sits_02.png)
### Login (3)
```php
loginbutton(3);
```
![Login Image 1](https://steamcommunity.com/public/images/signinthroughsteam/sits_small.png)
### Login (4)
```php
loginbutton(4);
```
![Login Image 1](https://steamcommunity.com/public/images/signinthroughsteam/sits_large_noborder.png)
### Login (5)
```php
loginbutton(5);
```
![Login Image 1](https://steamcommunity.com/public/images/signinthroughsteam/sits_large_border.png)
## Logout Button
```php
logoutbutton();
```
## Get informations
### SteamID
```php
$steamprofile['steamid'];
```
### CommunityVisibilityState
```php
$steamprofile['communityvisibilitystate'];
```
### Profilestate
```php
$steamprofile['profilestate'];
```
### Personaname
```php
$steamprofile['personaname'];
```
### Last logoff
```php
$steamprofile['lastlogoff'];
```
### profileURL
```php
$steamprofile['profileurl'];
```
### profileURL PERM
```php
$steamprofile['profileurlperm'];
```
### Avatar
```php
$steamprofile['avatar'];
```
### Medium Avatar
```php
$steamprofile['avatarmedium'];
```
### Full Avatar
```php
$steamprofile['avatarfull'];
```
### Personastate
```php
$steamprofile['personastate'];
```
### Realname
```php
$steamprofile['profileurl'];
```
### Primary Clan ID
```php
$steamprofile['primaryclanid'];
```
### Time created
```php
$steamprofile['timecreated'];
```
### Uptodate
```php
$steamprofile['uptodate'];
```
### Country
```php
$steamprofile['loccountrycode'];
```
### State
```php
$steamprofile['locstatecode'];
```
### City
```php
$steamprofile['loccityid'];
```