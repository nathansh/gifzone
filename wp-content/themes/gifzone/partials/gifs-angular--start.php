<div ng-app="gifZone">
	<div ng-controller="GifZoneListing" ng-cloak>

		<!-- Filters -->
		<form action="#" class="form form--inline gif-filters">
			<div class="form__group">
				<label for="gifs-tag">Tag</label>
				<div class="form-select__wrapper form__control">
					<select name="tag" id="gifs-tag" class="form-select" ng-model="selected_tag">
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
					<select name="cat" id="gifs-cat" class="form-select" ng-model="selected_category">
						<option value="">All</option>
						<?php
							$categories = get_terms('category');
							foreach ( $categories as $category ) {
								if ( $category->term_id == 1 ) {
									continue;
								}
								echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
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
						<option value="-date" selected="selected">Newest</option>
						<option value="date">Oldest</option>
					</select>
				</div>
			</div>
			-->
		</form>

		<!-- Listing -->
		<ul class="gif-list">
			<li class="gif-list__item">
				<div class="gif-tile">
					<a href="" class="gif-tile__link fresco">
						<!-- Image -->
						<!-- Tags -->
						<!--
						<ul class="gif-tile__tags">
							<li class="gif-tile__tag">
							</li>
						</ul>
						-->
					</a>
				</div>
			</li>
		</ul>
	</div>
</div>
