<?php
/* ****************************** */
/* HEXCRAWL TEMPLATE GENERATOR

intro.php -- slides to set tone, rules, character creation choices

*/
/* ****************************** */

$nextState = $_POST["nextstate"];
$gameMode = $_POST["mode"];
$gameState = $nextState;
/* error on loading slide */
$slideDesign = "<html><body><strong style=\"font: bold 1.0em/1.2em arial, helvetica, sans-serif; color: #cc0000\";>Oops. Game template did not load.</strong></body></html>";

if ($nextState == "") {$gameState = "start";}

/* GAME-SPECIFIC GLOBAL SETTINGS */

$GameName = "Reunion Mission";
$globalCSS = "https://pingstanton.com/hexcrawl/global.css";
$HTMLmetadata = "";

/* INTRO SLIDE 01 / Title Card and Carl Sagan Cosmos quote */
if ($gameState == "start") {
$slideDesign = "<!DOCTYPE html>
<html>
<head>
<title>$GameName</title>
<link rel=\"stylesheet\" href=\"$globalCSS\">
<style type=\"text/css\">
body {background-color: #000; height: 100vh;
	background-color: #000; background-image:url(https://pingstanton.com/hexcrawl/img/bkgd-reunionmission.png);
	background-position: center top; background-repeat: no-repeat;
	background-attachment: fixed;
	animation: backgroundTransition 4s linear;}
.w01 {width: 100%; min-width: 500px;
	margin-right:auto; margin-left:auto; margin-top: 0; margin-bottom: 0;
	padding: 0; text-align: left;
	}

.soundtrack {position: absolute; top: 20px; left: 15%;
	animation: opacityTransition 5s ease forwards;
	}

.subbtn {position: absolute; top: 20px; right: 20%;
	margin: 10px 0 0 0; padding: 7px 30px 5px 30px; 
	background-color: #fff; border-radius: 30px;
	border: 2px solid #fff;		
	font: bold 0.8em/1.2em arial, helvetica, sans-serif; letter-spacing: 3px; color: #333; 
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);	
	animation: opacityTransition 5s ease forwards;
	}
.subbtn:hover {
	transition: 0.9s;
	background-color: #0099cc; color: #fff;
	border: 2px solid #0099cc;		
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50);
}

.fdIn09 {position: absolute; top: 420px; right: 20%;
	width: 64%; margin: 0; padding: 5px 20px;
	background-color: rgba(66, 66, 66, 0.5); border-radius: 30px;
	border: 2px solid #666;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif;
	color: #fff;
	animation: opacityTransition 6s ease forwards;
	}
.fdIn10 {animation: opacityTransition 5s ease forwards;}

@keyframes backgroundTransition {
	0% {background-color: #ff0000;}
	20% {background-color: #cc0000;}
	100% {background-color: #000000;}
}
@keyframes opacityTransition {
	0% {opacity: 0;}
	50% {opacity: 0;}
	100% {opacity: 1;}
}
</style>
</head>
<body>
<a href=\"https://open.spotify.com/playlist/1avEJjPqg8ZuvWTxXHffN7?si=FzWmR5rMQhCK-4LZrp1F7A\" target=\"_blank\"><img src=\"img/suggestedsoundtrack.png\" class=\"soundtrack\" /></a>
<form action=\"intro.php\" method=\"post\">
<input type=\"hidden\" id=\"nextstate\" name=\"nextstate\" value=\"intro03\">
<input type=\"submit\" class=\"subbtn\" value=\"continue...\" />
</form>
<div class=\"w01\">
<div class=\"fdIn09\"><p>\"The surface of the Earth is the shore of the cosmic ocean. From it we have learned most of what we know. Recently, we have waded a little out to sea, enough to dampen our toes or, at most, wet our ankles. The water seems inviting. The ocean calls. Some part of our being knows this is from where we came. We long to return. These aspirations are not, I think, irreverent, although they may trouble whatever gods may be.\"</p>
<p class=\"fdIn10\" align=\"right\">- Carl Sagan, <em>Cosmos</em> (1980)</p></div>
</div></body>
</html>";
}

/* INTRO SLIDE 03 / history blurb with spacesuit image */
if ($gameState == "intro03") {
$slideDesign = "<!DOCTYPE html>
<html>
<head>
<title>$GameName</title>
$HTMLmetadata
<link rel=\"stylesheet\" href=\"$globalCSS\">
<style type=\"text/css\">
body {
	background-color: #999999; background-image:url(https://pingstanton.com/hexcrawl/img/bkgd-spacesuit.jpg);
	background-position: center top; background-repeat: no-repeat; background-attachment: fixed;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif; color: #fff;
	}

.w01 {width: 100%; min-width: 500px; margin: 0; padding: 0; text-align: left;}

.blk01 {position: absolute; top: 50px; left: 5%; width: 25%; height: auto;
	margin: 0; padding: 5px 25px;
	background-color: #da6d03; border-radius: 30px;
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);
	font: bold 1.0em/1.2em arial, helvetica, sans-serif; color: #fff;
	animation: fadeinTransition 4s ease forwards;
}

.subbtn {position: absolute; top: 50px; right: 20%;
	margin: 0; padding: 7px 30px 5px 30px; 
	background-color: #fff; border-radius: 30px;
	border: 2px solid #fff;	
	font: bold 0.8em/1.2em arial, helvetica, sans-serif; letter-spacing: 3px; color: #da6d03; 
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);	
	animation: fadeinTransition 10s ease forwards;
	}
.subbtn:hover {
	transition: 0.9s;	
	background-color: #ffcc00; color: #fff;
	border: 2px solid #ffcc00;	
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50);
}

.fdIn10 {animation: opacityTransition 8s ease forwards;}

@keyframes backgroundTransition {
	from {background-color: #fff;}
	to {background-color: #3a520a;}
}
@keyframes opacityTransition {
	0% {opacity: 1;}
	20% {opacity: 1;}
	100% {opacity: 0;}
}
@keyframes fadeinTransition {
	0% {opacity: 0;}
	20% {opacity: 0;}
	100% {opacity: 1;}
}
</style>
</head>
<body><div class=\"w01\">
<div class=\"blk01\">
<p>We humans eventually did go to the stars. Our naive optimism pushed us to reach distant worlds, to chart the vast unknown.</p>
<p>Such hubris was a mistake.</p>
<p>The signal came like an invitation, or perhaps a whisper. With eager excitement, our finest scientists established communication, a cautious first contact. But as the initial exchange began, every colony, every ship, every hub of human activity suddenly fell silent.</p>
<p>Those who remained on Earth watched in horror as screens went dark, messages ceased, and all traces of our grand exploration vanished.</p>
</div>
<form action=\"intro.php\" method=\"post\">
<input type=\"hidden\" id=\"nextstate\" name=\"nextstate\" value=\"intro04\">
<input type=\"submit\" class=\"subbtn\" value=\"continue...\" />
</form>
</div></body>
</html>";
}

/* INTRO SLIDE 04 / name your starship */
if ($gameState == "intro04") {
$slideDesign = "<!DOCTYPE html>
<html>
<head>
<title>$GameName</title>
$HTMLmetadata
<link rel=\"stylesheet\" href=\"$globalCSS\">
<style type=\"text/css\">
body {
	background-color: #999999; background-image:url(https://pingstanton.com/hexcrawl/img/bkgd-spacesuit.jpg);
	background-position: center top; background-repeat: no-repeat; background-attachment: fixed;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif; color: #fff;
	}

.w01 {width: 100%; min-width: 500px; margin: 0; padding: 0; text-align: left;}

.blk01 {position: absolute; top: 100px; right: 10%; width: 25%; height: auto;
	margin: 0; padding: 5px 25px;
	background-color: #da6d03; border-radius: 30px;
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);
	font: bold 1.0em/1.2em arial, helvetica, sans-serif; color: #fff;
	animation: fadeinTransition 4s ease forwards;
}

.subbtn {position: absolute; top: 50px; right: 20%;	
	margin: 0; padding: 7px 30px 5px 30px; 
	background-color: #fff; border-radius: 30px;
	border: 2px solid #fff;	
	font: bold 0.8em/1.2em arial, helvetica, sans-serif; letter-spacing: 3px; color: #da6d03; 
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);	
	animation: fadeinTransition 10s ease forwards;
	}
.subbtn:hover {
	transition: 0.9s;	
	background-color: #ffcc00; color: #fff;
	border: 2px solid #ffcc00;	
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50);
}

.fdIn10 {animation: opacityTransition 8s ease forwards;}

@keyframes backgroundTransition {
	from {background-color: #fff;}
	to {background-color: #3a520a;}
}
@keyframes opacityTransition {
	0% {opacity: 1;}
	20% {opacity: 1;}
	100% {opacity: 0;}
}
@keyframes fadeinTransition {
	0% {opacity: 0;}
	20% {opacity: 0;}
	100% {opacity: 1;}
}
</style>
</head>
<body><div class=\"w01\">
<div class=\"blk01\"><form action=\"intro.php\" method=\"post\">
<p>The silence began a generation ago. Those living across scattered worlds were abandoned, alone, lost.</p>
<p>It is time to try again and see who - or what - is still out there. You command a starship on a mission to again explore our neighboring star systems.</p> 
<p>NAME YOUR STARSHIP:<br />
<input size=\"30\" type=\"text\" id=\"name\" name=\"name\" /></p>
<p>You will not journey alone. Two androids make up your crew...
</div>
<input type=\"hidden\" id=\"nextstate\" name=\"nextstate\" value=\"intro05\">
<input type=\"submit\" class=\"subbtn\" value=\"continue when ready...\" />
</form>
</div></body>
</html>";
}

$name = $_POST["name"]; /* starship name */
if ($name == "") {$name = "REUNION SHIP I";}

/* INTRO SLIDE 05 / the androids */
if ($gameState == "intro05") {
$slideDesign = "<!DOCTYPE html>
<html>
<head>
<title>$GameName</title>
$HTMLmetadata
<link rel=\"stylesheet\" href=\"$globalCSS\">
<style type=\"text/css\">
body {
	background-color: #000;
	background-attachment: fixed;
	color: #fff;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif;
	}

.w01 {
	width: 100%; min-width: 500px;
	height: 100vh;
	margin: 0;
	padding: 0; 
	background-image:url(https://pingstanton.com/hexcrawl/img/bkgd-androids.jpg);
	background-position: center top;
	background-repeat: no-repeat;
	text-align: left;
	animation: fadeinTransition 3s ease forwards;
	}

.ayi {position: absolute;
	top: 55%; right: 55%;
	width: 350px; height: auto;
	background-color: rgba(66, 66, 66, 0.8);
	border-radius: 30px;
	border: 2px solid #666;
	margin: 0; padding: 5px 25px;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif; 
	color: #99ffff; text-align: right;
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);
	animation: fadeinTransition 7s ease forwards;
}
.ayi h2 {margin: 0; padding: 0; font: bold 1.0em/1.0em arial, helvetica, sans-serif; color: rgba(153, 255, 255, 0.9);}
.ayiname {font: bold 3.0em/1.0em arial, helvetica, sans-serif; letter-spacing: -1px; padding: 0 0 0 2px; color: rgba(153, 255, 255, 0.9);}
.ayi h3 {margin: 0; padding: 0 0 5px 0;
	font: normal 0.8em/1.1em arial, helvetica, sans-serif; letter-spacing: 1px; color: #ccc;}
.ayi p {margin: 4px 0; padding: 0; font: bold 0.8em/1.0em arial, helvetica, sans-serif; color: rgba(153, 255, 255, 0.9);}
.ayi td {padding: 5px; font: normal 0.9em/1.0em arial, helvetica, sans-serif; color: #e0e0e0; text-align: right;}
.ayi td strong {font: bold 1.1em/1.0em arial, helvetica, sans-serif; color: rgba(153, 255, 255, 0.9);}

.shu {position: absolute;
	top: 55%; left: 55%;
	width: 350px; height: auto;
	background-color: rgba(66, 66, 66, 0.8);
	border-radius: 30px;
	border: 2px solid #666;
	margin: 0; padding: 5px 25px;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif; 
	color: #99ffff;
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);
	animation: fadeinTransition 7s ease forwards;
}
.shu h2 {margin: 0; padding: 0; font: bold 1.0em/1.0em arial, helvetica, sans-serif; color: rgba(255, 204, 0, 0.9);}
.shuname {font: bold 3.0em/1.0em arial, helvetica, sans-serif; letter-spacing: -1px; padding: 0 0 0 2px; color: rgba(255, 204, 0, 0.9);}
.shu h3 {margin: 0; padding: 0 0 5px 0;
	font: normal 0.8em/1.1em arial, helvetica, sans-serif; letter-spacing: 1px; color: #ccc;}
.shu p {margin: 4px 0; padding: 0; font: bold 0.8em/1.0em arial, helvetica, sans-serif; color: rgba(255, 204, 0, 0.9);}
.shu td {padding: 5px; font: normal 0.9em/1.0em arial, helvetica, sans-serif; color: #e0e0e0; text-align: left;}
.shu td strong {font: bold 1.1em/1.0em arial, helvetica, sans-serif; color: rgba(255, 204, 0, 0.9);}
.blk01 {position: absolute;	top: 50px; right: 10%;
	width: 25%; height: auto; margin: 0; padding: 5px 25px;
	background-color: #da6d03;
	border-radius: 30px;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif; color: #fff;
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);
	animation: fadeinTransition 4s ease forwards;
}

.subbtn {position: absolute; top: 30px; right: 50px;
	margin: 0; padding: 7px 30px 5px 30px; 
	background-color: #fff; border-radius: 30px;
	border: 2px solid #fff;	
	font: bold 0.8em/1.2em arial, helvetica, sans-serif; letter-spacing: 3px; color: #da6d03; 
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);	
	animation: fadeinTransition 12s ease forwards;
	}
.subbtn:hover {
	transition: 0.9s;	
	background-color: #0099cc; color: #fff;
	border: 2px solid #0099cc;	
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50);
}

.fdIn10 {animation: opacityTransition 8s ease forwards;}

@keyframes backgroundTransition {
	from {background-color: #fff;}
	to {background-color: #3a520a;}
}
@keyframes opacityTransition {
	0% {opacity: 1;}
	20% {opacity: 1;}
	100% {opacity: 0;}
}
@keyframes fadeinTransition {
	0% {opacity: 0;}
	20% {opacity: 0;}
	100% {opacity: 1;}
}
</style>
</head>
<body><div class=\"w01\">&nbsp;<form action=\"intro.php\" method=\"post\">

<div class=\"ayi\">
<h2>Meet&nbsp;&nbsp; <strong class=\"ayiname\">AYI</strong>&nbsp;&nbsp;&nbsp;<img src=\"img/android.ayicharacters.png\" /><h2>
<h3>Your Palo/Wren Industries tactical android.<br />
Her personality algorithm is a bit \"mean girl.\"</h3>
<p>CHOOSE HER SKILL SPECIALTY NOW</p>
<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<tr>
<td width=\"99%\" valign=\"middle\"><strong>DEFENSES</strong><br /><em>shields, EMP flak, damage control</em></td>
<td width=\"1%\" valign=\"middle\"><input type=\"radio\" id=\"feature01\" name=\"feature01\" value=\"defenses\" checked></td>
</tr>
<tr>
<td width=\"99%\" valign=\"middle\"><strong>DRONES</strong><br /><em>boarding pods, mobile survey scouts</td>
<td width=\"1%\" valign=\"middle\"><input type=\"radio\" id=\"feature01\" name=\"feature01\" value=\"drones\"></td>
</tr>
<tr>
<td width=\"99%\" valign=\"middle\"><strong>FIREPOWER</strong><br /><em>railguns, meson cannons, missile bays</td>
<td width=\"1%\" valign=\"middle\"><input type=\"radio\" id=\"feature01\" name=\"feature01\" value=\"firepower\"></td>
</tr>
<tr>
<td width=\"99%\" valign=\"middle\"><strong>STEALTH</strong><br /><em>sensor masking, cloaking countermeasures</td>
<td width=\"1%\" valign=\"middle\"><input type=\"radio\" id=\"feature01\" name=\"feature01\" value=\"stealth\"></td>
</tr>
</table>
</div>

<div class=\"shu\">
<h2>Meet&nbsp;&nbsp; <strong class=\"shuname\">SHUSHU</strong>&nbsp;&nbsp;&nbsp;<img src=\"img/android.shushucharacters.png\" /><h2>
<h3>Your Xidyne Corp operations integration android.<br />
His personality algorithm is set for encouragement.</h3>
<p>CHOOSE HIS SKILL SPECIALTY NOW</p>
<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
<tr><td width=\"1%\" valign=\"middle\"><input type=\"radio\" id=\"feature02\" name=\"feature02\" value=\"biolabs\" checked></td>
<td width=\"99%\" valign=\"middle\"><strong>BIO&nbsp;LABS</strong><br /><em>biomass supply, clone incubators</em></td></tr>
<tr><td width=\"1%\" valign=\"middle\"><input type=\"radio\" id=\"feature02\" name=\"feature02\" value=\"databanks\"></td>
<td width=\"99%\" valign=\"middle\"><strong>DATA BANKS</strong><br /><em>repository of technical and cultural information</td></tr>
<tr><td width=\"1%\" valign=\"middle\"><input type=\"radio\" id=\"feature02\" name=\"feature02\" value=\"engineering\"></td>
<td width=\"99%\" valign=\"middle\"><strong>ENGINEERING</strong><br /><em>redundant power systems, fuel scoops</td></tr>
<tr><td width=\"1%\" valign=\"middle\"><input type=\"radio\" id=\"feature02\" name=\"feature02\" value=\"navigation\"></td>
<td width=\"99%\" valign=\"middle\"><strong>NAVIGATION</strong><br /><em>sublight engines, maneuvering thrusters</td></tr>
</table>
</div>

</div>
<input type=\"hidden\" id=\"nextstate\" name=\"nextstate\" value=\"intro06\">
<input type=\"hidden\" id=\"name\" name=\"name\" value=\"$name\">
<input type=\"submit\" class=\"subbtn\" value=\"continue after making selections...\" />
</form>

</div></body>
</html>";
}

$name = $_POST["name"]; /* starship name */
$feature01 = $_POST["feature01"]; /* Ayi specialty */
$feature02 = $_POST["feature02"]; /* Shushu specialty */
$setPick = mt_rand(1,50);
$visitedHex99601 = "no";
$visitedHex99602 = "no";
$visitedHex99603 = "no";
$visitedHex99700 = "no";
$visitedHex99701 = "no";
$visitedHex99702 = "no";
$visitedHex99703 = "no";
$visitedHex999798 = "no";
$visitedHex999800 = "no";
$visitedHex999801 = "no";
$visitedHex999802 = "no";
$visitedHex999897 = "no";
$visitedHex999898 = "no";
$visitedHex999899 = "no";
$visitedHex999900 = "no";
$visitedHex999901 = "no";
$visitedHex999997 = "no";
$visitedHex999998 = "no";
$visitedHex999899 = "no";
$visitedHex1000000 = "no";
$visitedHex1000001 = "no";
$visitedHex1000097 = "no";
$visitedHex1000098 = "no";
$visitedHex1000099 = "no";
$visitedHex1000100 = "no";
$visitedHex1000197 = "no";
$visitedHex1000198 = "no";
$visitedHex1000199 = "no";

/* INTRO SLIDE 06 / ready to launch */
if ($gameState == "intro06") {
$slideDesign = "<!DOCTYPE html>
<html>
<head>
<title>$GameName</title>
$HTMLmetadata
<link rel=\"stylesheet\" href=\"$globalCSS\">
<style type=\"text/css\">
body {
	background-color: #000;
	background-attachment: fixed;
	color: #fff;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif;
	}

.w01 {
	width: 100%; min-width: 500px;
	height: 100vh;
	margin: 0;
	padding: 0; 
	background-image:url(https://pingstanton.com/hexcrawl/img/bkgd-commandchair.jpg);
	background-position: center top;
	background-repeat: no-repeat;
	text-align: left;
	animation: fadeinTransition 3s ease forwards;
	}

.ship {position: absolute;
	top: 30px; left: 5%;
	width: 45%; height: auto;
	background-color: rgba(0,153,204,0.9);
	border-radius: 30px;
	border: 2px solid #666;
	margin: 0; padding: 5px 25px;
	font: bold 1.0em/1.2em arial, helvetica, sans-serif; 
	color: #fff;
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);
	animation: fadeinTransition 6s ease forwards;
}

.subbtn {
	position: absolute;
	top: 30px; right: 70px;	
	margin: 0; padding: 7px 30px 5px 30px; 
	border-radius: 30px;
	letter-spacing: 3px;
	font: bold 0.8em/1.2em arial, helvetica, sans-serif; 
	color: #da6d03; background-color: #fff;
	border: 2px solid #fff;		
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.25);	
	animation: fadeinTransition 9s ease forwards;
	}

.subbtn:hover {
	transition: 0.9s;
	border: 2px solid #00ff33;		
	background-color: #00ff33; color: #336633;
	-webkit-box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50); 
	box-shadow: 3px 3px 15px 5px rgba(0,0,0,0.50);
}

.fdIn10 {animation: opacityTransition 8s ease forwards;}

@keyframes backgroundTransition {
	from {background-color: #fff;}
	to {background-color: #3a520a;}
}
@keyframes opacityTransition {
	0% {opacity: 1;}
	20% {opacity: 1;}
	100% {opacity: 0;}
}
@keyframes fadeinTransition {
	0% {opacity: 0;}
	20% {opacity: 0;}
	100% {opacity: 1;}
}
</style>
</head>
<body><div class=\"w01\">&nbsp;
<div class=\"ship\">
<p>Some final reminders...
<p>CRYOSLEEP: Between stellar locations, <em>$name</em> will accelerate up to 7c (that's 70 percent the speed of light) and then decelerate the second half of the trip while approaching your destination. In ship's time, each short voyage is expected to last several years - and even longer in Earth perspective due to time dilation effects. You will safely sleep in suspended animation while Ayi and Shushu monitor the ship during each trip. Upon arrival, star system scans will be done automatically via the ship's sensors and reconnaissance drones.
<p>DIAGNOSTICS: Ayi and Shushu will summarize key operations for your convenience. Should an emergency arise, you will be revived early to give immediate direction.
<p>COMMUNICATIONS: Although something continues to interfere with signals beamed further than a half parsec or so, your ship may be able to communicate at close range with local colonies or other ships via simple gamma and radio waves. Incoming transmissions will be matched to recognized data protocols and automatically displayed for your review.
<p>Good luck, <em>$name</em>. $wellwishes
</div>
<form action=\"play.php\" method=\"post\">
<input type=\"hidden\" id=\"name\" name=\"name\" value=\"$name\">
<input type=\"hidden\" id=\"setPick\" name=\"setPick\" value=\"$setPick\">
<input type=\"hidden\" id=\"mode\" name=\"mode\" value=\"move\">
<input type=\"hidden\" id=\"nextmode\" name=\"nextmode\" value=\"move\">
<input type=\"hidden\" id=\"currentHex\" name=\"currentHex\" value=\"1000000\">
<input type=\"hidden\" id=\"stat01score\" name=\"stat01score\" value=\"100\">
<input type=\"hidden\" id=\"stat02score\" name=\"stat02score\" value=\"100\">
<input type=\"hidden\" id=\"stat03score\" name=\"stat03score\" value=\"100\">
<input type=\"hidden\" id=\"stat04score\" name=\"stat04score\" value=\"100\">
<input type=\"hidden\" id=\"stat05score\" name=\"stat05score\" value=\"100\">
<input type=\"hidden\" id=\"stat06score\" name=\"stat06score\" value=\"100\">
<input type=\"hidden\" id=\"stat07score\" name=\"stat07score\" value=\"100\">
<input type=\"hidden\" id=\"stat08score\" name=\"stat08score\" value=\"100\">
<input type=\"hidden\" id=\"faction01score\" name=\"faction01score\" value=\"0\">
<input type=\"hidden\" id=\"faction02score\" name=\"faction02score\" value=\"0\">
<input type=\"hidden\" id=\"faction03score\" name=\"faction03score\" value=\"0\">
<input type=\"hidden\" id=\"faction04score\" name=\"faction04score\" value=\"0\">
<input type=\"hidden\" id=\"faction05score\" name=\"faction05score\" value=\"0\">
<input type=\"hidden\" id=\"objective01\" name=\"objective01\" value=\"no\">
<input type=\"hidden\" id=\"objective02\" name=\"objective02\" value=\"no\">
<input type=\"hidden\" id=\"objective03\" name=\"objective03\" value=\"no\">
<input type=\"hidden\" id=\"objective04\" name=\"objective04\" value=\"no\">
<input type=\"hidden\" id=\"objective05\" name=\"objective05\" value=\"no\">
<input type=\"hidden\" id=\"objective06\" name=\"objective06\" value=\"no\">
<input type=\"hidden\" id=\"objective07\" name=\"objective07\" value=\"no\">
<input type=\"hidden\" id=\"objective08\" name=\"objective08\" value=\"no\">
<input type=\"hidden\" id=\"objective09\" name=\"objective09\" value=\"no\">
<input type=\"hidden\" id=\"objective10\" name=\"objective10\" value=\"no\">
<input type=\"hidden\" id=\"feature01\" name=\"feature01\" value=\"$feature01\">
<input type=\"hidden\" id=\"feature02\" name=\"feature02\" value=\"$feature02\">
<input type=\"hidden\" id=\"timeCount\" name=\"timeCount\" value=\"-5\">
<input type=\"hidden\" id=\"timeCountEarth\" name=\"timeCountEarth\" value=\"0\">
<input type=\"hidden\" id=\"turnCount\" name=\"turnCount\" value=\"0\">
<input type=\"hidden\" id=\"visitedHex999897\" name=\"visitedHex999897\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999997\" name=\"visitedHex999997\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000097\" name=\"visitedHex1000097\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000197\" name=\"visitedHex1000197\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999798\" name=\"visitedHex999798\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999898\" name=\"visitedHex999898\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999998\" name=\"visitedHex999998\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000098\" name=\"visitedHex1000098\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000198\" name=\"visitedHex1000198\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999899\" name=\"visitedHex999899\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999999\" name=\"visitedHex999999\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000099\" name=\"visitedHex1000099\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000199\" name=\"visitedHex1000199\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999700\" name=\"visitedHex999700\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999800\" name=\"visitedHex999800\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999900\" name=\"visitedHex999900\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000000\" name=\"visitedHex1000000\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000100\" name=\"visitedHex1000100\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999601\" name=\"visitedHex999601\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999701\" name=\"visitedHex999701\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999801\" name=\"visitedHex999801\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999901\" name=\"visitedHex999901\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex1000001\" name=\"visitedHex1000001\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999602\" name=\"visitedHex999602\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999702\" name=\"visitedHex999702\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999802\" name=\"visitedHex999802\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999603\" name=\"visitedHex999603\" value=\"no\" />
<input type=\"hidden\" id=\"visitedHex999703\" name=\"visitedHex999703\" value=\"no\" />

<input type=\"submit\" class=\"subbtn\" value=\"CLICK TO BEGIN\" />
</form>

</div></body>
</html>";
}

/* DISPLAY GAME IN BROWER */
echo "$slideDesign";

?>