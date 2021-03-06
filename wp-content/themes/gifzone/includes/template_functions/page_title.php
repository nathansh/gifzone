<?php

	/**
	 * Page title used in the content area of each page. Note this is kinda legacy.
	 * Could be replaced with wp_title().
	 *
	 * @package d7
	 * @subpackage boilerplate-theme
	 *
	 * @return string The page title
	 *
	 */
	function d7_get_page_title() {

		$title = '';

		if ( is_category() ) {
			$title .= single_cat_title("", false);
		} elseif( is_tag() ) {
			$title .= __('Content tagged: ', get_bloginfo('name') ) . single_tag_title("", false);
		} elseif (is_day()) {
			$title .= __('Archive for ', get_bloginfo('name') ) . get_the_time('F jS, Y');
		} elseif (is_month()) {
			$title .= __('Archive for', get_bloginfo('name') ) . ' ' . get_the_time('F, Y');
		} elseif (is_year()) {
			$title .= __('Archive for', get_bloginfo('name') ) . ' ' . get_the_time('Y');
		} elseif (is_search()) {
			$title .= __('Search results', get_bloginfo('name') );
			if ( isset($_GET['s']) ) {
				$title .= ' ' . __('for', get_bloginfo('name') ) . ' <span class="search_term">&quot;' . $_GET['s'] . '&quot;</span>';
			}
		} elseif (is_author()) {
			$title .= __('Author archive', get_bloginfo('name') );
		} elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
			$title .= __('Archives');
		} elseif (is_404()) {
			$title .= __('Oh darn!', get_bloginfo('name') );
		} else {
			$title .= bloginfo('name');
		}

		return $title;

	}

	/**
	 * Prints the content title generated by get_page_title
	 *
	 * @package d7
	 * @subpackage boilerplate-theme
	 *
	 * @uses d7_get_page_title()
	 *
	 */
	function d7_page_title() {
		echo d7_get_page_title();
	}
