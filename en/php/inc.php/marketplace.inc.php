<section class="marketplace" >
        <h1> Marketplace</h1>
        <div class="midle">
            <div   class="items">
                <div class="position-relative">
                    <div class="container-item"  data-auto-play-interval="4" data-draggable="true">
					<?php
					$arr = Array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
					foreach ($arr as &$item) {
						$item++;
						echo'<div class="item"><a href="index.php?ref=product&lang='.$lang.'">item'.$item.'</a></div>';
					}
					?>
                    </div>     
            </div>
    


	</section>