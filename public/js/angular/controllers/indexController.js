var indexCtrl = angular.module('indexCtrl', []);


indexCtrl.controller('indexController', function($scope, $http){
    $scope.hands = 'tortoise';
    
    $scope.pickle = function(data){
        return 'pickelmeat'+ data;
    }; 
    
   
    $http.get('/artic/post/').success(function(data){
        $scope.posts = data;
        $scope.contentType = $scope.posts.contentType;
    });
    
    
  
    
});

