<section  id="marketplace" >
    <h1>Marketplace</h1>
        <div   class="main-container">
		<div class="items">
                <div class="item-container" >
		<?php
		
            
					

					$arr = Array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
					foreach ($arr as &$item) {
						$item++;
						echo'<div class="item">

						<img src="PNG/donor.png" alt="">

						<div class="subtitle">
							<h4>Nom du produit</h4>
							<h5>Type d&apos;équipement</h5>
							<h6>Prix/Donation</h6>
						</div>
						<div class="user">
							<div class="user-profil"> <i class="fa-solid fa-user-circle"></i> 
						</div>
                                		<a href="#" class="acount_product" style="color: #f5aa18;">Nom d&apos;utilisateur</a>
							<a href="index.php?ref=product&lang='.$lang.'">item'.$item.'</a>
						</div>
						</div>';
					} 
					echo'</div>     
            </div>';
					include($lang."/php/sign.php");
					?>
                    
    <br>
  <br>
</section>
