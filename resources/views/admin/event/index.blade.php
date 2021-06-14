@extends('layouts.admin')
@section('content')

<body>
    <br>
    <a href="/admin/events/create" class="btn btn-primary">Add New News or Events</a>
    <table class="table table-bordered table-light table-responsive table-hover">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Title</th>
                <th>Type</th>
                <th>Inserted At</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $key => $event)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$event->title}}</td>
                <td> {{$event->type}} </td>
                <td>{{$event->created_at->diffForHumans()}}</td>
                <td> 
                    <abbr title="Show">
                        <a href="/admin/events/{{$event->id}}" class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                        </a></abbr>
                    <abbr title="Edit">
                        <a href="/admin/events/{{$event->id}}/edit" class="btn btn-success">
                            <i class="fa fa-check"> </i>
                        </a></abbr>
                        <abbr title="Removed">
                            {{Form::open(['method'=>'DELETE', 'route'=>['admin.event_destroy', $event->id],'style'=>'display:inline;']) }}
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
