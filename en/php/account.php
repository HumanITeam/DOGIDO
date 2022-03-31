
<?php
$req = mysqli_query($mysqli, 'SELECT * FROM users WHERE user_id="'.$_SESSION['user_id'].'";');
	while($result = $req->fetch_assoc()){
		echo $result['first_name'].'<br>';
		echo $result['last_name'].'<br>';
		echo $result['email'].'<br>';
		echo $result['phone'].'<br>';
		echo $result['bio'].'<br>';
		echo $result['rate'].'<br>';
		echo $result['address_numb'].' ';
		echo $result['address_way'].' ';
		echo $result['address_city'].' ';
		echo $result['address_code'].'<br>';
	}
	echo'<a href="index.php?ref=publish-offer&lang='.$lang.'">Créer une offre</a>';
?>

