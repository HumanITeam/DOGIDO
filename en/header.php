<?php
echo'<html lang="'.$lang.'">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="keywords" content="DigiDo, second, hand, refurbished, refurbishment, donation, marketplace, hardware, electronic, HumanIT"/>
	<meta name="description" content="Digital marketplace for second-hand hardware"/>
	<link rel="icon" href="images/favicon.ico" />
    <title>DigiDo</title>
    <script src="https://kit.fontawesome.com/07d968da36.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="alternate" href="index.php?ref='.$page.'&lang=fr" hreflang="fr"/>
	<link rel="alternate" href="index.php?ref='.$page.'&lang=vn" hreflang="vn"/>
</head>
<body>';
?>
			
 <header class="top-page">
        <nav class="navbar-container">
            <div class="con-logo"id="navbar__logo" >
             <a id="title" href="#top-page"> <p>DigiDo</p></a>
            </div>
			<span id="triggermenu">Languages<div id="flag">&#x1F1EC;&#x1F1E7;</div></span>
			<?php
			echo'<nav id="langswitch">
				<a href="index.php?ref='.$page.'&lang=fr">&#x1F1EB;&#x1F1F7;</a>
				<a href="index.php?ref='.$page.'&lang=en">&#x1F1EC;&#x1F1E7;</a>
				<a href="index.php?ref='.$page.'&lang=vn">&#x1F1FB;&#x1F1F3;</a>
			</nav>';
			?>
			<script type="text/javascript" src="js/langswitch.min.js"></script>
            <div class="navbar__toggle" id="mobile-menu">
                <a class="bar"></a>
                <a class="bar"></a>
                <a class="bar"></a>
            </div>
            <ul class="navbar__menu">
                <?php
				echo'<li class="navbar__item"> <a href="index.php?ref=main&lang='.$lang.'"  class="navbar__link" id="active_page" >Home</a> </li>
				
                <li class="navbar__item"> <a href="#marketplace" class="navbar__link">Marketplace</a> </li>
                
                <li class="navbar__item"> <a href="index.php?ref=main&lang='.$lang.'" class="navbar__link" class="navbar__link">Contacts</a> </li>
                <li class="navbar__item"> <a href=""  class="navbar__link">About us</a> </li>
           </ul>
           <div class="search-bar ">
                <input class="search_txt"  type="text" placeholder="search"> 
                <a href="" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
           <div class="btns">
                <li class="btn-sign_in"><a href="index.php?ref=account&lang='.$lang.'">sign in </a></li>
                <li class="btn-suscribe"><a href="">Get started </a></li>
            </div>
        </nav> ';
		?>
        <img id="sec1" src="img/shape (3).png" alt="">
        <img id="sec2" src="img/shape (3).png" alt="">
        <img id="sec3" src="img/shape (3).png" alt="">
        <img id="sec3_" src="img/shape (3).png" alt="">
    </header>