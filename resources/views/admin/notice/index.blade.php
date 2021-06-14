@extends('layouts.admin')
@section('content')

<body>
    <br>
    <a href="/admin/notice/create" class="btn btn-primary">Add New Notice</a>
    <table class="table table-bordered table-light table-responsive table-hover">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Title</th>
                <th>Inserted At</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notices as $key => $notice)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$notice->title}}</td>
                <td>{{$notice->created_at->diffForHumans()}}</td>
                <td> 
                    <abbr title="Show">
                        <a href="/admin/notice/{{$notice->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a></abbr>
                    <abbr title="Edit">
                        <a href="/admin/notice/{{$notice->id}}/edit" class="btn btn-success">
                            <i class="fa fa-check"> </i>
                        </a></abbr>
                    <abbr title="Removed">
                        {{Form::open(['method'=>'DELETE', 'route'=>['admin.notice_destroy', $notice->id],'style'=>'display:inline;']) }}
			                 <button type="submit" style="display:inline;" class="btn btn-danger">
				                <i class="fa fa-trash"></i>
			                </button>
			            {{Form::close()}}
                    </abbr>
                    
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>
</body>


@endsection
