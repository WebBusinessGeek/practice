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
       
       
        /*
        *Get all category names and ids
        */
        //create array for category names and id numbers
        $scope.categoryArray = [];
        
        $scope.categoryArray2 = [];
        
        $scope.categoryArray3 = [];
        
        //iterate through categories
        for(var i = 0; i < $scope.categories.length; i++){
            //get name and id of category
            var catTitle = $scope.categories[i].title;
            var catId = $scope.categories[i].id;
            var catName = $scope.categories[i].oTitle;
            // title/id
            $scope.categoryArray[catTitle] = catId;
            // id/oTitle or Name
            $scope.categoryArray2[catId] = catName;
            // id/title
            $scope.categoryArray3[catId] = catTitle;

        }

               
   
    $scope.url = window.location.pathname.split('/');
    $scope.currentUrl = $scope.url[3];
         
        
    $scope.currentCategoryId = $scope.categoryArray[$scope.currentUrl];
    
    $scope.currentCategoryName = $scope.categoryArray2[$scope.currentCategoryId];
         
    $scope.currentCategoryUrl = $scope.categoryArray3[$scope.currentCategoryId];
    
    $scope.fullUrl = window.location.pathname + '/';
    
       
        
    });
    
  
    
});

