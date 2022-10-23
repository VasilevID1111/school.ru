<header>
	<section class ="header">
		<section class = "logo">
			<a href="index.php">
				<img class="graficlogo" src="img/logo.png" alt="logo"> 
			</a>
		</section>
		<section>
			<nav class = "topnav">
				<a href="news.php">Новости</a>
				<a href="teachers.php">Педагоги</a>
				<a href="katalog.php">Каталог</a>
				<a href="contacts.php">Контакты</a>
				<span class = "time" id="doc_time"> </span>
			</nav>
		</section>
	</section>
</header>
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
