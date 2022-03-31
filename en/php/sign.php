sign
<?php
if($_POST['sign']=="con"){
include($lang."/php/inc.php/connect.inc.php");
}else if($_POST['sign']=="sub"){
include($lang."/php/inc.php/subscribe.inc.php");
}

if(isset($_POST['register'])){
	if(empty($_POST['mail'])){
					echo "The email field is empty.";
				} elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST['mail'])){
					echo "The email address is not valid.";
				} elseif(trim($_POST['fname'])==""){
					echo "Please enter a first name.";
				} elseif(trim($_POST['lname'])==""){
					echo "Please enter a last name.";
				} elseif(empty($_POST['passwd'])){
					echo "The password field is empty.";
				} elseif(strlen($_POST['passwd'])<7){
					echo "The password is too short, it have to be at least 8 characters long.";
				} elseif(!preg_match($_POST['passwd'],$_POST['confpasswd'])){
					echo "The two entered passwords are not the same.";
				} elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM users WHERE email='".$_POST['mail']."'"))==1){
					echo "This email is already used.";
				} else {
					if(!mysqli_query($mysqli,"INSERT INTO users SET first_name='".$_POST['fname']."', last_name='".$_POST['lname']."', password='".md5($_POST['passwd'])."', email='".$_POST['mail']."', phone='".$_POST['phone']."', adnumb='".$_POST['adnumb']."', adway='".$_POST['adway']."', adcity='".$_POST['adcity']."', adcode='".$_POST['adcode']."'")){
						echo "An error occured: ".mysqli_error($mysqli);
					} else {
						$req = mysqli_query($_SESSION["mysqli"], 'SELECT * FROM users ORDER BY user_id DESC LIMIT 1;');
						while($id = $req->fetch_assoc()){
							$_SESSION["user_id"] = $id['user_id'];
						}
						echo 'You are successfully subscribed!';
						header("Location: index.php?ref=account");
					}
				}
}

if(isset($_POST['connect'])){
	
}
?>