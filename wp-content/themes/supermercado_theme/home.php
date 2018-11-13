<?php /* Template name: Home */ ?>


<?php get_header(); ?>

<section class="container" id="wrapper_products">
<?php	
$products = new WP_Query(
  $argproducts = array(
    'post_type' => 'product',
    'posts_per_page' => 6,
    'order' => 'ASC'
  )
);
?>
	<section class="row">
		<section class="col-12" id="title_section_products">
			Productos Recientes
		</section>
	</section>
	<section class="row">
		<?php
		while ($products->have_posts()) {
			$products->the_post();
			global $post;
			$product_obj = wc_get_product( $post->ID );
			$price = $product_obj->price;
			$cat = get_the_category_by_ID($product_obj->category_ids[0]);
		?>
		<section class="col-12 col-md-6 col-lg-4 test_products">
			<div class="wrapper">
				<div class="overflowH">
					<div
						class="image_product"
						style="background-image: url(
							'<?php the_post_thumbnail_url('medium') ?>'
						);">
					</div>
				</div>
				<div class="category <?php echo strtolower($cat); ?>"><?php echo $cat; ?></div>
				<div class="info_product">
					<div class="title"><?php echo get_the_title(); ?></div>
					<div class="excerpt"><?php echo get_the_excerpt(); ?></div>
					<div class="price">S/. <?php echo $price; ?></div>
					<a href="<?php echo get_permalink(); ?>">leer más</a>
				</div>
			</div>
		</section>
		<?php
		} 
		?>
	</section>
</section>
