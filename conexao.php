<?php

	$conexao = mysql_connect("localhost","root","24")
		or die ("<script>window.location='index.php';alert('Erro ao Conectar com o Banco de Dados!');</script>");
	$conexao = mysql_select_db("user");
	$query = "SELECT id, titulo, elm1, data FROM user";
	$resultado = mysql_query($query);

	
	$id  = $_POST['id'];
	$titulo= $_POST['titulo'];
	$elm = $_POST['elm1'];
	$data = date('d/m/y');

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
		$inserir = mysql_query("INSERT INTO user (titulo, elm1, data) VALUES ('$titulo', '$elm', '$data')");
		if($inserir==''){
			echo "<script>window.location='index.php';alert('Erro ao enviar os Dados!');</script>";
		}else {
				echo "<script>window.location='index.php';alert('$titulo, Post criado com sucesso!');</script>";
			}
		break;

	case 'editar':
		// Constrói a consulta SQL
		$conexao = "UPDATE user set "; 
		$conexao = $conexao . "titulo= '$titulo', ";
		$conexao = $conexao . "elm1= '$elm' "; 
		$conexao = $conexao . "data= '$data' "; 

		$conexao = $conexao . "Where id = $id"; 

		// Executa a consulta 
		mysql_query($conexao);
		if($conexao==''){
			echo "<script>window.location='index.php';alert('Erro ao editar Post!');</script>";
		}else {
				echo "<script>window.location='index.php';alert('$titulo, Post editado com sucesso!');</script>";
			}
		break;

	case 'apagar':
		//seleciona o id e o apaga
		$dl = "DELETE FROM user WHERE id = $id";
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
