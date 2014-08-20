var indexCtrl = angular.module('indexCtrl', []);


indexCtrl.controller('indexController', function($scope, $http){
    $scope.hands = 'tortoise';
    
    $scope.pickle = function(data){
        return 'pickelmeat'+ data;
    }; 
    
   
    $http.get('/artic/post/');
        
    }
    
    
);

