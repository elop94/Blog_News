<!DOCTYPE html>
<html>
	<header>
		<meta charset=”UTF-8”>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Blog News</title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</header>
	
	<body class="body">
		
		<div class="div-topo" id="topo">
			<div class="div-col-nav ">
				<nav class="div-nav navbar navbar-default">
				  <div class="container-fluid">
				    <div class="div-col12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
					    <div class="col-xs-8 col-sm-8 col-md-2 col-lg-2">
						    <a class="div-logo navbar-brand pull-right" href="index.php">Blog News</a>
						</div>
						<div class="navbar-header col-xs-4 col-sm-4">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
						<div class="col-md-10 col-lg-10">
						    <div class="div-nav-collapse collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav">
						        <li><a class="div-nav-a" href="index.php">home<span class="sr-only">(current)</span></a></li>
						        <li><a class="div-nav-a" href="contato.php">Contato</a></li>
						      </ul>
						      <ul class="nav navbar-nav navbar-right">
        						<li><a class="div-nav-restrito" href="res.php">Restrito</a></li>
        					   </ul>
						    </div>
						</div>
					</div>	
				  </div>
				</nav>
			</div>
		</div>
		<div class="div-home container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="div-home2 hidden-xs hidden-sm col-md-3 col-lg-3">
					<p class="div-home2-titulo" align="center">Procure pelo titulo</p>
					<?php
						if(!@($conexao = mysql_connect("localhost","root","24")))
						{
						   print "Não foi possível estabelecer uma conexão com o banco de dados.";}
						else{
							 $conexao = mysql_select_db("user");
							 $query = "SELECT id, titulo, elm1 FROM user order by id desc";
							 $result = mysql_query($query);
						
						while ($consulta = mysql_fetch_assoc($result)) 
						{
							echo "<p class='div-home-pp' align='center'><a class='div-home-pp2' href='#".$consulta['id']."'>".$consulta['titulo']."</a></p>";
							echo "<hr class='hr'>";
						}
									
						mysql_close($conexao);}
					?>
					<iframe width="250" height="200" scrolling="no" allowfullscreen frameborder="0" src="http://videos.clicrbs.com.br/rs/radio-atlantida/audionews/497"> </iframe>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<?php
						if(!@($conexao = mysql_connect("localhost","root","24")))
						{
						   print "Não foi possível estabelecer uma conexão com o banco de dados.";}
						else{
							 $conexao = mysql_select_db("user");
							 $query = "SELECT id, titulo, elm1 FROM user order by id desc";
							 $result = mysql_query($query);
						
						while ($consulta = mysql_fetch_assoc($result)) 
						{
							echo "<p class='div-home-p' id=".$consulta['id']." align='center'>".$consulta['titulo']."</p>";
							echo $consulta['elm1'];
							echo "<hr class='hr'>";
						}
									
						mysql_close($conexao);}
					?>
				</div>
			</div>
		</div>
		<div class="hidden-xs hidden-sm">
			<div class="div-rodape panel-footer" align="center"><p class="rodape-p">Todos os direitor reservados para Blog News.</p><a href="#topo" class="btn-rodape btn btn-default pull-right">Voltar ao Topo</a></div>
		</div>
	</body>
</html>