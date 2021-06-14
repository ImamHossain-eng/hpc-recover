@extends('layouts.home')
@section('content')
<head>
	<style type="text/css">
		#sidebar a{
			color:#004D40;
			font-size:15px;
			padding-top:5px;
			padding-bottom:5px;
		}

	</style>
</head>


<body>
	<div class="wrapper" style="background:#0069D9;"><br>	
		<div class="container" style="background:#EFEFEF;">	

		
<div class="row">
	<div class="col-md-8"><br>
		<strong>
			<h2>
				{{$event->title}}
			</h2>
		</strong><br>	
		<p>Published on: {{$event->created_at}}</p><br>
			<img src="/contents/images/news/{{$event->image}}" alt="Image" style="width:90%;"><br><br>
		<div style="text-align:justify;width:90%;background:#A8E4A6;padding: 10px 10px 10px 10px;">
            {!!$event->body!!}
            <hr>
			{{$event->created_at->diffForHumans()}}
		</div>	
		
	</div>
	
	<div class="col-md-4"><br>	
		
		<!--recent news-->
		<center>
			<h3 style="background:#009648;color:#EEEEEE;width:90%;">Recent News</h3>
		</center><hr>
			
		
		@foreach($babu as $bp)
		<div class="row" id="sidebar">
		<div class="col-sm-4">
			<img src="/contents/images/news/{{$bp->image}}" alt="imamge" style="width:90%;border-radius:50%;">
		</div>
		<div class="col-sm-8">
			<a href="/news/{{$bp->id}}">
			<strong>	
				{{$bp->title}}
			</strong>
			</a>
		</div>
		</div><hr>
		@endforeach
		<center>
			<a href="/news" class="btn btn-primary" style="width:100%;">>> View All News <<</a>
		</center>		
	</div>		
</div><br>

</div><br>
	</div>
</body>


@endsection