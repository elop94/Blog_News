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
        <Script  src = "//tinymce.cachefly.net/4.1/tinymce.min.js" > </script>
		<script>
		    tinymce.init({
		        selector: "textarea#elm1",
		        theme: "modern",
		        plugins: [
		            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
		            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		            "save table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker"
		        ],
		        external_plugins: {
		        },
		        content_css: "css/development.css",
		        add_unload_trigger: false,
		        autosave_ask_before_unload: false,

		        toolbar1: "save newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
		        toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
		        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage",
		        menubar: false,
		        toolbar_items_size: 'small',

		        style_formats: [
		            {title: 'Bold text', inline: 'b'},
		            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
		            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
		            {title: 'Example 1', inline: 'span', classes: 'example1'},
		            {title: 'Example 2', inline: 'span', classes: 'example2'},
		            {title: 'Table styles'},
		            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		        ],

		        templates: [
		            {title: 'My template 1', description: 'Some fancy template 1', content: 'My html'},
		            {title: 'My template 2', description: 'Some fancy template 2', url: 'development.html'}
		        ],

		        spellchecker_callback: function(method, data, success) {
		            if (method == "spellcheck") {
		                var words = data.match(this.getWordCharPattern());
		                var suggestions = {};

		                for (var i = 0; i < words.length; i++) {
		                    suggestions[words[i]] = ["First", "second"];
		                }

		                success({words: suggestions, dictionary: true});
		            }

		            if (method == "addToDictionary") {
		                success();
		            }
		        }
		    });
		</script>
		<script>
		    tinymce.init({
		        selector: "textarea#elm2",
		        theme: "modern",
		        plugins: [
		            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
		            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		            "save table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker"
		        ],
		        external_plugins: {
		        },
		        content_css: "css/development.css",
		        add_unload_trigger: false,
		        autosave_ask_before_unload: false,

		        toolbar1: "save newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
		        toolbar2: "cut copy paste pastetext | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media help code | insertdatetime preview | forecolor backcolor",
		        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | insertfile insertimage",
		        menubar: false,
		        toolbar_items_size: 'small',

		        style_formats: [
		            {title: 'Bold text', inline: 'b'},
		            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
		            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
		            {title: 'Example 1', inline: 'span', classes: 'example1'},
		            {title: 'Example 2', inline: 'span', classes: 'example2'},
		            {title: 'Table styles'},
		            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		        ],

		        templates: [
		            {title: 'My template 1', description: 'Some fancy template 1', content: 'My html'},
		            {title: 'My template 2', description: 'Some fancy template 2', url: 'development.html'}
		        ],

		        spellchecker_callback: function(method, data, success) {
		            if (method == "spellcheck") {
		                var words = data.match(this.getWordCharPattern());
		                var suggestions = {};

		                for (var i = 0; i < words.length; i++) {
		                    suggestions[words[i]] = ["First", "second"];
		                }

		                success({words: suggestions, dictionary: true});
		            }

		            if (method == "addToDictionary") {
		                success();
		            }
		        }
		    });
		</script>
	</header>
	
	<body class="body">
		<div class="div-topo" id="topo">
			<div class="div-col-nav col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
        						<li><a class="div-nav-restrito" href="restrito.php">Restrito</a></li>
        					   </ul>
						    </div>
						</div>
					</div>	
				  </div>
				</nav>
			</div>
		</div>
		<div class="div-home container">
			<div class="div-col col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<p class="p-titulo">Cadastrar novo Post!</p>
					<form method="POST" action="conexao.php" class="form-inline">
					  	</label><input class="form-control" placeholder="Titulo" type="text" name="titulo" id="titulo">
				        <textarea id="elm1" name="elm1" rows="15" cols="50" style="width: 50%"> </textarea>
						<input class="div-btn btn btn-default" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
						<input class="div-btn btn btn-default" type="reset" value="Limpar Dados" id="reset" name="reset">
					</form>
				</div>

				<div class="div-col2 col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
					<p class="p-titulo">Editar Post!</p>
					<form method="POST" action="conexao.php" class="form-inline">
					  	</label><input class="form-control" placeholder="ID" type="text" name="id" id="id">
					  	</label><input class="form-control" placeholder="Titulo" type="text" name="titulo" id="titulo">
				        <textarea id="elm2" name="elm1" rows="15" cols="10" style="width: 10%"> </textarea>
						<input class="div-btn btn btn-default" type="submit" value="Editar" id="editar" name="editar">
						<input class="div-btn btn btn-default" type="reset" value="Limpar Dados" id="reset" name="reset">
					</form>
				</div>
				<div class="div-col3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
					<p class="p-titulo">Apagar Post!</p>
					<form method="POST" action="conexao.php" class="form-inline">
						</label><input class="form-control" placeholder="ID" type="text" name="id" id="id">
						<input class="div-btn2 btn btn-default" type="submit" value="Apagar" id="apagar" name="apagar">
					</form>
				</div>
			</div>
		</div>
		<div class="div-col2 col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
				<p class="p-titulo">Post gravados no banco!</p>
				<?php
					if(!@($conexao = mysql_connect("localhost","root","24")))
					{
					   print "Não foi possível estabelecer uma conexão com o banco de dados.";}
					else{
						 $conexao = mysql_select_db("user");
						 $query = "SELECT id, titulo, elm1, data FROM user  order by id desc";
						 $result = mysql_query($query);
					
					while ($consulta = mysql_fetch_assoc($result)) 
					{
						echo "<p class='div-home-p'>".$consulta['id']."</p>";
						echo "<p class='div-home-pp2'>".$consulta['titulo']."</p>";
						echo "<p class='div-home-pp2'>".$consulta['data']."</p>";
						echo "<hr class='hr'>";
					}
								
					mysql_close($conexao);}
				?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="/grafico.php" border="0" />
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<a href="pdf.php" class="btn btn-default">Gerar PDF</a>
					<a href="grafico.php" class="btn btn-default">Grafico</a>
				</div>
			</div>
		</div>
		<div class="hidden-xs hidden-sm">
			<div class="div-rodape panel-footer navbar-fixed-bottom" align="center">Todos os direitor reservados para Blog News. <a href="#topo" class="btn-topo btn btn-default pull-right">Voltar ao Topo</a></div>
		</div>
	</body>
</html>
