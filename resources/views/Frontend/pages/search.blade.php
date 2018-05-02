@extends('Frontend.master')

@section('title')
    NVHS - Search
@endsection

@section('body')
    <div class="search_block">
        <div class="container">
            <br><br>
            <form method="get" action="{{route('search')}}">
                &nbsp;<i class="fa fa-search pr-3"> Search</i>
                <input class="form-control input-form float-left" type="search" value="{{$keywords}}" name="keyword"
                       autocomplete="off">
                <button type="submit" class="btn btn-primary btn-sm float-right m-1"> Go!</button>
                <select class="input-form form-control float-right" name="key_type">
                    <option style="display: none">{{$key_type}}</option>
                    <option value="Show All">Show All</option>
                    <option value="Images">Images</option>
                    <option value="Videos">Videos</option>
                    <option value="Events">Events</option>
                </select>
            </form>
            <br>
            <hr>

            <div>
                @if(!$all)
                    @if(!empty($Event))
                        <h4>Events</h4>
                        @forelse($Event as $list1)
                            <a href="Details/Event/{{$list1->id}}"><h2>{{$list1->title}}</h2></a>
                            <?php echo str_limit(htmlspecialchars_decode($list1->details), 150, '...')?>
                            <br>
                            <br>
                        @empty
                            No events found.
                        @endforelse
                        <br>
                        <?php echo $Event->appends(request()->input())->render();?>

                    @elseif(!empty($Image))
                        <h4>Images</h4>
                        @forelse($Image as $list1)
                            <a href="Details/Image/{{$list1->id}}"><h2>{{$list1->title}}</h2></a>
                            <?php echo str_limit(htmlspecialchars_decode($list1->details), 150, '...')?>
                            <br>
                            <br>
                        @empty
                            No images found.
                        @endforelse
                        <br>
                        <?php echo $Image->appends(request()->input())->render();?>
                    @elseif(!empty($Video))
                        <h4>Videos</h4>
                        @forelse($Video as $list1)
                            <a href="Details/Video/{{$list1->id}}"><h2>{{$list1->title}}</h2></a>
                            <?php echo str_limit(htmlspecialchars_decode($list1->details), 150, '...')?>
                            <br>
                            <br>
                        @empty
                            No videos found.
                        @endforelse
                        <br>
                        <?php echo $Video->appends(request()->input())->render();?>
                    @else
                        <div>
                            No related posts.
                        </div>
                    @endif
                @else
                    <br>
                    <h4>Events</h4>
                    <hr>
                    @forelse($Event as $list1)
                        <a href="Details/Event/{{$list1->id}}"><h2>{{$list1->title}}</h2></a>
                        <?php echo str_limit(htmlspecialchars_decode($list1->details), 150, '...');?>
                        <br>
                        <br>
                    @empty
                        <div>
                            No related events.
                        </div>
                        <br>
                    @endforelse
                    <br>
                    <h4>Images</h4>
                    <hr>
                    @forelse($Image as $list2)
                        <a href="Details/Image/{{$list2->id}}"><h2>{{$list2->title}}</h2></a>
                        <?php echo str_limit(htmlspecialchars_decode($list2->details), 150, '...')?>
                        <br>
                        <br>
                    @empty
                        <div>No related images.</div>
                        <br>
                    @endforelse
                    <br>
                    <h4>Videos</h4>
                    <hr>

                    @forelse($Video as $list3)
                        <a href="Details/Video/{{$list3->id}}"><h2>{{$list3->title}}</h2></a>
                        <?php echo str_limit(htmlspecialchars_decode($list3->details), 150, '...');?>
                        <br>
                        <br>
                    @empty
                        <div>
                            No related videos.
                        </div>
                        <br>
                    @endforelse
                @endif
            </div>
            <hr>

            <div class="row" style="min-height:50px">
            </div>
        </div>
    </div>

@endsection