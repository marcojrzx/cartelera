var peliculas = angular.module('peliculas', ['djds4rce.angular-socialshare']);

.run(function($FB){
  $FB.init('386469651480295');
});

jQuery(document).ready(function () {
   angular.bootstrap(document.getElementById('peliculas-app'), ['peliculas']);
});