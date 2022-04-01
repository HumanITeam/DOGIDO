<?php
	if(isset($_POST['name'])){
				if(trim($_POST['name'])==""){
					echo "The product must be named.";
				} elseif(trim($_POST['type'])==""){
					echo "Please enter the type of the product.";
				} elseif(trim($_POST['price'])==""){
					echo "Please enter the price of the product.";
				} elseif(trim($_POST['condition'])==""){
					echo "Please enter the condition of the product.";
				} elseif(trim($_POST['numb'])==""){
					echo "Please enter the number of items.";
				} else {
					$price = $_POST['price']*$_POST['numb'];
					$req = mysqli_query($_SESSION["mysqli"], 'SELECT * FROM offers ORDER BY offer_id DESC LIMIT 1;');
					while($off = $req->fetch_assoc()){
						$offer = $off['offer_id']+1;
					}
					if(empty($offer)){
						$offer = 1;
					}
					for($i=0;$i<$_POST['numb'];$i++){
						if(!mysqli_query($mysqli,"INSERT INTO products SET owner_id='".$_SESSION['user_id']."', name='".$_POST['name']."', type='".$_POST['type']."', price='".$_POST['price']."', condition_product='".$_POST['condition']."'")){
							echo "An error occured: ".mysqli_error($mysqli);
						} else {
							$req = mysqli_query($_SESSION["mysqli"], 'SELECT * FROM products ORDER BY product_id DESC LIMIT 1;');
							while($id = $req->fetch_assoc()){
								mysqli_query($mysqli,"INSERT INTO offers SET offer_id='".$offer."', product_id='".$id['product_id']."', owner_id='".$_SESSION['user_id']."'");
							}
							echo 'You are successfully subscribed!';
							header("Location: index.php?ref=account&lang=".$lang);
						}
					}
				}
	}
?>

<form class="sign" action="" method="post">
      <div class="head">
        <img src="../images/digidologo.png" alt="" class="logo">
        <h3>Create your offer</h3>
      </div>
      <div class="name">
        <input type="name" name="name" required>
        <label>Product name</label>
      </div>
      <div class="name">
		<label for="types">Product type</label>
		<input list="product-types" id="types" name="type" />
		<datalist id="product-types">
			<option value="Computer">
			<option value="Mouse">
			<option value="Screen">
			<option value="Smartphone">
			<option value="Printer">
		</datalist>
      </div>
      <div class="name">
        <input type="number" name="numb" required>
        <label>Number of items</label>
      </div>
      <div class="name">
		<input type="number" min="0" max="10000" step="1" name="price" id="broker_fees" required>
        <label>Price (per item)</label>
      </div>
      <div class="name">
        <label for="condition">Condition (or average condition)</label>
		<input list="product-cond" id="condition" name="condition" />
		<datalist id="product-cond">
			<option value="average condition">
			<option value="old">
			<option value="good condition">
			<option value="very good condition">
			<option value="new">
		</datalist>
      </div>
      <input type="submit" name="register" value="Get started">
    </form>