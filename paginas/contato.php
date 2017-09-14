<html>
	<head>
		<title>Formulário de Contato - Deixe-nos sua mensagem | DMS InnovaTech</title>
		<meta charset="UTF-8">
		<meta name="keywords" content="dms, innovative, technologies, formulario, contato, mensagem, feedback">
		<meta name="description" content="Deixe sua mensagem para termos um feedback do conteudo apresentado no site">
		<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="../css/animate.css" />	
		<script type="text/javascript" src="../script/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="../script/scriptJQ.js"></script>		
	</head>

	<body>

		<!-- INCLUI O MENU NO TOPO DA PAGINA -->
		<?php
			include 'header.html';
		?>


		<!-- SCRIPT PHP PARA O ENVIO DO FORMULARIO -->
		<?php
			if(isset($_POST['input_nome']) && isset($_POST['input_email']) && 
				isset($_POST['input_assunto']) && isset($_POST['input_msg'])) {
				$destino = 'emersondms@gmail.com';
				$nome = $_POST['input_nome'];
				$email = $_POST['input_email'];
				$assunto = $_POST['input_assunto'];
				$mensagem = $_POST['input_msg'];
				if(!empty($nome) && !empty($email) && !empty($assunto) && !empty($mensagem)) {
					//O USO DO htmlentities() E PARA CONVERTER TODOS OS CARACTERES EM ENTIDADES HTML(CODIGOS ASCII) 
					$envio_email = mail(htmlentities($destino), htmlentities($assunto), htmlentities($mensagem), htmlentities($nome));
					if($envio_email) {
						echo '<p class="msg_form">Sua mensagem foi enviada com sucesso!</p>';
					} else {
						echo '<p class="msg_form">Ocorreu um erro no envio da mensagem.</p>';
					}
				} else {
					echo '<p class="msg_form">Por favor preencha todos os campos.</p>';
				}	
			}	
		?>
		

		<!-- ========== F O R M U L A R I O  D E  C O N T A T O ========== -->
		<div id="container_principal">
			<div id="container_contato">	
				<form action="contato.php" method="POST">
					<div id="dados">
						<img src="../imagens/imagem_contato.jpg" alt="Envie sua mensagem" id="img_contato"/>
						<b>Envie sua mensagem</b><br><br>
						Nome:
						<input type="text" id="input_nome" name="input_nome" required="required">
						</input><br><br>
						Email:
						<input type="text" id="input_email" name="input_email" required="required">
						</input><br><br>
						Assunto:
						<input type="text" id="input_assunto" name="input_assunto" required="required">
						</input><br><br>
						Mensagem:<br><br>
					</div><br><br>
					<textarea cols="108" rows="8" name="input_msg" id="input_msg" required="required"></textarea><br><br>
					<input type="submit" value="Enviar" class="botao"></input>
					<input type="button" value="Limpar" id="bt_limpar" class="botao"></input>	
				</form>
			</div>
		</div>


		<!-- INCLUI O MAPA E O RODAPE DA PAGINA -->
		<?php
			include 'footer.html';
		?>

	</body>
</html>