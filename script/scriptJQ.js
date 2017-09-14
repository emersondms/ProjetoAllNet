$(document).ready(function(){

	//Atribui ao botao limpar a funcao de apagar todos os dados do formulario de contato
	$("#bt_limpar").click(function(){
		$("#input_nome").val("");
		$("#input_email").val("");
		$("#input_assunto").val("");
		$("#input_msg").val("");
	});
	
});

