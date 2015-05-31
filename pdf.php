<?php
	require_once("dompdf/dompdf_config.inc.php");
	$dompdf = new DOMPDF();
	$dompdf->load_html('
		<h3>Blog News</h3>
		<img src="/grafico.php" />
		<p>Fonte: Blog News.</p></br>
		<p>Legenda</p>
		<p>Azul= Numero de POSTS diarios ex: dia 24/05/15 N° 2 POSTS.</p>

		');
	 
	$dompdf->render();
	 

	$dompdf->stream(
	    "Grafico_POSTS_Blog_News.pdf",
	    array(
	        "Attachment" => false
	    )
	);
?>