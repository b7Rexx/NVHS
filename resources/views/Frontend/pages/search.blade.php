@extends('Frontend.master')

@section('title')
    NVHS - Search
@endsection

@section('body')
    <div class="search_block">
        <div class="container">
            <br><br>
            <form method="post" action="{{route('search')}}">
                {{csrf_field()}}
                &nbsp;<i class="fa fa-search pr-3"> Search</i>
                <input class="form-control input-form float-left" type="search" value="{{$keywords}}" name="keyword"
                       autocomplete="off">
                <button type="submit" class="btn btn-primary btn-sm float-right m-1"> Go!</button>
                <select class="input-form form-control float-right" name="key_type">
                    <option value="all">Show All</option>
                    <option value="images">Images</option>
                    <option value="videos">Videos</option>
                    <option value="events">Events</option>
                </select>
            </form>
            <br>
            <hr>
            <h5 class="text-center">Showing result of {{$key_type}} related to "{{$keywords}}"</h5>

            <div>
                @foreach($search_array as $list)
                    <div class="row border">
                        <h4 class="text-center">{{$list->title}}</h4>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <?php echo htmlspecialchars_decode($list->details)?>
                        </div>
                        <div class="col-md-3">
                            <a href="#">See more ... </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection