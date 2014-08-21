var appfilters = angular.module('appFilters', []);


appfilters.filter('matchIt', function(){
    return function(items, matchMe){
        
        var filtered = [ ];
        
        for(var count = 0; count < items.length; count++){
            
            var item = items[count];
            
            if(item == matchMe){
                filtered.push(item);
            }
            
        }
    
  
    };
     // console.log(filtered);
    
    
    
});