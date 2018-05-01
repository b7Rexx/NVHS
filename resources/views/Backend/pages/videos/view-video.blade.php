@extends('Backend.master')


@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>videos</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('Backend.includes.message')

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th width="15%">Title</th>
                            <th>Video</th>
                            <th width="'40%">Details</th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($videos as $key=> $video)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$video->title}}</td>
                                <td><iframe width="280" height="186" src="https://www.youtube.com/embed/{{$video->video_name}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </td>
                                <td>
                                    <?php echo str_limit($video->details = htmlspecialchars_decode($video->details),100)?>
                                </td>
                                <td>
                                    <a href="{{route('update-video',['id'=>$video->id])}}"
                                       class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('delete-video',['id'=>$video->id])}}"
                                       class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="5">No video found. You can add one <u><a
                                                href="{{route('add-video')}}">here</a></u></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection


@section('title')
    View Videos
@endsection
