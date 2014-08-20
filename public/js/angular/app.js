//(function(){

var app = angular.module('myApp', ['setup', 'indexCtrl']);

     

var setup = angular.module('setup', [], function($interpolateProvider){
    //get blade to work with Angular
    $interpolateProvider.startSymbol('<<<');
    $interpolateProvider.endSymbol('>>>');   
});






//});//closes wrapping closure function