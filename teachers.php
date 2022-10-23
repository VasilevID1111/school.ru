<?php
	include "db.php";
	$result = mysqli_query($mysql,"SELECT * FROM teachers ORDER BY teachers.id");
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
			<p class="top-text">Педагогический состав</p>
			<table>
				<tr class="tr-header">
					<th>№</th>
					<th>Фото</th>
					<th>ФИО</th>
					<th>Должность</th>
					<th>Категория</th>
					<th>Стаж работы</th>
				</tr>
				<tr>
				<?php $i = 1;
						while($teachers = mysqli_fetch_assoc($result)) 
				{ ?>
					</tr>
						<td><?php echo $teachers['id'] ?></td>
						<td>
							<img src="img/<?php echo $teachers['photo'] ?>" alt="teacher<?php echo $i ?>">
						</td>
						<td><?php echo $teachers['fio'] ?></td>
						<td><?php echo $teachers['position'] ?></td>
						<td><?php switch ($teachers['category']) {
							case 1:
								echo "I категории";
								break;
							case 2:
								echo "II категории";
								break;
							case 3:
								echo "III категории";
								break;
							case 4:
								echo "Высшей категории";
								break;
							default:
								echo "Без категории";
						} ?></td>
						<td>
							<?php
								$today = date('Y');
								$years = $today - substr($teachers['acceptdate'],0,4);
								if ($years >= 5 and $years <= 20)
									$acceptdate = "$years лет";
								elseif ($years % 10 == 1) 
									$acceptdate = "$years год";
								elseif ($years % 10 == 2 or $years % 10 == 3 or $years % 10 == 4)
									$acceptdate = "$years года";
								else
									$acceptdate = "$years лет";
								echo $acceptdate; 
							?>
						</td>
				<?php } ?>
			</table>
		</section>
	</body>
</html>
