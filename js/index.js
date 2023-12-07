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
