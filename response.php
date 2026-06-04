<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

ini_set('session.gc_maxlifetime', 86400);
session_start();

require_once("includes/functions.php");

require_once("includes/mobile-detect.php");
$detect = new Mobile_Detect;
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<base href="<?php directory(); ?>" target="_top">

<meta name="robots" content="index, follow" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="<?php echo $gen_name; ?>, Coins">
<meta name="author" content="<?php echo $gen_name; ?>">
<meta name="description" content="Response - <?php echo $full_gen_name; ?>"/>
<link rel="canonical" href="<?php echo $actual_link; ?>"/>
<link rel="alternate" href="<?php echo $domain; ?>" hreflang="en-ng"/>

<link rel="shortcut icon" href="<?php echo new_version("{$images}favicon.png"); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo new_version("{$images}favicon.png"); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo new_version("{$images}favicon.png"); ?>">
<title>Response - <?php echo $full_gen_name; ?></title>
  
<!-- Favicons-->
<link rel="shortcut icon" href="<?php echo new_version("{$images}favicon.png"); ?>">
<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="<?php echo new_version("{$images}favicon.png"); ?>">
<!-- For iPhone -->
<meta name="msapplication-TileColor" content="#b20">
<meta name="msapplication-TileBackground" content="#000">
<meta name="msapplication-TileImage" content="<?php echo new_version("{$images}favicon.png"); ?>">
<!-- For Windows Phone -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">

<meta property="og:url" content="<?php directory(); ?>" /> 
<meta property="og:type" content="article" />
<meta property="og:title" content="Response - <?php echo $full_gen_name; ?>" /> 
<meta property="og:description" content="Response - <?php echo $full_gen_name; ?>" /> 
<meta property="og:image" content="<?php directory(); echo new_version("{$images}logos/yomijojolo-logo.png"); ?>" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="140" />
<meta property="og:image:height" content="140" />

<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
<link type="text/css" rel="stylesheet" href="<?php echo new_version("css/style.css"); ?>" />
</head>

<body>

<?php //require_once("includes/upper.php"); ?>

<?php
if(isset($_SESSION["msg"])){
echo $_SESSION["msg"];
unset($_SESSION["msg"]);
}
?>

<div class="home-body-wrapper"> 
<div class="home-body align-center"> 

<img src="images/bar-code.png">

</div>
</div>

<?php require_once("includes/footer.php"); ?>