@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header m-b-15">
            <h4>Add New Slider Image</h4>
        </div>
        <br>
        <div class="card-body">
            {{Form::open(['route' => 'admin.slider_store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
        {{csrf_field()}}
        <div class="from-group">
            <input type="text" name="title" class="form-control" Placeholder="Title of the Image">
        </div><br>
        <div class="from-group">
            <input type="text" name="description" class="form-control" Placeholder="One line description of the Image">
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