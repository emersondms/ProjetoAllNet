window.onload = function() {

	bar_size = 400;
	video = document.getElementById('video_principal');
	play = document.getElementById('play');
	bar = document.getElementById('default_bar');
	progress_bar = document.getElementById('progress_bar');

	//Atribui funcoes aos eventos de click do video, do botao play e da progressbar
	video.addEventListener('click', playOrPause, false);
	play.addEventListener('click', playOrPause, false);
	bar.addEventListener('click', clickedBar, false);

	//Se o video nao estiver pausado ou finalizado, pausa o video e altera a imagem do botao play para pause
	function playOrPause() {
		if(!video.paused && !video.ended) {
			 video.pause();
			 play.src = '../imagens/play.png';
			 window.clearInterval(updateBar);
		} else {
			video.play();
			play.src = '../imagens/pause.png';
			updateBar = setInterval(update, 500);
		}
	}

	/*Se o video nao estiver finalizado, aumenta o tamanho da progressbar a cada meio 
	segundo, caso contrario, zera o tamanho da barra e altera o botao pause para play*/
	function update() {
		if(!video.ended) {
			var size = parseInt(video.currentTime * bar_size / video.duration);
			progress_bar.style.width = size+'px';
		} else {
			progress_bar.style.width = '0px';
			play.src = '../imagens/play.png';
			window.clearInterval(updateBar);
		}
	}

	/*Atribui o tamanho da progressbar as coordenadas horizontais
	do click dentro dela, alterando assim o tempo corrente do video */
	function clickedBar(e) {
		if(!video.paused && !video.ended) {
			var mouseX = e.pageX - bar.offsetLeft;
			var newTime = mouseX * video.duration / bar_size;
			video.currentTime = newTime;
			progress_bar.style.width = mouseX+'px';
		}
	}
}