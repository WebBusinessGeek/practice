<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="/css/2cover-custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
	
	
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  <!-- Get all major categories -->
  <?php
  	$leadgen = MajorCategory::where('oTitle', '=', 'Lead Generation')->first();
  	$custacq = MajorCategory::where('oTitle', '=', 'Customer Acquisition')->first();
  	$proddev = MajorCategory::where('oTitle', '=', 'Product Development')->first();
  	$busmgmt = MajorCategory::where('oTitle', '=', 'Business Management')->first();
  	$terms = MajorCategory::where('oTitle', '=', 'Terms to know')->first();
  	$categories = array($leadgen, $custacq, $proddev, $busmgmt, $terms);
  	$links = array('#section2','#section3', '#section4', '#section5', '#section6');
  ?>

<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WebBusinessGeek</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#section1"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="#section2">Lead Generation</a></li>
        <li><a href="#section3">Customer Acquisition</a></li>
        <li><a href="#section4">Product Development</a></li>
        <li><a href="#section5">Business Management</a></li>
       <!-- <li><a href="#section6">Mad Randomness</a></li>-->
        <li><a href="#section6">Terms to know</a></li>
        <!--<li><a href="#section7">Who</a></li>-->
        <li>&nbsp;</li>
      </ul>
     <!-- <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          <div class="input-group"> 
            <div class="input-group-btn">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-chevron-down"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
                <li><a href="#">Category 4</a></li>
                <li><a href="#section5">Category 5</a></li> 
              </ul>
            </div>
            <input class="form-control" placeholder="What are searching for?" type="text">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span> </span>
          </div>
        </div>
      </form>-->
    </div>
  </div>
</nav>

<br/>

<!-- **************

Section Main 1

*******************-->

<section class="container-fluid" id="section1">
  <!-- Heading section 1 -->
   <div class="row">
  	<div class="col-sm-12  text-center">
        <h1>Empower Your Web Business</h1>
        <br>
    </div>
   </div>
	
	<!-- Copy section 1 -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<p class="lead">With change being the only constant, the web can be a very intimidating and confusing place to run a business. That's all I have, read my articles!</p>
			
			<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
		</div>
	</div>
	
	<!-- Icons section 1 -->
   <div class="row">
   		{{-- create counter to get wanted amount of images on each row --}}
   		<?php $p = 0; ?>
    	@foreach( $categories as $category)
    		@if( $p == 3 || $p == 6 || $p ==9 )
    			</div><br/><br/><div class="row">
    		@endif
    			<div class="col-md-4 text-center">
					<h4 class="lead">{{ $category->oTitle}}</h4>
					<!--<p><img src='/uploads/{{$category->imageName}}'></p>-->
					<p><img src="http://placehold.it/250x150"></p>
					<a class="btn btn-custom1"   href="/{{$links[$p]}}">Learn {{$category->oTitle}}</a>
				</div>
				<?php $p++; ?>
			@endforeach
		
	</div>
	
</section>






<!-- **************

Section Lead Generation 2

*******************-->

<section class="container-fluid" id="section2">
  <!-- Heading section 2 -->
   <div class="row">
  	<div class="col-sm-12  text-center">
        <h1>Generate leads smarter.</h1>
        <br>
    </div>
   </div>
	
	<!-- Copy section 2 -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<p class="lead">Your business may be able to survive off its current customer base, but why limit your income? Let's learn traffic generation strategies that focus primarily on results and maximizing profit.</p>
		
			<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
		</div>
	</div>
	
    <!-- Icons section 2 -->
   <div class="row">
   		{{-- create counter to get wanted amount of images on each row --}}
   		<?php $j = 0; ?>
    	@foreach( $leadgen->MinorCategory as $category)
    		@if( $j == 3 || $j == 6 || $j ==9)
    			</div><br/><br/><div class="row">
    		@endif
    			<div class="col-md-4 text-center">
					<h4 class="lead">{{ $category->oTitle}}</h4>
					<!--<p><img src='/uploads/{{$category->imageName}}'></p>-->
					<p><img src="http://placehold.it/250x150"></p>
					<a class="btn btn-custom2"  href="/blog/{{$leadgen->title}}/{{$category->title}}">Learn {{$category->oTitle}}</a>
				</div>
				<?php $j++; ?>
			@endforeach
		
	</div>

  

</section>







<!-- **************

Section Customer Acquisition 3

*******************-->
<section class="container-fluid" id="section3">
	
	 <!-- Heading section 3 -->
   <div class="row">
  	<div class="col-sm-12  text-center">
        <h1>Get more customers.</h1>
        <br>
    </div>
   </div>
   
   
	<!-- Copy section 3 -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<p class="lead">What good are visitors if they aren't helping you achieve your business objectives? Let's learn how to boost sales by applying high-quality sales techniques to your business. </p>
			
			<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
		</div>
	</div>
   
        <!-- Icons section 3 -->
   <div class="row">
   		{{-- create counter to get wanted amount of images on each row --}}
   		<?php $k = 0; ?>
    	@foreach( $custacq->MinorCategory as $category)
    		@if( $k == 3 || $k == 6 || $k ==9)
    			</div><br/><br/><div class="row">
    		@endif
    			<div class="col-md-4 text-center">
					<h4 class="lead">{{ $category->oTitle}}</h4>
					<!--<p><img src='/uploads/{{$category->imageName}}'></p>-->
					<p><img src="http://placehold.it/250x150"></p>
					<a class="btn btn-custom1" href="/blog/{{$leadgen->title}}/{{$category->title}}">Learn {{$category->oTitle}}</a>
				</div>
				<?php $k++; ?>
			@endforeach
		
	</div>
      
      
      
      
   
</section>






<!-- **************

Section Product Development 4

*******************-->

<section class="container-fluid" id="section4">
	
	 <!-- Heading section 4 -->
   <div class="row">
  	<div class="col-sm-12  text-center">
        <h1>Create better products.</h1>
        <br>
    </div>
   </div>
   
   
	<!-- Copy section 4 -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<p class="lead">Its just too easy to build the right product in the wrong market. Here we learn to be disciplined in our research and planning to create products that our customers will actually pay for.</p>
			 
			<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
		</div>
	</div>
   
        <!-- Icons section 4 -->
   <div class="row">
   		{{-- create counter to get wanted amount of images on each row --}}
   		<?php $l = 0; ?>
    	@foreach( $proddev->MinorCategory as $category)
    		@if( $l == 3 || $l == 6 || $l == 9)
    			</div><br/><br/><div class="row">
    		@endif
    			<div class="col-md-4 text-center">
					<h4 class="lead">{{ $category->oTitle}}</h4>
					<!--<p><img src='/uploads/{{$category->imageName}}'></p>-->
					<p><img src="http://placehold.it/250x150"></p>
					<a class="btn btn-custom2"  href="/blog/{{$leadgen->title}}/{{$category->title}}">Learn {{$category->oTitle}}</a>
				</div>
				<?php $l++; ?>
			@endforeach
		
	</div>
	
	
	
</section>







<!-- **************

Section Business Management 5

*******************-->
<section class="container-fluid" id="section5">
   <!-- Heading section 5 -->
   <div class="row">
  	<div class="col-sm-12  text-center">
        <h1>Increase efficiency.</h1>
        <br>
    </div>
   </div>
   
   
	<!-- Copy section 5 -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<p class="lead">Managing a business ain't easy...... Enough said.</p>
			
			<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
		</div>
	</div>
   
        <!-- Icons section 5 -->
   <div class="row">
   		{{-- create counter to get wanted amount of images on each row --}}
   		<?php $m = 0; ?>
    	@foreach( $busmgmt->MinorCategory as $category)
    		@if( $m == 3 || $m == 6 || $m ==9)
    			</div><br/><br/><div class="row">
    		@endif
    			<div class="col-md-4 text-center">
					<h4 class="lead">{{ $category->oTitle}}</h4>
					<!--<p><img src='/uploads/{{$category->imageName}}'></p>-->
					<p><img src="http://placehold.it/250x150"></p>
					<a class="btn btn-custom1" href="/blog/{{$leadgen->title}}/{{$category->title}}">Learn {{$category->oTitle}}</a>
				</div>
				<?php $m++; ?>
			@endforeach
	</div>
	
</section>









<!-- **************

Section Terms to Know 6

*******************-->
<section class="container-fluid" id="section6">
	<!-- Heading section 6 -->
   <div class="row">
  	<div class="col-sm-12  text-center">
        <h1>Know what they are talking about.</h1>
        <br>
    </div>
   </div>
   
   
	<!-- Copy section 6 -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<p class="lead">CRO ... SEO ... CPC ... PPC ... LPO ... SEM ... SERP ... LTV ... PSD ... PHP ... JAVA ... Deploying ... Slicing ... Mixins ... Heroku ... Panda? ... Penguin?? ... Coffee??? ... </p>
			
			<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
		</div>
	</div>
   
        <!-- Icons section 6 -->
   <div class="row">
   		{{-- create counter to get wanted amount of images on each row --}}
   		<?php $n = 0; ?>
    	@foreach( $terms->MinorCategory as $category)
    		@if( $n == 3 || $n == 6 || $n ==9)
    			</div><br/><br/><div class="row">
    		@endif
    			<div class="col-md-4 text-center">
					<h4 class="lead">{{ $category->oTitle}}</h4>
					<!--<p><img src='/uploads/{{$category->imageName}}'></p>-->
					<p><img src="http://placehold.it/250x150"></p>
					<a class="btn btn-custom2"  href="/blog/{{$leadgen->title}}/{{$category->title}}">Learn {{$category->oTitle}}</a>
				</div>
				<?php $n++; ?>
			@endforeach
		
	</div>

</section>

<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container">
    <button class="btn navbar-btn btn-success navbar-right">How can I help your business?</button>
  </div>
</nav>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/cover-custom.js"></script>
  </body>
</html>

