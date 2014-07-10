
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
    <link href="/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- for TINYMCE TEXTAREA -->
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	
	<!--<script type="text/javascript">
		tinymce.init({
			selector: "textarea"
		 });
		 
		
	</script>-->
	<script type="text/javascript">
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			toolbar2: "print preview media | forecolor backcolor emoticons",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			]
		});
	</script>

	
	
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">WebBusinessGeek [admin]</a>
		   
			</div>
			 @if(!Auth::check())
			 <a href="/admin/users/login" type="submit" class="btn btn-success navbar-btn navbar-right">Login</a>
			 @else
			  <a href="/admin/users/logout" type="submit" class="btn btn-danger navbar-btn navbar-right">Logout</a>
			 @endif
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="/admin/users">Users</a></li>
				<li><a href="/admin/posts">Posts</a></li>
				<li><a href="/admin/category">Categories</a></li>
				<li><a href="/admin/subcategory">Subcategories</a></li>
			  </ul>
		  
			</div><!--/.nav-collapse -->
		
		  </div>
		</div> 

		<div class="container">
	
		@if(Session::has('badMessage'))
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				{{ Session::get('badMessage') }}
			</div>
		@elseif(Session::has('successMessage'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				{{ Session::get('successMessage') }}
			</div>
		@endif
		
		<br/><br/>
		
		
			
		{{ Form::open(array( 'url' =>'admin/users', 'class' => 'form-horizontal', 'role' => 'form', 'action' => 'UserController@store') ) }}
 
 
			<input type="hidden" name="method" value="post">
 
			<div class="form-group">
				<label class="col-sm-2 control-label" for="name">Enter name: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" placeholder="ex. Sonic the hedgehog">
					<p class="help-block">Enter a name of the new user.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="email">Enter email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="ex. blue_spikeyDude@spinball.com">
					<p class="help-block">Enter their email address.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="password">Enter their new Password:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" placeholder="Ssshhhh!">
					<p class="help-block">Enter a password.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="password_confirmation">Confirm it:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password_confirmation" placeholder="SSSHHHHHH!">
					<p class="help-block">Make sure you entered it correctly.</p>
				</div>
			</div>
	
			<div class="form-group">
				<label class="col-sm-2 control-label" for="admin">Will they be an admin?</label>
				<div class="col-sm-10">
					<select name="admin" class="form-control">
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
					<p class="help-block">Enter their email.</p>
				</div>
			</div>
	
			<div class="form-gorup">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Create User</button>
				</div>
			</div>
	
		</form>

		 @yield('content')
		
		

		</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
