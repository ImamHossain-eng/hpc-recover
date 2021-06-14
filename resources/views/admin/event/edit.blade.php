@extends('layouts.admin')
@section('content')
<body>
    <div class="card">
        <div class="card-header m-b-15">
            <h4>Edit Existing News or Events</h4>
        </div>
        <br>
        <div class="card-body">
            {{Form::open(['route' => ['admin.event_update', $event->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="from-group">
                <input type="text" name="title" value="{{$event->title}}" class="form-control" Placeholder="Enter the Title">
            </div><br>
            <div class="from-group">
                <textarea name="body" id="ckview" cols="30" rows="10" class="form-control"> {{$event->body}} </textarea>
            </div><br>
            <div class="form-group">
                <select name="type" class="form-control">
                    <option value="0">Choose...</option>
                    <option value="news">News</option>
                    <option value="event">Event</option>
                </select>
            </div><br>
            <div class="from-group">
                <input type="file" name="image" class="form-control">
            </div><br>
            <input type="submit" name="Submit" value="Save" class="btn btn-primary"><br>
            {{Form::close()}}
        </div>
    </div>
</body>
@endsection