<?
	include_once('bd.php');


	$sq2 = mysqli_query($connection,"SELECT * FROM `users` WHERE `name` = '".$_SESSION['player']."'");

	$arr = mysqli_fetch_assoc($sq2);

	$_SESSION['balance'] = $arr['balance'];

	$_SESSION['count'] = $arr['count_try'];

	$_SESSION['balance']+=0.05;

	$_SESSION['count']+=1;


	$ses = $_SESSION['balance'];

	$ses1 = $_SESSION['count'];

	$sql = mysqli_query($connection,"UPDATE `users` SET `balance` = '$ses', `count_try`='$ses1'  WHERE `name` = '".$_SESSION['player']."'");


	echo $ses1;
	
