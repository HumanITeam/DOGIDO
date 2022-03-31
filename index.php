<!DOCTYPE html>
<?php
session_start();
if(isset($_GET) && isset($_GET["lang"]) && ($_GET["lang"] != "")) {
			$lang = $_GET["lang"];
			$_SESSION["currentlang"] = $lang;
		}else{
			$lang = "en";
			header("Location: index.php?ref=accueil&lang=".$lang); 
		}
		if(isset($_GET) && isset($_GET["ref"]) && ($_GET["ref"] != "")) {
			$page = $_GET["ref"];
			$_SESSION["currentpage"] = $page;
			if(isset($_SESSION["currentlang"])){
			$_SESSION["currentlang"] = $lang;
		}
		include($lang.'/header.php');
			switch($page){
				case "main-page":
					include($lang."/php/main.php");
				break;
				case "about-us":
					include($lang."/php/aboutus.php");
				break;
				case "account":
					include($lang."/php/account.php");
				break;
				case "sign":
					include($lang."/php/sign.php");
				break;
				case "cart":
					include($lang."/php/cart.php");
				break;
				case "product":
					include($lang."/php/product.php");
				break;
				case "trade":
					include($lang."/php/trade.php");
				break;
				case "shipper-terms":
					include($lang."/php/shipper_terms.php");
				break;
				case "terms":
					include($lang."/php/digido_terms.php");
				break;
				case "legal-information":
					include($lang."/php/legal.php");
				break;
				case "privacy-policy":
					include($lang."/php/policy.php");
				break;
				case "feedback":
					include($lang."/php/feedback.php");
				break;
			}
		} else { 
			$page = "main-page";
			header("Location: index.php?ref=".$page."&lang=".$lang); 
		}
		include($lang."/footer.php");
   ?>




    <script src="js/script.js"></script>
    <script src="js/parallax.js"></script>
</body>
</html>