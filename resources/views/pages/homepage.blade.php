@extends('layouts.home')
@section('content')

<head>

</head>
<body>

<!--Slider section-->
@include('parts.slider1')



<!--Admission Section-->
<div class="admission">
	<div class="row">
		<div class="col-md-8">
			<h2>Apply For Admission</h2>
			
		</div>
		<div class="col-md-4">
			<a href="">
				<button class="admission-btn">
					<strong>
						Apply Now
					</strong> 
				</button>				
			</a>			
		</div>
	</div>	
</div>
<!--Admission Section End Here-->

<!--About & Notice Section-->
  @include('parts.notice')
<br>



<!-- Leadership of HPC-->
@include('parts.leadership')
<!-- Leadership of HPC End Here-->


<!--Total students and teachers-->
@include('parts.overview')


<br>



<!--advertisement and results-->
@include('parts.advertisement')





  


</body>

@endsection