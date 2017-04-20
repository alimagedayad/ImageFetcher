<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type = "text/css" href = "style.css"/>
<title>ImageFetcher</title>
</head>
<body>
<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']?>">
<input type = "text" placeholder = "Facebook UserID" name = "u"/>
<br>
<input type = "text" placeholder = "Twitter Username" name = "p"/>
<br>
<input type= "email" placeholder = "Gravatar & Google Email" name = "g"/>
<br><br><br>
<input type = "submit"></input>
</form>
</body>
</html>
<?php


/*$a = mysql_real_escape_string($a);
$b = mysql_real_escape_string($b);*/

$c = "6";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$conn = new mysqli($servername, $username, $password, $dbname);
$u = empty($u);
$p = empty($p);
$g = empty($g);
$u = (isset($_POST['u']) ? $_POST['u'] : null);
$p = (isset($_POST['p']) ? $_POST['p'] : null);
$g = (isset($_POST['g']) ? $_POST['g'] : null);
$a = mysqli_real_escape_string($conn,$u);
$b = mysqli_real_escape_string($conn,$p);
$c = mysqli_real_escape_string($conn,$g);
$_SESSION["fbid"] = $u;
$_SESSION["twitter"] = $p;
$_SESSION["gravemail"] = $g;
$verify = "g";
/*echo "Session variables are set.";*/
$sql  = "INSERT INTO `users` (`id`, `fbuserid`, `twitteruser`,`gravemail`) VALUES (NULL, '$a', '$b','$c')";
$sql = empty($sql);
$sql = "INSERT INTO `users` (`id`, `fbuserid`, `twitteruser`,`gravemail`) VALUES (NULL, '$a', '$b','$c')";
if(isset($u[0]) AND !empty($u[0]) or isset($b[1]) AND !empty($b[1]) or isset($c[1]) AND !empty($c[1])  ){
	echo '<br>'.'<button class = "take" type="button"><a href = "index2.php">Take me to the pics</a></button>';
}

?>