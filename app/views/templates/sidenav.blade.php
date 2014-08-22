<!DOCTYPE html>
<html lang="en" ng-app="myApp">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>WebBusinessGeek</title>
    
    <!-- Angular -->
    <script src="/js/angular/angular.min.js"></script>
    <script src="/js/angular/app.js"></script>
      
    <!-- Angular Controllers -->
    <script src="/js/angular/controllers/blogController.js"></script>
    
    <!-- Angular Services -->
    
    <!-- Angular Filters -->
    <script src="/js/angular/filters/filters.js"></script>
      

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
 <!--<link href="/css/starter-template.css" rel="stylesheet">-->
    <!-- Add custom CSS here -->
    <link href="/css/simple-sidebar.css" rel="stylesheet">
    <link href="/css/index-extras.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
	
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

    <div id="wrapper" class="container" ng-controller="blogController">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" >
            <ul class="sidebar-nav">
                <li class="sidebar-brand" style="background: #fff; "><a href="/">WebBusinessGeek<span class="glyphicon glyphicon-home"></span></a>
                </li><br/>
             <?php $categories = MajorCategory::all();?>
               @foreach($categories as $category)
                	<div class="dropdown"><li style="height:60px;" ><a href="#" class="dropdown-toggle " data-toggle="dropdown" style="color:#FFB798;padding-top: 10px;padding-bottom: 10px;"><h4>{{$category->oTitle}}<b class="caret"></b></h4></a>
                		<ul class="dropdown-menu">
                	<?php $subcategories = $category->MinorCategory;?>
                		@foreach($subcategories as $subcategory)
                			<li class="lead dropdownlink" style="font-size:14px;" ><a  style="color: #FF4C00;" href="/blog/{{$category->title}}/{{$subcategory->title}}">{{$subcategory->oTitle}}</a></li>
                		
                		@endforeach 
                		</ul>
                	</li>
                	</div>
                	<br/><br/>
                @endforeach
                
                
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper" >
        <!-- Responsive Button -->
            <div class="content-header">
                    <a id="menu-toggle" href="#" class="btn btn-default"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <!-- Angular test -->
            <input type="text" ng-model="test"> <<< test >>>
            
            <li ng-repeat="majorCat in majorcategories"> <<< majorCat.oTitle>>> <<<>>>
                <ul>
               <li ng-repeat="minor in majorCat.minor_category"> <<< minor.oTitle >>> </li>
                </ul>
            </li>
            
            
           @yield('content')

      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/simple-sidebar.js"></script>
     <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
   <script> $(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});</script>
</body>

</html>
