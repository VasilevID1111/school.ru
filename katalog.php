<?php
	include "db.php";
	$result = mysqli_query($mysql,"SELECT * FROM services ORDER BY services.id");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Школа 65</title>
		<link rel="icon" type="image/png" href="img/school.png">
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
	<?php
		include "header.php";
	?>
		<section class="page-borders">
			<p class="top-text">Платные образовательные услуги</p>
			<div class="container">
				<?php while ($services = mysqli_fetch_assoc($result)) 
				{ ?>
					<div class="container-info">
						<div class="container-with-button">
							<img src="img/<?php echo $services['img']?>" alt="<?php echo $services['img']?>" width="150" height="150">
							<button type="button" name="button">Записаться</button>
						</div>
						<div>
							<p><h3><?php echo $services['topic'] ?></h3></p>
							<p><?php echo $services['main']?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</section>
	</body>
</html>
