<? 

@ob_start();

include_once('bd.php');


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="style2.css">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	   <script src="jquery-3.1.1.js"></script>
</head>
<body>
	<? 



		$query1 = mysqli_query($connection,"SELECT * FROM `users` WHERE `name` = '".$_SESSION['player']."'");

		$arr1 = mysqli_fetch_assoc($query1);


 	?>
<div class="all_wrapp">
	<div class="wrapp">

			<div class="info">
				
				<div class="player"><? echo "Вы вошли, как ".$_SESSION['player'] ?> <span class="sd"> <?echo "Ваш баланс: ". $arr1['balance']." руб." ?></span></div>


			</div>
			
			<div class="btn1"> 
			

				<input type="submit" name="money" id="money" class="btn-primary" value="Вывести деньги">
				<input type="submit" name="exit" id="exit" class="btn-danger" value="Выйти">

				
			</div>
			




			<div class="count_click"> Вы сделали <? echo $_SESSION['count']?> кликов по рекламе </div>

			
			<form action="" method="POST"></form>

				<div class="ads" name="aw"></div>

				<div class="ads"></div>

				<div class="ads"></div>
				<div class="ads"></div>

			</form>




	</div>	
</div>
	


	
</body>
</html>

<script type="text/javascript">

	$(document).ready(function(){
	
	var count=<? echo $_SESSION['count']?>;;
	var balance = <? echo $arr1['balance']?>;


 	$('.ads').click(function(){

	
 		count++;
		balance+=0.05;

		

		$('.count_click').text("Вы сделали " + count + " кликов по рекламе");

		$('.sd').text("Ваш баланс: "+ balance.toFixed(2) + " руб.");

	     			
							    $.ajax({
							        url: "login1.php",
							        type: "POST",
							        data: "count="+count,
							        success: function(html){
							          
							        }
							    });

				
  });

 });

</script>
