<?php
/**
 * Descripcion: Reporte de Ventas de Productos
 *
 * @package Reporte de Ventas - Woocommerce
 * @author Miguel Hernandez
 * @license NA
 * @link https://wordpress.org/
 * @copyright 2018 Miguel Todos los derechos reservados.
 *
 *            @wordpress-plugin
 *            Plugin Name: Reporte de Ventas - Woocommerce
 *            Plugin URI: https://wordpress.org/
 *            Description: Reporte de Ventas Woocommerce es un plugin creado por Miguel Hernández para la prueba de Tekton Labs
 *            Version: 1.0
 *            Author: Miguel Hernandez
 *            Author URI: https://wordpress.org/
 *            Text Domain: reporte-de-ventas
 *            Contributors: Miguel Hernandez
 */

function reporte_de_ventas_menu() {
	add_submenu_page ( "options-general.php", "Reporte de Ventas - Woocommerce", "Reporte de Ventas - Woocommerce", "manage_options", "reporte-de-ventas", "reporte_de_ventas_page" );
}
add_action ( "admin_menu", "reporte_de_ventas_menu" );
 
/**
 * Setting Page Options
 * - add setting page
 * - save setting page
 *
 * @since 1.0
 */
function reporte_de_ventas_page() {
?>
<style type="text/css">

	td,
	th {
		border: 1px solid;
		text-align: center;
		padding: 5px 10px;
	}

	#custom_plugin th{
		background-color: #d63031;
		color: white;
		border-color: #d63031;
	}

	#custom_plugin h1 {
		margin: 30px 0;
		font-weight: bolder;
	}

	table tr td{
		background-color: white;
		font-weight: bolder;
		border-color: #e8e8e8;
	}

	#download_btn{
		color: white !important;
	    background-color: #d63031 !important;
	    border: 1px solid #d63031 !important;
	    font-weight: bolder;
	    padding: 6px 13px;
	    transition: ease .3s;
	    cursor: pointer;
	    outline: none;
	}

</style>

<div id="custom_plugin">
	<h1>Reporte de Ventas por producto</h1>
 
 	<?php
		$products = new WP_Query(
		  $argproducts = array(
		    'post_type' => 'product',
		    'posts_per_page' => -1,
		    'order' => 'ASC'
		  )
		);
		$counter = 0;
	?>

	<form action="<?php echo bloginfo('url') ?>/wp-content/plugins/Miguel-Plugin/prueba.php" method="post">
		<table>
			<tr>
				<th>Código de producto</th>
				<th>Cantidad</th>
				<th>Fecha</th>
				<th>Precio unitario</th>
				<th>Precio total</th>
				<th>Total de ventas</th>
			</tr>
			<?php	
				while ($products->have_posts()) {
					$products->the_post();
					global $post;
					$id = $post->ID;
					$product_obj = wc_get_product( $id );
					$sku = $product_obj->get_sku();
					$quantity = $product_obj->get_total_sales();
					$price = $product_obj->get_price();
					$total_price = $quantity * $price;
					$total_sold = $quantity * $price;
				?>
					<tr>
						<td><?php echo $sku; ?></td>
						<td><?php echo $quantity; ?></td>
						<td><?php echo $date_from; ?></td>
						<td><?php echo $price; ?></td>
						<td><?php echo $total_price; ?></td>
						<td><?php echo $total_sold; ?></td>
					</tr>

					<input type="hidden" name="product<?php echo $counter.'sku'; ?>" value="<?php echo $sku; ?>" />
					<input type="hidden" name="product<?php echo $counter.'quantity'; ?>" value="<?php echo $quantity; ?>" />
					<input type="hidden" name="product<?php echo $counter.'date_from'; ?>" value="<?php echo $date_from; ?>" />
					<input type="hidden" name="product<?php echo $counter.'price'; ?>" value="<?php echo $price; ?>" />
					<input type="hidden" name="product<?php echo $counter.'total_price'; ?>" value="<?php echo $total_price; ?>" />
					<input type="hidden" name="product<?php echo $counter.'total_sold'; ?>" value="<?php echo $total_sold; ?>" />
					<input type="hidden" name="counter" value="<?php echo $counter; ?>" />
				<?php
					$counter++;
				}
			?>
		</table>

		<input type="hidden" name="guardar" value="true"><br>
		<input id="download_btn" type="submit" value="EXPORTAR (XLS)">
	</form>

</div>
 
<?php
}
 
/**
 * Init setting section, Init setting field and register settings page
 *
 * @since 1.0
 */

/*





