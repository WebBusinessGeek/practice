var indexCtrl = angular.module('indexCtrl', []);


indexCtrl.controller('blogController', function($scope, $http){
    $scope.hands = 'tortoise';
    
    $scope.pickle = function(data){
        return 'pickelmeat'+ data;
        
   
        
  
    
    }; 
        
    
  
    
    
    
    
    //get majorcategories
    $http.get('/majorcategory/ajax/').success(function(data){
        
        $scope.majorcategories = data;
        
        console.log(data);
         /*
        *Get all category names and ids
        */
        //create array for category names and id numbers
        $scope.majorcategoryArray = [];
        
        $scope.majorcategoryArray2 = [];
        
        $scope.majorcategoryArray3 = [];
        
        //iterate through categories
        for(var i = 0; i < $scope.majorcategories.length; i++){
            //get name and id of category
            var mcatTitle = $scope.majorcategories[i].title;
            var mcatId = $scope.majorcategories[i].id;
            var mcatName = $scope.majorcategories[i].oTitle;
            // title/id
            $scope.majorcategoryArray[mcatTitle] = mcatId;
            // id/oTitle or Name
            $scope.majorcategoryArray2[mcatId] = mcatName;
            // id/title
            $scope.majorcategoryArray3[mcatId] = mcatTitle;
        }
        
        
    $scope.murl = window.location.pathname.split('/');
    $scope.currentMUrl = $scope.murl[2];
         
    $scope.currentMajorCategoryId = $scope.majorcategoryArray[$scope.currentMUrl];
    
    $scope.currentMajorCategoryName = $scope.majorcategoryArray2[$scope.currentMajorCategoryId];
         
       
    $scope.currentMajorCategoryUrl = $scope.majorcategoryArray3[$scope.currentMajorCategoryId];
    
        
        
    });
    
    
    
    
   //get posts
    $http.get('/artic/ajax/').success(function(data){
        $scope.posts = data;
        $scope.contentType = $scope.posts.contentType;
        $scope.minorCat_id = $scope.posts.minorCat_id;
        
    });
    
    //get subcategories
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
    
    if($scope.url[4]){
        $http.get('/artic/ajax/'+$scope.url[4]).success(function(data){
            console.log(data);
        });
    }
        
    $scope.currentCategoryId = $scope.categoryArray[$scope.currentUrl];
    
    $scope.currentCategoryName = $scope.categoryArray2[$scope.currentCategoryId];
         
    $scope.currentCategoryUrl = $scope.categoryArray3[$scope.currentCategoryId];
    
    $scope.fullUrl = window.location.pathname + '/';
    
       
        
    });
    
  
    
});

