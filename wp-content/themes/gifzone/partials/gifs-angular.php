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
			<div class="form__group">
				<label for="gifs-order">Ordery</label>
				<div class="form-select__wrapper form__control">
					<select name="order" id="gifs-order" class="form-select" ng-model="selected_order">
						<option value="-date" selected="selected">Newest</option>
						<option value="date">Oldest</option>
					</select>
				</div>
			</div>
		</form>

		<!-- Listing -->
		<ul class="gif-list">
			<li ng-repeat="gif in results = ( gifs|filter:{category:selected_category, tag:selected_tag}|orderBy:selected_order )" class="gif-list__item">
			<!-- <li ng-repeat="gif in gifs|filter:{category:selected_category, tag:selected_tag}|orderBy:selected_order" class="gif-list__item"> -->
				<div class="gif-tile">
					<a ng-href="{{gif.custom_fields.gif_image.url}}" class="gif-tile__link fresco">
						<!-- Image -->
						<img ng-src="{{gif.custom_fields.gif_image.sizes.thumbnail}}" width="150" height="150" />
						<!-- Tags -->
						<ul class="gif-tile__tags">
							<li ng-repeat="tag in gif.custom_fields.gif_tags" class="gif-tile__tag">
								#{{tag.slug}}
							</li>
						</ul>
					</a>
				</div>
			</li>
			<p ng-if="results.length == 0">No gifs😞</p>
		</ul>
	</div>
</div>
