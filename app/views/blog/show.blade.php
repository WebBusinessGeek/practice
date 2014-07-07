@extends('templates.sidenav')






@section('content')
	

<div class="moveleft" style=" ">
  <div class="row">
            <div class="col-lg-8">
            
	
	<p class="lead"  style="color:#FF4C00;"><span class="glyphicon glyphicon-circle-arrow-left"></span><span style="color: black;"> Back to the </span>{{link_to("/blog/$category->title/$subCategory->title", $subCategory->oTitle, array('style' => 'color:#FF4C00;')) }}<span style="color: black;"> index.</span></p>

                <!-- the actual blog post: title/author/date/content -->
                <h1>{{$post->oTitle}}</h1>
                <p class="lead">by <a href="index.php" style="color:#FF4C00;">{{$post->user->name}}</a>
                </p>
                <hr>
                @if($post->imageName == true)
                <img src="http://placehold.it/900x400" class="img-responsive">
                <hr>
                @endif
                
                <p class="lead">{{$post->subTitle}}</p>
                <p>{{$post->body}}</p>
               
               

                <hr>

	<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'webbusinessgeek'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    </div>
            

</div>
@stop



