<?php
	$the_query = new WP_Query(array(
		'post_type' => 'gif',
		'posts_per_page' => -1
	));

	if ( $the_query->have_posts() ) :

		include "gif-filters.php";

		echo '<ul class="gif-list">';
			while ( $the_query->have_posts() ) : $the_query->the_post();

				echo '<li class="gif-list__item">';
					echo '<div class="gif-tile editable">';

						$gif = get_field('gif_image')['url'];
						$tags = wp_get_post_tags($post->ID);

						// Gif with link
						echo '<a href="' . $gif . '" class="gif-tile__link">';

							// Image
							d7_acf_image('gif_image', 'thumbnail', 'gif-tile__image');

							// hashtags
							if ( count($tags) ) {
								echo '<ul class="gif-tile__tags">';
									foreach ( $tags as $index => $tag ) {
										echo '<li class="gif-tile__tag">#';
											echo $tag->name;
											if ( $count + 1 < count($tags) ) {
												echo ', ';
											}
										echo '</li>';
									}
								echo '</ul>';
							}

						echo '</a>';


						edit_post_link();

					echo '</div>';

				echo '</li>';

			endwhile;
		echo '</ul>';
	endif;
	wp_reset_postdata();
?>
