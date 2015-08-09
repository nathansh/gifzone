<?php get_header(); ?>

	<div class="l-main">

		<section class="l-content">

			<h2 class="u-screen-reader">Main content</h2>

			<?php
				$the_query = new WP_Query(array(
					'post_type' => 'gif',
					'posts_per_page' => -1
				));

				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
						$gif = get_field('gif_image')['url'];
						echo '<a href="' . $gif . '">';
							d7_acf_image('gif_image', 'thumbnail');
						echo '</a>';
					endwhile;
				endif;
				wp_reset_postdata();
			?>

		</section><!--  .l-content-->

		<?php get_sidebar(get_post_type()); ?>

	</div><!--  .l-main -->

<?php get_footer(); ?>
