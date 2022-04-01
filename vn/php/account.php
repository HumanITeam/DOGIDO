<?php
$req = mysqli_query($mysqli, 'SELECT * FROM users WHERE user_id="'.$_SESSION['user_id'].'";');
	while($result = $req->fetch_assoc()){
echo'
<div class="profile-sec">
<div class="profile-sec-top">
    <img class="profile-sec-img" src="img\profile-sec-photo.jpg" alt="">
    <div class="profile-sec-score">RATE : '.$result['rate'].'</div> 
</div>
    <div class="profile-sec-info">
        <h1>MY PROFILE</h1>
        <div class="profile-flex">
            <p>'.$result['first_name'].'</p><p>'.$result['last_name'].'</p>
        </div>
        <p>'.$result['email'].'</p>
        <p>'.$result['phone'].'</p>
        <p>'.$result['bio'].'</p>
    </div>
    <div class="profile-sec-info">
        <h1>PERSONAL INFORMATION</h1>
        <div class="profile-flex"><p>ADDRESS : '.$result['address_numb'].'</p>
		<p>'.$result['address_way'].'</p>
		<p>'.$result['address_city'].'</p>
		<p>'.$result['address_code'].'</p>
		</div>
        <div class="profile-flex"><p>CREDIT CARD : </p><p>credit card number</p><p>expiration date</p><p>encrypted cryptogram</p></div>
        <div class="profile-flex"><p>shipper VAT identification number</p></div>
        </div>
        <div class="profile-sec-info">
        <h1>YOUR PRODUCT</h1>
		
		<a href="index.php?ref=publish-offer&lang='.$lang.'">Créer une offre</a>
        <div class="profile-flex">
        <div class="item">

<img src="PNG/donor.png" alt="">

<div class="subtitle">
    <h4>Product name</h4>
    <h5>item type</h5>
    <h6>Price/Donation</h6>
</div>
<div class="user">
    <div class="user-profil"> <i class="fa-solid fa-user-circle"></i> 
</div>

                <a href="#" class="acount_product" style="color: #f5aa18;">user_name</a>
    <a href="index.php?ref=product&lang=en">item1</a>
</div>
</div>
<div class="item">

<img src="PNG/donor.png" alt="">

<div class="subtitle">
    <h4>Product name</h4>
    <h5>item type</h5>
    <h6>Price/Donation</h6>
</div>
<div class="user">
    <div class="user-profil"> <i class="fa-solid fa-user-circle"></i> 
</div>

                <a href="#" class="acount_product" style="color: #f5aa18;">user_name</a>
    <a href="index.php?ref=product&lang=en">item1</a>
</div>
</div>
<div class="item">

<img src="PNG/donor.png" alt="">

<div class="subtitle">
    <h4>Product name</h4>
    <h5>item type</h5>
    <h6>Price/Donation</h6>
</div>
<div class="user">
    <div class="user-profil"> <i class="fa-solid fa-user-circle"></i> 
</div>

                <a href="#" class="acount_product" style="color: #f5aa18;">user_name</a>
    <a href="index.php?ref=product&lang=en">item1</a>
</div>
</div>

        </div>
        </div>
        <div class="profile-sec-info">
        <h1>trades history</h1>
        <div class="profile-flex">
        <div class="item">

<img src="PNG/donor.png" alt="">

<div class="subtitle">
    <h4>Product name</h4>
    <h5>item type</h5>
    <h6>Price/Donation</h6>
</div>
<div class="user">
    <div class="user-profil"> <i class="fa-solid fa-user-circle"></i> 
</div>

                <a href="#" class="acount_product" style="color: #f5aa18;">user_name</a>
    <a href="index.php?ref=product&lang=en">item1</a>
</div>
</div>
<div class="item">

<img src="PNG/donor.png" alt="">

<div class="subtitle">
    <h4>Product name</h4>
    <h5>item type</h5>
    <h6>Price/Donation</h6>
</div>
<div class="user">
    <div class="user-profil"> <i class="fa-solid fa-user-circle"></i> 
</div>

                <a href="#" class="acount_product" style="color: #f5aa18;">user_name</a>
    <a href="index.php?ref=product&lang=en">item1</a>
</div>
</div>
<div class="item">

<img src="PNG/donor.png" alt="">

<div class="subtitle">
    <h4>Product name</h4>
    <h5>item type</h5>
    <h6>Price/Donation</h6>
</div>
<div class="user">
    <div class="user-profil"> <i class="fa-solid fa-user-circle"></i> 
</div>

                <a href="#" class="acount_product" style="color: #f5aa18;">user_name</a>
    <a href="index.php?ref=product&lang=en">item1</a>
</div>
</div>
</div>
</div>
</div>';

	}
?>
