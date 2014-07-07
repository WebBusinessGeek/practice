@extends('templates.sidenav')






@section('content')
	<!--<div  class="content-header">-->
		<div class="row">
			<div class="col-md-12">
		<div style="color:#FF4C00;"><h1 class="lead" style="font-size: 45px; margin-bottom: -30px;">{{ $subCategory->oTitle }} </h1></div>
			<h1 ><small>And <em>pretty much</em> everything you need to know about it...</small></h1>
			</div>
    	</div>
 <!--   </div>-->
		
 <!-- Keep all page content within the page-content inset div! -->
           <!-- <div class="page-content inset">
            <?php $color = array('primary', 'danger', 'success', 'info', 'warning');
            	$random = array_rand($color, 3);?>
            	<p class="lead"> Almost everything you need to know about <span class="label {{'label-'. $color[$random[1]]}}">{{ $subCategory->oTitle}}</span> ! </p>
                <div class="row">
                    <!--<div class="col-md-12"><!--
                        <p class="lead">This simple sidebar template has a hint of JavaScript to make the template responsive. It also includes Font Awesome icon fonts.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="well">The template still uses the default Bootstrap rows and columns.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="well">But the full-width layout means that you wont be using containers.</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">Three Column Example</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">Three Column Example</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">You get the idea! Do whatever you want in the page content area!</p>
                    </div>
                </div>-->
                
   					
   				
   					 <div class="row">
        
        
        				
						<div class="col-md-6">
						
							<!-- What -->
							  <h3>What is '{{ $subCategory->oTitle}}'?</h3>
							  <p class="lead">Let these articles introduce you to '{{ $subCategory->oTitle }}' and its benefits to your business.</p>
							
							<ul>
							{{-- Get all the articles that match the section. Else show no articles --}}
							<?php $a = 0;?>
							 @foreach($posts as $post)
							 	@if($post->contentType == 'What' && $post->is_published == true)
							 		<li ><a style="color:black;" href="/blog/{{$category->title}}/{{$subCategory->title}}/{{$post->title}}">{{ $post->oTitle }}</a></li>
							 		<?php $a++; ?>
							 	@endif
							 @endforeach
							 @if($a == 0)
							 		<li>{{'Sorry no articles yet'}}</li>
							 @endif
							</ul>
							  
							  
							 <br/><br/>   
							<!-- Application -->
							<h3>Applying '{{ $subCategory->oTitle}}'</h3>
							  <p class="lead">See examples of '{{ $subCategory->oTitle }}' applied to different buisness models. This should give you a better
							   understanding of the topic and best practices to utilize.</p>
							 
							 <ul>
							{{-- Get all the articles that match the section. Else show no articles --}}
							<?php $b = 0;?>
							 @foreach($posts as $post)
							 	@if($post->contentType == 'Application' && $post->is_published == true)
							 		<li><a style="color:black;" href="/blog/{{$category->title}}/{{$subCategory->title}}/{{$post->title}}">{{ $post->oTitle }}</a></li>
							 		<?php $b++; ?>
							 	@endif
							@endforeach
							@if($b == 0)
							 		<li>{{'Sorry no articles yet'}}</li>
							@endif
							 </ul>
							 
							 
							 <br/><br/>  
							<!-- Resources -->
							<h3>'{{ $subCategory->oTitle}}' Resources</h3>
							  <p class="lead">Tools and Services that will the increase efficiency of your {{ $subCategory->oTitle }} efforts.</p>
							
							<ul>
							{{-- Get all the articles that match the section. Else show no articles --}}
							<?php $c = 0;?>
							 @foreach($posts as $post)
							 	@if($post->contentType == 'Resources' && $post->is_published == true)
							 		<li><a style="color:black;" href="/blog/{{$category->title}}/{{$subCategory->title}}/{{$post->title}}">{{ $post->oTitle }}</a></li>
							 		<?php $c++; ?>
							 	@endif
							 	
							 @endforeach
							 @if($c == 0)
							 		<li>{{'Sorry no articles yet'}}</li>
							 	@endif
							 </ul>
							   
							   
							<br/><br/>
							<!-- Inspiration -->
							<h3>'{{ $subCategory->oTitle}}' Inspiration</h3>
							  <p class="lead">We all need inspiration some time. Here is some related to {{ $subCategory->oTitle }}. </p>
							
							<ul>
							{{-- Get all the articles that match the section. Else show no articles --}}
							<?php $d = 0;?>
							 @foreach($posts as $post)
							 	@if($post->contentType == 'Inspiration' && $post->is_published == true)
							 		<li><a style="color:black;" href="/blog/{{$category->title}}/{{$subCategory->title}}/{{$post->title}}">{{ $post->oTitle }}</a></li>
							 		<?php $d++; ?>
							 	@endif
							 	
							 @endforeach
							 @if($d == 0)
							 		<li>{{'Sorry no articles yet'}}</li>
							 	@endif
							</ul>
						
						
						</div><!-- close first column -->
   
   						<!-- HowTO -->
					    <div class="col-md-6">
							<h3>{{ $subCategory->oTitle}} 101:</h3>
							<p class="lead">Finally learn {{ $subCategory->oTitle }} with these step-by-step guides. You will get a 
							thorough walkthrough of each phase involved in an optimal {{ $subCategory->oTitle }} endeavor. Enjoy!</p>
						
							<br/>
							 <!-- How to Research & Planning -->
							 <h4 class="lead" style="color:#FF4C00;">How to: <small><i>Getting Started.</i></small></h4>
							 <ul>
							{{-- Get all the articles that match the section. Else show no articles --}}
							<?php $e = 0;?>
							 @foreach($posts as $post)
							 	@if(($post->contentType == 'HowTo' && $post->is_published == true) && ($post->howToLifecycle == 'Research'|| $post->howToLifecycle == 'Planning'))
							 		<li><a style="color:black;" href="/blog/{{$category->title}}/{{$subCategory->title}}/{{$post->title}}">{{ $post->oTitle }}</a></li>
							 		<?php $e++; ?>
							 	@endif
							 	
							 @endforeach
							 @if($e == 0)
							 		<li>{{'Sorry no articles yet'}}</li>
							 @endif
							</ul>
							
							
							 
							 <br/>
							 <!-- How to Construction -->
							  <h4 class="lead" style="color:#FF4C00;">How to: <small><i>Moving On.</i></small></h4>
							   <ul>
							{{-- Get all the articles that match the section. Else show no articles --}}
							<?php $f = 0;?>
							 @foreach($posts as $post)
							 	@if($post->howToLifecycle == 'Construction' && $post->is_published == true)
										<li><a style="color:black;" href="/blog/{{$category->title}}/{{$subCategory->title}}/{{$post->title}}">{{ $post->oTitle }}</a></li>
										<?php $f++; ?>
								@endif
							 	
							 @endforeach
							 @if($f == 0)
							 		<li>{{'Sorry no articles yet'}}</li>
							 @endif
							</ul>
							  
							  
							  
							  
							  
							  
							  <br/>
							  <!-- How to Launch -->
							  <h4 class="lead" style="color:#FF4C00;">How to: <small><i>Can't stop now.</i></small></h4>
							  <ul>
							{{-- Get all the articles that match the section. Else show no articles --}}
							<?php $g = 0;?>
							 @foreach($posts as $post)
							 	@if($post->howToLifecycle == 'Launch' && $post->is_published == true)
							 		<li><a style="color:black;" href="/blog/{{$category->title}}/{{$subCategory->title}}/{{$post->title}}">{{ $post->oTitle }}</a></li>
							 		<?php $g++; ?>
							 	@endif
							 	
							 @endforeach
							 @if($g == 0)
							 		<li>{{'Sorry no articles yet'}}</li>
							 @endif
							</ul>
							  
							  
							  
							  <br/>
							  <!--  How to Growth -->
							  <h4 class="lead" style="color:#FF4C00;">How to: <small><i>What's next?</i></small></h4>
							<ul>
							{{-- Get all the articles that match the section. Else show no articles --}}
							<?php $h = 0;?>
							 @foreach($posts as $post)
							 	@if($post->howToLifecycle == 'Growth' && $post->is_published == true)
							 		<li><a style="color:black;" href="/blog/{{$category->title}}/{{$subCategory->title}}/{{$post->title}}">{{ $post->oTitle }}</a></li>
							 		<?php $h++; ?>
							 	@endif
							 	
							 @endforeach
							 @if($h == 0)
							 		<li>{{'Sorry no articles yet'}}</li>
							 @endif
							</ul>
							  
					    </div><!-- Close second column -->
					    
					</div>
					
					
                
                
                
                
                
                
                
                
                
           <br/>






@stop