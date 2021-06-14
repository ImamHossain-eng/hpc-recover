@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header m-b-15">
            <h4>Edit Slider Image</h4>
        </div>
        <br>
        <div class="card-body">
            {{Form::open(['route' => ['admin.slider_update', $photo->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
            {{csrf_field()}}
            {{method_field('PUT')}}


        <div class="from-group">
            <input type="text" name="title" class="form-control" value="{{$photo->title}}" Placeholder="Title of the Image">
        </div><br>
        <div class="from-group">
            <input type="text" name="description" class="form-control" value="{{$photo->description}}" Placeholder="One line description of the Image">
        </div><br>
        <div class="form-group">
            <label for="">Upload Profile Picture</label>
            <input type="file" name="image" class="form-control">
        </div><br>
        <input type="submit" name="Submit" value="Save" class="btn btn-primary"><br>
        {{Form::close()}}
        </div>
    </div>
</body>
@endsection