<div>
	<br>
	<div class="container abc">
		<div class="row">
			<div class="col-md-5 about">
				<h4>About Hamdard Public College</h4>
				<br>
				<p>
      Hmmdard Public College 
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
        lorem   
        </p>
        <br>  
				<div class="wave"></div>
			</div>
			<div class="col-md-1"></div>
			
			<div class="col-md-5 about">
				<h4>Notice Board</h4> 
				@foreach($notices as $notice)
	   			 <h6>
					<strong>
						<a href="/notice/{{$notice->id}}" style="color:#293352;">{{$notice->title}}</a>
					</strong>
	    		</h6>
				<p style="color:#AA6939;">		
					<i class="fa fa-clock-o" style="padding-right:5px;"> </i>{{ date('F d, Y(D)', strtotime($notice->created_at))}} at {{ date('g:ia', strtotime($notice->created_at))}}
				</p>
				<hr>
	    		@endforeach
				<a href="/notices" class="btn btn-primary" style="z-index:5;cursor:pointer;width:100%">>> View All Notices <<</a>
        	<div class="wave"></div>
			</div>
		</div>
	</div>
</div>