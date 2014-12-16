peliculas.controller('peliculascontroller', function($scope, $http, $modal) {

/* date (fecha) */

    $scope.fecha = '';   
    $scope.fecha = new Date();
/* date (fecha) */    

/* filtros */

   $scope.lu= 'oo';
   $scope.predicate='';
         $scope.pre= function(index){
          $scope.predicate=angular.copy(index);
          $scope.lu  = angular.copy(index);           
         };
     
   $scope.pred='';
   $scope.pret='oopp';
         $scope.pres= function(index){
          $scope.pred=angular.copy(index);
          $scope.pret= angular.copy(index);
          $scope.lu= 'oo';
         };      
    
  
   $scope.clear = function(){
      $scope.predicate='';
          $scope.lu  = 'oo';  
   };

   $scope.clear1 = function(){
    $scope.pred='';
    $scope.predicate='';
    $scope.lu  = 'oo'; 
       
   };

/* filtros */

/* json */

  $http.get('json/lugar').success( function(result) {
     $scope.lugar = (function () {
      return result.nodes;
     } ) ();
   });

	$http.get('json/pelicula').success( function(result) {
	   $scope.peliculas = (function () {
	   	return result.nodes;
	   } ) ();
   });
/* json */   	

});

/* accordion */

 peliculas.controller('AccordionDemoCtrl', function ($scope) {

    $scope.oneAtATime = true;

  $scope.status = {
    isFirstOpen: false,
    isFirstDisabled: false
  };
 });

/* accordion */


