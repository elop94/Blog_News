<?php

	$conexao = mysql_connect("localhost","root","24")
		or die ("<script>window.location='index.php';alert('Erro ao Conectar com o Banco de Dados!');</script>");
	$conexao = mysql_select_db("comentarios");
	$query = "SELECT id, nome, email, site, comentario FROM comentarios";
	$resultado = mysql_query($query);

	
	$id  = $_POST['id'];
	$nome  = $_POST['nome'];
	$email  = $_POST['email'];
	$site  = $_POST['site'];
	$comentario  = $_POST['comentario'];

	function get_post_action($name)
	{
		$params = func_get_args();

		foreach ($params as $name) {
			if (isset($_POST[$name])) {
				return $name;
			}
		}
	}
	switch (get_post_action('cadastrar', 'editar', 'apagar')) {
	case 'cadastrar':
		//grava os dados no banco
		$inserir = mysql_query("INSERT INTO comentarios (id, nome, email, site, comentario) VALUES ('$id', '$nome', '$email', '$site', '$comentario')");
		if($inserir==''){
			echo "<script>window.location='index.php';alert('Erro ao enviar os Dados!');</script>";
		}else {
				echo "<script>window.location='index.php';alert('$nome, comentario criado com sucesso!');</script>";
			}
		break;

	case 'apagar':
		//seleciona o id e o apaga
		$dl = "DELETE FROM comentarios WHERE id = $id";
		mysql_query($dl);
		
		if($id==''){
			echo "<script>window.location='index.php';alert('Erro ao apagar Post!');</script>";
		}else{	
			echo "<script>window.location='index.php';alert('Post apagado com sucesso!');</script>";
		}
		break;

	default:
		echo "<script>window.location='index.php';alert('Botao desconecido!');</script>";
	}
	
	// Encerra a conexão
	mysql_close();
?>
