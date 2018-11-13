<?php
if ($_POST['guardar'] !== NULL) {

	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=filename.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	$cabecera = array(
		'Código de producto',
		'Cantidad',
		'Fecha',
		'Precio unitario',
		'Precio total',
		'Total de ventas',
	);

	foreach ($cabecera as $column) {
		print($column); // ingresando dato al xls
    	print "\t"; // tablulador
	}
	print "\n"; // salto de linea

	for ($i=0; $i <= $_POST['counter']; $i++) {

		$item = array(
			$_POST['product'.$i.'sku'],
			$_POST['product'.$i.'quantity'],
			$_POST['product'.$i.'date_from'],
			$_POST['product'.$i.'price'],
			$_POST['product'.$i.'total_price'],
			$_POST['product'.$i.'total_sold']
		);

		foreach ($item as $column) {
			print($column); // ingresando dato al xls
        	print "\t"; // tablulador
		}
		print "\n"; // salto de linea
	}

}
?>