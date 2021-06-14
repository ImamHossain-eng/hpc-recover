@extends('layouts.home')
@section('content')
<head>	
	<style type="text/css">
		.notice{
			background: #293352;
            padding: 0.7em;
            color: #EFEFEF;
		}
        .notice_title{
            color:#414141;
        }
        .notice_title:hover{
            color: lightseagreen;
        }
	</style>
</head>
<body>
    <div class="wrapper" style="background:#E3E7EA;">
        <center>
            <h2 class="notice">Notice Board</h2>
        </center>
            
        <div class="container table-responsive">
    <table class="table table-bordered" style="background:#B3DDD2;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);">
        <thead>
            <th><h2>Title</h2></th>
            <th><h2>Date</h2></th>
            
        </thead>
        <tbody>
        @foreach ($notices as $value)
        <tr>	
            <td>
                <a href="{{route('notices.show',$value->id)}}">
                <h4 class="notice_title">{{ $value->title}}</h4>
                </a>
            </td>
            <td>{{ date('F d, Y', strtotime($value->created_at))}}
            at {{ date('g:ia', strtotime($value->created_at))}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
        <br>
            <center>{!! $notices->links() !!}</center>
        <br>
    </div>	
    </div>
    
    
</body>




@endsection