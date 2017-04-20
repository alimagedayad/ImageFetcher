<html><head><title>ImageFetcher</title></head></html>
<?php
session_start();
?>
<html>
    <head>
        
        <link rel = "stylesheet" type = "text/css" href = "style.css"/>
    </head>
<body>






<?php
// Echo session variables that were set on previous page
echo "<div class = info>";
echo  "Your Facebook UserID is " ."<strong>" .  $_SESSION["fbid"] .  "</strong>" ."<br>";
echo "Your twitter username is " ."<strong>" . "@" . $_SESSION["twitter"] . "</strong>" . "<br>";
echo "Your Gravatar Email" . "&nbsp" ."<strong>" . $_SESSION["gravemail"] . "</strong>" . "<br>";
echo "Your Google Email" . "&nbsp" . "<strong>" .  $_SESSION["gravemail"] . "</strong>" . "<br>";
echo "</div>";
function G() {
    $url = 'https://www.gravatar.com/avatar/';
    $email = $_SESSION["gravemail"];
    $default = 'monsterid';
    $size = 480;
    $grav_url = $url.'?gravatar_id='.md5( strtolower($email) ).
        '&default='.urlencode($default).'&size='.$size;
   
    $a = '<div class = "gravatar"> <img alt = "No Image !" src="' . $grav_url . '"> </div>';
    echo $a;
}
//Facebook Function
function F() {
    $c = $_SESSION["fbid"];
    
    $d = '<div class = "facebook"> <img alt = "No Image !" src="' . "https://graph.facebook.com/v2.2/" . $c . "/picture?width=320&height=334" .'"/> </div>';
    echo $d;
}
//Twitter Funcation
function T() {
    $b = $_SESSION["twitter"];    
    echo ' <div class = "twitter">  <img alt = "No Image !" src="' . "https://twitter.com/". $b . "/profile_image?size=original" .'"/>  </div>';
}
//Google+ Function
function GP(){
    $c = $_SESSION["gravemail"];
    $a = "http://www.avatarapi.com/js.aspx?email=". $c ."&size=440";
    $b = file_get_contents($a);
    echo '<div class = "gravatar">' . file_get_contents($a) . "</div>";
}
//Messenger Code Function
function MC()
{
    echo "Coming soon";
}
//Instagram Code Function
function I()
{
    require ('asset/i.php');
}
?>
<h1>Your FB Image</h1>
<h1><?php F(); ?></h1>
<br>
<h1>Your Twitter Image</h1>
<h1><?php T(); ?></h1>
<br>
<h1>Your Gravatar Image</h1>
<h1><?php G() ?></h1>
<h1>Your Google+ Image</h1>
<h1><?php GP() ?></h1>
</body>
</html>