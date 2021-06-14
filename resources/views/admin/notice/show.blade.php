@extends('layouts.admin')
@section('content')
<div class="wrapper" style="background:#B3DDD2;"><br>
	<div class="container">
	<p>
		<strong>
			<h2>{{$notice->title}}</h2>
		</strong>
	</p><br>
	<p>Published On: {{ date('F d, Y(D)', strtotime($notice->created_at))}} at {{ date('g:ia', strtotime($notice->created_at))}}</p>
    <p>Updated On: {{ date('F d, Y(D)', strtotime($notice->updated_at))}} at {{ date('g:ia', strtotime($notice->updated_at))}}</p>
		<hr>
		<div style="background:#E3E7EA;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
		<center>
			<h3 style="text-decoration:underline;">Notice</h3>
		</center>
		<br>	
		<div style="width:80%;margin:auto;font-size:20px;">{!!$notice->body!!}</div>
		<br>
		</div><br>	
		</div>
		</div><br>	

@endsection