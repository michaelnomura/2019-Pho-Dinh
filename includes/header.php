<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?=$myTitle?></title>
    <meta name="viewport" content="width=device-width" />
    <!--Dont search for my page-->
    <meta name="robots" content="noindex,nofollow" />
    
    <!--Refers to Javascript file-->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
   
    <!--Refers to CSS files-->
    <link rel="stylesheet" href="css/phoDinh.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link href="https://fonts.googleapis.com/css?family=Molle:400i" rel="stylesheet"> 
</head>    

<body>         
    <header>
    <a class="titleBar" href="index.php"><h1 id='title'>&nbsp;&nbsp;Pho Dinh</h1></a>        
    <nav id="cssmenu" class='align-center'>
    <!--List-->
        <ul>
        <?=makeLinks($nav1)?>
      </ul>
    </nav>
    </header>