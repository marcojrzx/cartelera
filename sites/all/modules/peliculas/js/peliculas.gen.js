var peliculas = angular.module('peliculas', []);

jQuery(document).ready(function () {
   angular.bootstrap(document.getElementById('peliculas-app'), ['peliculas']);
});
peliculas.controller('peliculascontroller', function($scope, $http) {
	$http.get('json/pelicula').success( function(result) {
	   $scope.peliculas = (function () {
	   	return result.nodes;
	   })();	
	});
	
});