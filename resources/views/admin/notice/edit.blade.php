@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header m-b-15">
            <h4>Edit an Notice</h4>
        </div>
        <br>
        <div class="card-body">
            {{Form::open(['route' => ['admin.notice_update', $notice->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="from-group">
                <input type="text" name="title" class="form-control" value="{{$notice->title}}" Placeholder="Enter the Title of the Notice">
            </div><br>
            <div class="from-group">
                <textarea name="body" id="ckview" cols="30" rows="10" class="form-control">
                    {{$notice->body}}
                </textarea>
            </div><br>
            <input type="submit" name="Submit" value="Save" class="btn btn-primary"><br>
            {{Form::close()}}
        </div>
    </div>
</body>
@endsection