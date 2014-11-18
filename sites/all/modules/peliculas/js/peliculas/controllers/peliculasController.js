peliculas.controller('peliculascontroller', function($scope, $http) {
	$http.get('json/pelicula').success( function(result) {
	   $scope.peliculas = (function () {
	   	return result.nodes;
	   })();	
	});
	
});