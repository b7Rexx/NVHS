@extends('Backend.master')


@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Images</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    @include('Backend.includes.message')

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th width="15%">Title</th>
                            <th width="15%">Featured Image</th>
                            <th width="15%">Number of Images</th>
                            <th width="'40%">Details</th>
                            <th width="10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($images as $key=> $image)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$image->title}}</td>
                                <td>
                                    <img height="30" src="{{URL::to('image/uploads/gallery/'.$image->imageReference ->first()->image_name)}}">
                                </td>
                                <td>{{count($image->imageReference)}}</td>
                                <td>
                                    <?php echo str_limit($image->details = htmlspecialchars_decode($image->details), 100)?>
                                </td>
                                <td>
                                    <a href="{{route('update-image',['id'=>$image->id])}}"
                                       class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('delete-image',['id'=>$image->id])}}"
                                       class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="6">No image found. You can add one <u><a
                                                href="{{route('add-image')}}">here</a></u></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{--{{$videos->links()}}--}}
                </div>
            </div>
        </div>
    </div>

@endsection


@section('title')
    View Images
@endsection
