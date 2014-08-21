var indexCtrl = angular.module('indexCtrl', []);


indexCtrl.controller('indexController', function($scope, $http){
    $scope.hands = 'tortoise';
    
    $scope.pickle = function(data){
        return 'pickelmeat'+ data;
    }; 
    
   
    $http.get('/artic/ajax/').success(function(data){
        $scope.posts = data;
        $scope.contentType = $scope.posts.contentType;
        $scope.minorCat_id = $scope.posts.minorCat_id;
        
    });
    
    
    $http.get('/category/ajax/').success(function(data){
        $scope.categories = data;
        $scope.categoriesLength = $scope.categories.length;
        
        /*
        *Get all category names and ids
        */
        //create array for category names and id numbers
        $scope.categoryArray = [];
        
        //iterate through categories
        for(var i = 0; i < $scope.categoriesLength; i++){
            //get name and id of category
            var key = $scope.categories[i].title;
            var value = $scope.categories[i].id;
            //push them as a key/value pair to array as name/id
            $scope.categoryArray[key] = value;

        }

               
        
                
    $scope.url = window.location.pathname.split('/');
    $scope.currentUrl = $scope.url[3]; 
        
    $scope.currentCategoryId = $scope.categoryArray[$scope.currentUrl];
    

    
        
    });
    
   
    //i have current category ID
    
    //i have posts
    
    
});

