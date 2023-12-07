<!DOCTYPE html>
<html lang="ja">

<?php 

$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8') : '';

$name2 = '<div id="box"><p class="puname">' . $name . '</p>';

$question = isset($_POST["question"]) ? htmlspecialchars($_POST["question"], ENT_QUOTES, 'UTF-8') : '';

$question2 = '<p class="ptitle">' . $question . '</p>';

$answer = isset($_POST["answer"]) ? htmlspecialchars($_POST["answer"], ENT_QUOTES, 'UTF-8') : '';

$answer2 = '<p class="ptext">' . $answer . '</p></p><span class="remove"><img src="./img/remove.png" height=25" width="25" alt="削除画像" align="top" ></span><span class="update"> <img src="./img/up.png" height=25" width="25" alt="削除画像" align="top" ></span>　';
$time =date('Y-m-d H:i:s') . "\n" . '</div>';

file_put_contents('data/data1.txt', $name2 . $question2 . $answer2 . $time , FILE_APPEND);
file_put_contents('data/data4.txt', $name2 . $question2 . $answer2 . $time , FILE_APPEND);

?>

<head>
  <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>カノンの部屋</title>
  <!-- <script src="js/jquery-2.1.3.min.js"></script> -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style_01.css">
	
</head>

<body>
	<header>
  <h1>カノンの部屋</h1>
</header>
		<!-- BGMを流す -->
		<section>
			<audio src="img/edse.mp3" id="audio" pause="pause" loop="loop"></audio>
			<div id="btn-gold">BGMを再生／停止</div>
		</section>

		<div class="linkbtn">
		<td><button class="top" onclick="window.open('./index.php')">TOPへ</button></td>
		<td><button class="mama" onclick="window.open('./user02.php')">ママの部屋へ</button></td>
		<td><button class="papa" onclick="window.open('./user03.php')">パパの部屋へ</button></td>
	</div>
	
	<form action="user01.php" action="user04.php" method="POST">
		<div class="input-area">
		<div>
				<input id="uname" type="text" placeholder="名前を入力してください" name="name">
				<textarea id="title" type="text" placeholder="下のボタンから今日の質問を選ぼう！" name="question" ></textarea>
				</div>
			<button class="btn btn-solid-silver" type="button" onClick="ranAry()">今日の質問</button>
      <textarea id="text" type="text" placeholder="答えを教えてね！" name="answer"></textarea>
    </div>
			<button id="save" value="送信" type="submit"><span>送信</span></button>
			</form>

  <ul id="output">

	<?php 
$data = file_get_contents('./data/data1.txt');
echo nl2br($data);

?>
        <div id="bottom">

<script type="text/javascript">
		var content = document.getElementById('output');
		var bottom = document.getElementById('bottom');
		bottom.scrollIntoView();
</script>
</div>
</ul>



				<!-- jQueryのjsコードを先に読み込む！ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script type="text/javascript">

function ranAry() {
	let q = ["Q.一番好きな食べ物は？","Q.子供の頃のあだ名は？","Q.どんな時に楽しいと感じる？","Q.自分を漢字一文字で表すと？","Q.今日一番嬉しかったことは？","Q.今日一番腹が立ったことは？","Q.今日一番笑ったことは？","Q.今日の出来事を3つ教えて！","Q.自分の口癖は？","Q.自分ってどんな性格？","Q.最近のマイブームは？","Q.最近一番楽しかったことは？","Q.最近一番面白かったことは？","Q.最近一番悲しかったことは？","Q.最近一番ムカついたことは？","Q.明日やりたいことは？","Q.今日中にやりたいことは？","Q.最近見た夢を教えて！","Q.今の本音をズバリ教えて！","Q.どんな言葉が好き？","Q.言われて嫌な気持ちになる言葉は？","Q.10年後の自分ってどんなイメージ？","Q.家族にひとこと！","Q.自分にひとこと！","Q.何考えてることが多い？","Q.どんな人といると楽？","Q.一緒にいたい人ってどんな人？","Q.寝る時どんなこと考えてる？","Q.子供の頃得意だったことは何？","Q.どの教科が得意だった？","Q.ニックネームは？","Q.人からどのように褒められる？","Q.趣味は何？","Q.家族はあなたのどんなところが好きだと思う？","Q.長年続けていることは何ですか？","Q.周りにはどのような人たちがいますか？","Q.困った時に相談に乗ってくれる人は何人いますか？","Q.何か達成した時に喜んでくれる人たちは誰ですか？","Q.5年後の自分にひとこと！","Q.1週間後の自分を褒めるとしたら何を褒める？","Q.1ヶ月後に世界が滅ぶとしたら何をする？","Q.今1000万円手に入ったら何に使う？","Q.友達から見た自分の印象は？"];

  document.getElementById("title").value = q[Math.floor(Math.random() * q.length)];
}

	// 音楽を流す
	$(function() {
		var audio = $("#audio").get(0);
		var isPlaying = false;
		$("#btn-gold").on("click", function () {
			if (isPlaying) {
				audio.pause();
			} else {
				audio.play();
			}
		});
		audio.onplaying = function() {
			isPlaying = true;
		};
		audio.onpause = function() {
			isPlaying = false;
		};
	});

</script>

				<!-- jsを紐づける。下に書かないとUXに悪い -->
				<!-- <script src="js/user02.js"></script> -->
</body>

</html>
