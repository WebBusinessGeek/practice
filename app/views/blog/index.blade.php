@extends('templates.sidenav')






@section('content')
	<!--<div  class="content-header">-->
<div ng-controller="indexController">
		<div class="row">
			<div class="col-md-12">
		<div style="color:#FF4C00;"><h1 class="lead" style="font-size: 45px; margin-bottom: -30px;"><<< currentCategoryName >>></h1></div>
			<h1 ><small>And <em>pretty much</em> everything you need to know about it...</small></h1>
			</div>
    	</div>
 <!--   </div>-->

            
   					
   				
   					 <div class="row">
        
                      
                         
                       
                         
						<div class="col-md-6">
						
							<!-- What -->
							  <h3>What is <<< currentCategoryName >>>?</h3>
							  <p class="lead">Let these articles introduce you to <<< currentCategoryName >>> and its benefits to your business.</p>
							 
                           
                                <p ng-show="(posts | matchCategory:currentCategoryId | matchContentType:'What' ).length == 0">Sorry no articles yet.</p>
                                <li ng-repeat="post in posts | matchCategory:currentCategoryId | matchContentType:'What' "> 
                                    <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>  
                                </li>
                           
							  
							 <br/><br/>  
                                
                                
                                
                                
                                
							<!-- Application -->
							<h3>Applying  <<< currentCategoryName >>></h3>
							  <p class="lead">See examples of <<< currentCategoryName >>> applied to different buisness models. This should give you a better understanding of the topic and best practices to utilize.</p>
							 
							 
                        
                                <p ng-show="(posts | matchCategory:currentCategoryId | matchContentType:'Application' ).length == 0">Sorry no articles yet.</p>
                                <li ng-repeat="post in posts | matchCategory:currentCategoryId | matchContentType:'Application' "> 
                                    <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>   
                                </li>
                      
							 
							 <br/><br/> 
                            
                            
                            
                            
                            
							<!-- Resources -->
							<h3> <<< currentCategoryName >>> Resources</h3>
							  <p class="lead">Tools and Services that will the increase efficiency of your <<< currentCategoryName >>>efforts.</p>
				            
                            
                                <p ng-show="(posts | matchCategory:currentCategoryId | matchContentType: 'Resources' ).length == 0">Sorry no articles yet.</p>
                                <li ng-repeat="post in posts | matchCategory:currentCategoryId | matchContentType: 'Resources' "> 
                                    <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>
                                </li>
                            
							
							  
							   
							<br/><br/>
                            
                            
                            
                            
                            
                            
                            
							<!-- Inspiration -->
							<h3> <<< currentCategoryName >>> Inspiration</h3>
							  <p class="lead">We all need inspiration some time. Here is some related to <<< currentCategoryName >>>. </p>
                                <p ng-show="(posts | matchCategory:currentCategoryId | matchContentType: 'Inspiration' ).length == 0">Sorry no articles yet.</p>
                                <li ng-repeat="post in posts | matchCategory:currentCategoryId | matchContentType: 'Inspiration' "> 
                                    <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>
                                </li>
                            
							
						
						</div><!-- close first column -->
                                
                                
                               
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                                
   
   						<!-- HowTO -->
					    <div class="col-md-6">
							<h3> <<< currentCategoryName >>> 101:</h3>
							<p class="lead">Finally learn <<< currentCategoryName >>> with these step-by-step guides. You will get a thorough walkthrough of each phase involved in an optimal <<< currentCategoryName >>>endeavor. Enjoy!</p>
						
						
							 <!-- How to Research & Planning -->
							 <h4 class="lead" style="color:#FF4C00;">How to: <small><i>Getting Started.</i></small></h4>
							  
                                <h6>HowTo Research Articles in Category: <<< currentCategoryId >>> </h6>
                                    <p ng-show="(posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Research' ).length == 0">Sorry no articles yet.</p>
                                    <li ng-repeat="post in posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Research' ">
                                        <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>        
                                    </li> 
                              
                                <h6>HowTo Planning Articles in Category: <<< currentCategoryId >>> </h6> 
                                    <p ng-show="(posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Planning' ).length == 0">Sorry no articles yet.</p>  
                                    <li ng-repeat="post in posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Planning' "> 
                                       <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>                                                      </li> 
                            
                            
                            
							
							
							 
							 <br/>
							 <!-- How to Construction -->
							  <h4 class="lead" style="color:#FF4C00;">How to: <small><i>Moving On.</i></small></h4>
							 
							  
							  <h6>HowTo Construction Articles in Category: <<< currentCategoryId >>> </h6>
                                    <p ng-show="(posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Construction'  ).length == 0">Sorry no articles yet.</p>         
                                    <li ng-repeat="post in posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Construction' "> 
                                        <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>
                                    </li>   
                              
                            
							  
							  
							  
							  <br/>
                                      
                                        
                                        
							  <!-- How to Launch -->
							  <h4 class="lead" style="color:#FF4C00;">How to: <small><i>Can't stop now.</i></small></h4>
							
							  
                                <h6>HowTo Launch Articles in Category: <<< currentCategoryId >>> </h6>
                                    <p ng-show="(posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Launch' ).length == 0">Sorry no articles yet.</p>         
                                    <li ng-repeat="post in posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Launch' "> 
                                        <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>
                                    </li>
                                 
                                        
                                        
							  
							  <br/>
                                        
                                        
                                        
                                        
							  <!--  How to Growth -->
							  <h4 class="lead" style="color:#FF4C00;">How to: <small><i>What's next?</i></small></h4>
				
                                <h6>HowTo Growth Articles in Category: <<< currentCategoryId >>> </h6>
                                    <p ng-show="(posts  | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Growth' ).length == 0">Sorry no articles yet.</p>         
                                    <li ng-repeat="post in posts | matchCategory:currentCategoryId |matchContentType: 'HowTo' | matchhowToLifecycle: 'Growth' "> 
                                       <a href="<<< fullUrl + post.title>>>"> <<< post.oTitle >>> </a>
                                    </li>
                         
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
							  
					    </div><!-- Close second column -->
					    
					</div>
					
					
                
                
                
                
                
                
                
                
                
           <br/>


</div>



@stop