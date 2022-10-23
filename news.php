<?php
	include "db.php";
	$result = mysqli_query($mysql,"SELECT * FROM news ORDER BY news.tdate DESC");
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
			<p class="top-text">Новости</p>
			<?php
				while($news = mysqli_fetch_assoc($result))
				{
					?>
					<article>
						<p class="article-header"> <?php echo $news['topic'] ?> </p>
						<p class="article-date"> <?php echo $news['tdate'] ?> </p>
						<p class="article-text"> <?php $enters = str_replace("\n","<br>",$news['main']);
																 $bold = str_replace("(Ж)","<b>",$enters);
																 $bold = str_replace("(-Ж)","</b>",$bold);
																 echo $bold?> 
						</p>
						<p class="article-sec-text"> <?php echo $news['extra'] ?> </p> 
					</article>
					<?php
				}
			?>
		</section>
	</body>
</html>
<script type="text/javascript">
	window.onload = function() {
		window.setInterval(function clock() {
		var d = new Date();
		var hours = d.getHours();
		var minutes = d.getMinutes();
		var seconds = d.getSeconds();
		if (hours <= 9) hours = "0" + hours;
		if (minutes <= 9) minutes = "0" + minutes;
		if (seconds <= 9) seconds = "0" + seconds;
		time = hours + ":" + minutes + ":" + seconds;
		document.getElementById("doc_time").innerHTML = time;
		setTimeout("clock()", 1000);
		},1000)};
</script>