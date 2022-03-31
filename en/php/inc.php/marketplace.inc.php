<section class="marketplace" >
        <h1> Marketplace</h1>
        <div class="main-container">
            <div   class="items">
                    <div class="item-container"  data-auto-play-interval="4" data-draggable="true">
					<?php
					$arr = Array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
					foreach ($arr as &$item) {
						$item++;
						echo'<div class="item">
						<img src="PNG/donor.png" alt=""></div>
						<div class="subtitle">
							<h4>Product name</h4>
						<h5>item type</h5>
						<h6>Price/Donation</h6>
						</div>
						<div class="user">
							<div class="user-profil"> <i class="fa-solid fa-user-circle"></i> </div>
							<a href="#" class="acount_product" style="color: #f5aa18;">user_name</a>
							<a href="index.php?ref=product&lang='.$lang.'">item'.$item.'</a>
						</div>';
					} 
					?>
                    </div>     
            </div>
		<form class="form">
                    <div class="container-connect">
                        <h3 class="title">Login</h3>
                        <div class="login">
                            <div class="email">
                                <input type="email" name="" id="" placeholder="E-mail" required²>
                            </div>
                            <div class="password">
                                <input type="password" name="" id="" placeholder=Password required>
                            </div>  
                            <div class="btn-login_suscription">
                                <button class="login-btn" type="submit">Login</button>
                                <button class="suscribe-btn" type="submit">Suscribe</button>
                            </div>
                        </div>
                        
                    </div>
                </form>
    


	</section>
