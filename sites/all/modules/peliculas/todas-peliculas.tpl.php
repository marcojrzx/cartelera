<div id="peliculas-app" ng-controller="peliculascontroller">
 <div class="pelicula" ng-repeat="pelicula in peliculas">
 	<h2>{{pelicula.node.title}}</h2>
 	<img style="max-width: 280px;" src="{{pelicula.node.imagen}}" />
 </div>
</div>