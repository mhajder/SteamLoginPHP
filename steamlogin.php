<?php
ob_start();
session_start();

function loginbutton($buttonstyle = "1") {
	$button['1'] = "01";
	$button['2'] = "02";
	$button['3'] = "small";
	$button['4'] = "large_noborder";
	$button['5'] = "large_border";
	$button = "<a href='?login'><img src='//steamcommunity.com/public/images/signinthroughsteam/sits_".$button[$buttonstyle].".png'></a>";
	
	echo $button;
}
function logoutbutton() {
    echo "<form action='' method='get'><button class='logoutbutton' name='logout' type='submit'>Logout</button></form>";
}
if (isset($_GET['login'])) {
    require 'openid.php';
    try {
        require 'Config.php';
        $openid = new LightOpenID($steamlogin['domainname']);
        
        if (!$openid->mode) {
            $openid->identity = 'http://steamcommunity.com/openid';
            header('Location: ' . $openid->authUrl());
        } elseif ($openid->mode == 'cancel') {
            echo 'User has canceled authentication';
        } else {
            if ($openid->validate()) {
                $id = $openid->identity;
                $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                preg_match($ptn, $id, $matches);
                
                $_SESSION['steamid'] = $matches[1];
                if (!headers_sent()) {
                    header('Location: '.$steamlogin['loginpage']);
                    exit;
                } else {
                    ?>
    <script type="text/javascript">
        window.location.href = "<?$steamlogin['loginpage']?>";
    </script>
    <noscript>
        <meta http-equiv="refresh" content="0;url=<?$steamlogin['loginpage']?>" /> 
	</noscript>
    <?php exit;
                } 
            } else {
                echo "User is not logged in.\n";
            }
        }
    } catch (ErrorException $e) {
        echo $e->getMessage();
    }
}
if (isset($_GET['logout'])) {
    require 'Config.php';
    session_unset();
    session_destroy();
    header('Location: '.$steamlogin['logoutpage']);
    exit;
}
if (isset($_GET['update'])) {
    unset($_SESSION['steam_uptodate']);
    require 'userInfo.php';
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}
?>