<div id="peliculas-app" ng-controller="peliculascontroller">
 
<!-- filters -->

  <div ng-controller="AccordionDemoCtrl">

  
   <accordion close-others="oneAtATime">
    <accordion-group class="col-md-4" heading="ESTADO" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled" >
      <div ng-repeat="pelicula in peliculas">
       <div class="btn btn-default btn-sm"><h2 style= "cursor:pointer;" ng-click="pres(pelicula.node.estado)">{{pelicula.node.estado}}</h2></div> 
      </div> 
      <button style="margin-top: 3px" type="button" class="btn btn-sm btn-danger" ng-click="clear1()">TODOS LOS ESTADOS</button>
    
    </accordion-group>
   
   </accordion>
   
  
   <accordion close-others="oneAtATime">
    <accordion-group class="col-md-4" heading="LUGAR" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled" >
      <div ng-repeat="pelicula in peliculas | filter: pret">
       <div class="btn btn-default btn-sm"><h2 style="cursor:pointer;" ng-click="pre(pelicula.node.Lugar)">{{pelicula.node.Lugar}}</h2></div> 
      </div> 
    <button style="margin-top: 3px" type="button" class="btn btn-sm btn-danger" ng-click="clear()">TODAS LAS PELICULAS </button> 
    
    </accordion-group>
   
   
    
   </accordion>
 </div>
<!-- filters -->

<!-- Datapicker -->

   <!-- <div ng-controller="DatepickerDemoCtrl">
    <div class="row">
        <div class="col-md-4">
            <p class="input-group">
              <input type="text" class="form-control" datepicker-popup="{{format}}" ng-model="dt" is-open="opened" min-date="minDate" max-date="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" />
              <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click="open($event)"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>
        </div>
    </div>
   </div> -->
<!-- Datapicker -->


<!-- Muestra contenido peliculas -->
 <div  class="container-fluid">
	<div style="margin-left: 25px; margin-top: 10px" class="grid" > 
  <div class="row">  
	 <div class="pelicula" ng-repeat="pelicula in peliculas | filter: predicate  | filter: pred">
					<div class="col-md-12" >
						<img class="col-sm-6" style="width: 280px; cursor:pointer; margin-top: 10px;" src="{{pelicula.node.imagen}}"   />
						<div class="col-sm-6"  Style="margin-top: 10px; background-color: #e5d9fd ;">
              <h2>{{pelicula.node.title}}</h2>
							<h2>{{fecha| date : 'yyyy-MM-dd' }}{{pelicula.node.title}}</h2>
              <p>{{pelicula.node.fechaa}}</p>
							<p>Duke is very bored. When he looks at the sky, he feels to run. Duke is very bored. When he looks at the sky, he feels to run. Duke is very bored. When he looks at the sky, he feels to run. Duke is very bored. When he looks at the sky, he feels to run.</p>
							<!--<a href="{{pelicula.node.Path}}">View more</a>-->
								
					 </div>		
          </div>
         </div> 
 	   </div>
  </div>
 </div >

<!-- Muestra contenido peliculas -->

<!-- Muestra contenido lugar -->
 <div class="col-md-12" style="background-color: black; font-color: white">   
  <div style="margin-left: 25px; margin-top: -20px" class="grid" > 
    <div class="lugar" ng-repeat="lugar in lugar | filter: lu ">
          <!--<figure class="effect-duke">-->
            
            <figcaption>

              <h1>Lugar: {{lugar.node.name}}</h1>
              <p class="col-md-6"> {{lugar.node.description}}</p>
              <img class="col-md-6" style="width: 210px;" src="{{lugar.node.foto}}" /> 

              <div style="margin-top: 10px;" class="col-md-12">
               <a href="{{lugar.node.link}}"><button type="button"  class="btn btn-info" >+ INFO</button></a>
              </div>
              <!--<a href="{{pelicula.node.Path}}">View more</a>-->
            </figcaption>     
          </figure>
    </div>
  
  </div>
 </div> 

<!-- Muestra contenido lugar -->

 <!--<div>
   <pagination total-items="totalItems" ng-model="currentPage" ng-change="pageChanged()"></pagination>
 </div>-->

</div>



