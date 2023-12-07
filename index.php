<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOP画面</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

		<!-- BGMを流す -->
		<!-- <div class="btn">
			<audio src="img/op.mp3" id="audio" pause="pause" loop="loop"></audio>
			<div id="btn-gold">BGMを再生／停止</div>
		</div> -->


	<div class="loader">
		<span></span>
		<span></span>
		<span></span>
		<h2>Now Loading...</h2>
	</div>

	<div class="content">

		<a href="./user01.php" class="btn btn-solid-gold">カノンの部屋</a>
		<a href="./user02.php" class="btn btn-solid-gold">ママの部屋</a>
		<a href="./user03.php" class="btn btn-solid-gold">パパの部屋</a>
		<a href="./user04.php" class="btn btn-solid-gold">フリーの部屋</a>
		<br><br>
		<section>
			<audio src="img/op.mp3" id="audio" pause="pause" loop="loop"></audio>
			<div id="btn-gold">BGMを再生／停止</div>
		</section>


	</div>

	<!-- 以下にjsを書いていきます -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="module">
	//ローディング画面 -->
		window.onload = function () { 

			setTimeout(() => {
			// loaderを消す
			const loader = document.querySelector(".loader")
			loader.classList.add("loaded");
			// contentを見せる
			const content = document.querySelector(".content")
			content.style.visibility = "visible";
			}, 1300);
		};

	</script>
				<!-- jQueryのjsコードを先に読み込む！ -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

				<!-- jsを紐づける。下に書かないとUXに悪い -->
				<script src="js/index.js"></script>


					</script>

</body>
</html>
