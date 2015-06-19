<?php
	require("phplot-6.1.0/phplot.php");
	$grafico = new PHPlot(800,600);
	$grafico->SetFileFormat("png");

	$grafico->SetTitle("Grafico de Posts");
	// Tipo do gráfico
	// Por ser: lines, bars, boxes, bubbles, candelesticks, candelesticks2, linepoints, ohlc, pie,
	// points, squared, stackedarea, stackedbars, thinbarline

	$grafico->SetPlotType("stackedbars");
	$grafico->SetYTitle("Numero de posts");
	$grafico->SetXTitle("Data");

	if(!@($conexao = mysql_connect("localhost","root","24")))
		{
		   print "Não foi possível estabelecer uma conexão com o banco de dados.";}
		else{
			 $conexao = mysql_select_db("user");
			 $query = "SELECT data, count(*) as r FROM user group by data having count(*)>=1";
			 $result = mysql_query($query);

	$i = 0;
	$legenda = array();
	$totais = array();
	while($linha = mysql_fetch_array($result, MYSQL_ASSOC)){
		$legenda[$i] = $linha['data'];
		$totais[$i] = $linha['r'] ;
		$i++;
	}};

	for ($j=0; $j < $i; $j++) { 
		$dados[$j] = array($legenda[$j], $totais[$j]);
	};

	$grafico->SetDataValues($dados);
	$grafico->DrawGraph();
?>
<html>
	<body>
		<img src="/grafico.php" border="0" />
	</body>
</html>