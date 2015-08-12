var gifZone = angular.module('gifZone', []);

gifZone.controller('GifZoneListing', ['$scope', '$http', function($scope, $http){

	// Do the AJAX request
	$http.get('/wp-json/wp/v2/gifs?per_page=30')

		// It worked! 👍
		.success(function(data){

			// Loop through the results
			for ( var i = 0; i < data.length; i++ ) {
				console.log(data[i]);
				// Dig out the category to make filtering super eeasy
				data[i].category = data[i].custom_fields.gif_category;

				// Pull out the tag names as well to make filtering on them easy as well
				data[i].tag = '';
				for ( j = 0; j < data[i].custom_fields.gif_tags.length; j++ ) {
					data[i].tag += data[i].custom_fields.gif_tags[j].slug;
				}

			}

			// Save our data to $scope, making it available in the view
			$scope.gifs = data;

		});

}]);
