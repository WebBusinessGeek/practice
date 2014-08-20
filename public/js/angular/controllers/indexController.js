var indexCtrl = angular.module('indexCtrl', []);


indexCtrl.controller('indexController', function($scope, $http){
    $scope.hands = 'tortoise';
    
    $scope.pickle = function(data){
        return 'pickelmeat'+ data;
    }; 
    
   
    $http.get('/artic/ajax/').success(function(data){
        $scope.posts = data;
        $scope.contentType = $scope.posts.contentType;
    });
    
    
    $http.get('/category/ajax/').success(function(data){
        $scope.categories = data;
    });
    
    $scope.url = window.location.pathname.split('/');
    
    $scope.currentUrl = $scope.url[3];
    
    
    
  
    
});

