<form action="#" class="form form--inline gif-filters">
	<div class="form__group">
		<label for="gifs-tag">Tag</label>
		<div class="form-select__wrapper form__control">
			<select name="tag" id="gifs-tag" class="form-select">
				<option value="">All</option>
				<?php
					$tags = get_terms('post_tag');
					foreach ( $tags as $tag ) {
						echo '<option value="' . $tag->slug . '">#' . $tag->slug . '</option>';
					}
				?>
			</select>
		</div>
	</div>
	<div class="form__group">
		<label for="gifs-cat">Category</label>
		<div class="form-select__wrapper form__control">
			<select name="cat" id="gifs-cat" class="form-select">
				<option value="">All</option>
				<?php
					$categories = get_terms('category');
					foreach ( $categories as $category ) {
						echo '<option value="' . $category->slug . '">' . $category->name . '</option>';
					}
				?>
			</select>
		</div>
	</div>
	<!--
	<div class="form__group">
		<label for="gifs-order">Ordery</label>
		<div class="form-select__wrapper form__control">
			<select name="order" id="gifs-order" class="form-select">
				<option value="newest">Newest</option>
				<option value="oldest">Oldest</option>
			</select>
		</div>
	</div>
	-->
</form>
