<html>
	<head>
		<title>Vídeos com demonstrações do funcionamento do carro do Google que dirige sozinho e de outros dispositivos | DMS InnovaTech</title>
		<meta charset="UTF-8">
		<meta name="keywords" content="dms, innovative, technologies, videos, google, glass, pulseira, inteligente, carro, dirige, sozinho, oculus, rift">
		<meta name="description" content="Aqui demonstramos atraves de vídeo o funcionamento do carro do Google que dirige sozinho em situacoes reais">
		<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="../css/animate.css" />
		<script type="text/javascript" src="../script/script.js"></script>
	</head>

	<body>
		
		<!-- INCLUI O MENU NO TOPO DA PAGINA -->
		<?php
			include 'header.html';
		?>		


		<!-- ========== G A L E R I A  D E  V I D E O S ========== -->
		<div id="container_principal">
			<!-- VIDEO PRINCIPAL -->
			<div id="video_container">
				<video id="video_principal" width="480" height="300" poster="../imagens/carro.jpg">
					<source src="../videos/video3.mp4">
				</video>
				<div id="controles">
					<img id="play" src="../imagens/play.png">
					<div id="default_bar">
						<div id="progress_bar"></div>
					</div>
				</div>
				<p>Demonstração do carro do Google que dirige SEM motorista</p>
			</div>
			
			<!-- VIDEOS NA DIREITA -->
			<div id="videos_direita">
				<a href="videos2.php" title="Demonstração da pulseira inteligente">
					<video width="300" height="100" class="videos_direita" poster="../imagens/smartband.png">
						<source src="../videos/video2.mp4">
					</video>
				</a>
				<a href="videos.php" title="Demonstração do Google Glass">
					<video width="300" height="100" class="videos_direita" poster="../imagens/googleglass.jpg">
						<source src="../videos/video1.mp4">
					</video>
				</a>
				<a href="videos4.php" title="Demonstração do Oculus Rift">
					<video width="300" height="100" class="videos_direita" poster="../imagens/oculusrift.png">
						<source src="../videos/video4.mp4">
					</video>
				</a>
			</div>
		</div>


		<!-- INCLUI O MAPA E O RODAPE DA PAGINA -->
		<?php
			include 'footer.html';
		?>
		
	</body>
</html>