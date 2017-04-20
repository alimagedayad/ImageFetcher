<?php
function T() {
    $b = "";
   $c = ' <div class = "twitter">  <img src="' . "https://twitter.com/". $b . "/profile_image?size=original" .'"/>  </div>';

if ($c == false){
    echo '<img src = "" alt = "No Image"/>';}
else if ($c == true){
    echo $c;
}
}
T();
?>