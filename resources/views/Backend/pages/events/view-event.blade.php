@extends('Backend.master')


@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Events</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('Backend.includes.message')

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th width="15%">Title</th>
                            <th>Location</th>
                            <th>Starting Date</th>
                            <th>Ending Date</th>
                            <th>Image</th>
                            <th width="'20%">details</th>
                            <th>gallery ID</th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($events as $key=> $event)
                            <tr>
                                <td>{{++$key+10*(isset($_GET['page'])?$_GET['page']-1:0)}}</td>
                                <td>{{$event->title}}</td>
                                <td>{{$event->location}}</td>
                                <td>{{$event->starting_date}}</td>
                                <td>{{$event->ending_date}}</td>
                                <td><img height="30" src="{{URL::to('image/uploads/events/'.$event->image)}}" alt="">
                                </td>
                                <td>
                                    <?php echo str_limit($event->details = htmlspecialchars_decode($event->details), 100)?>
                                </td>
                                <td>
                                    {{$event->image_id}}
                                </td>
                                <td>
                                    <a href="{{route('update-event',['id'=>$event->id])}}"
                                       class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('delete-event',['id'=>$event->id])}}"
                                       class="btn btn-danger btn-xs"><i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i></a>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="8">No event found. You can add one <u><a
                                                href="{{route('add-event')}}">here</a></u></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{$events->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection


@section('title')
    View Events
@endsection
