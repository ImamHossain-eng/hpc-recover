@extends('layouts.admin')
@section('content')

<body>
    <br>
    <a href="/admin/photos/create" class="btn btn-primary">Add New Photo</a>
    <table class="table table-bordered table-light table-responsive table-hover">
        <thead>
            <tr>
                <th>Slider Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Inserted At</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
            <tr>
                <td><img src="/contents/images/slider/{{$photo->image}}" alt="{{$photo->image}}" style="width: 6em;height: 4em;"></td>
                <td>{{$photo->title}}</td>
                <td>{{$photo->description}}</td>
                <td>{{$photo->created_at->diffForHumans()}}</td>
                <td> 
                    <a href="/admin/photos/{{$photo->id}}/edit" class="btn btn-success">
		            	<i class="fa fa-check"> </i>
		            </a>
                    {{Form::open(['method'=>'DELETE', 'route'=>['admin.slider_destroy', $photo->id],'style'=>'display:inline;']) }}
			            <button type="submit" style="display:inline;" class="btn btn-danger">
				            <i class="fa fa-trash"></i>
			            </button>
			        {{Form::close()}}
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>
</body>



@endsection