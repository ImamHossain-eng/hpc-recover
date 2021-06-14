@extends('layouts.home')
@section('content')
<head>
	<style type="text/css">
		.news_from_db{
			background:#FFFFFF;
			color:#CACA11;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}
		.news_from_db img{
			width:100%;
			border-top:4px solid #A43333;
		}
		.news_from_db a{
			color:#293352;
		}
		.news_from_db h6{
			padding-left:10px;
			font-size:18px;
		}
		.news_from_db p{
			padding-left:10px;
			color:#111111;
		}
	.news_from_db:hover img{
		transition: .5s;
		opacity: 0.5;
	}
	</style>
</head>

@if(count($news)>0)
<div class="wrapper" style="background:#057EC3;">
	<div class="container" style="background-color:#B3DDD2;"><br>			
<div class="row">
	@foreach($news as $value)
	<div class="col-sm-4" style="padding-bottom:18px;">
				<div class="news_from_db">
					<img src="/contents/images/news/{{$value->image}}" style="width:100%;height:200px;">
										
					<h6>
						<br>
						<strong>
							<a href="/events/{{$value->id}}">
						       {{$value->title}}
					         </a>
				        </strong>
				    </h6>
				    <br>
				    <p><i class="fa fa-clock-o">  </i>
							{{ date('F d, Y', strtotime($value->created_at))}}
					</p>				
			
				<p>
					<a href="/events/{{$value->id}}" class="btn btn-primary">Read More <i class="fa fa-arrow-circle-right"> </i></a>
				</p><br>
			</div>
			</div>
	@endforeach
	

</div>
<br>
<div class="row">
	<div class="col-sm-5">
		
	</div>
	<div class="col-sm-7">
		<strong>
			{{$news->links()}}
		</strong>
		<br>
	</div>
</div>
</div><br>
</div>	
@endif

@endsection