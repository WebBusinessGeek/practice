var appfilters = angular.module('appFilters', []);


appfilters.filter('matchCategory', function(){
    return function(data, category) {
        var filtered = [];
        if(!category){
            console.log('no category provided');
            return;
        }
        for(var i=0; i < data.length; i++){
            var post = data[i];
            if(post.minorCat_id == category){
                filtered.push(post);
            }
        }
        return filtered;
    }
});


appfilters.filter('matchContentType', function(){
    return function(data, contentType){
        var filtered = [];
        if(!contentType){
            console.log('no contentType provided');
            return;
        }
        for(var i=0; i < data.length; i++){
            var post = data[i];
            if(post.contentType == contentType){
                filtered.push(post);
            }
        }
        return filtered;
    }
});

appfilters.filter('matchhowToLifecycle', function(){
    return function(data, howToLifecycle){
        var filtered = [];
        if(!howToLifecycle){
            console.log('no howToLifecycle provided');
            return;
        }
        for(var i=0; i < data.length; i++){
            var post = data[i];
            if(post.howToLifecycle == howToLifecycle){
                filtered.push(post);
            }
        }
        return filtered;
    }
});
