var app = angular.module('myApp', [], function($interpolateProvider){
    //get blade to work with Angular
    $interpolateProvider.startSymbol('<<<');
    $interpolateProvider.endSymbol('>>>');   
});