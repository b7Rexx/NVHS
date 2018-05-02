@extends('Backend.Master')
@section('content')<!-- page content -->

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Video</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @include('Backend.includes.message')
                <form method="post" action="{{route('add-video')}}"
                      class="form-horizontal form-label-left input_mask">
                    {{csrf_field()}}

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="title" class="form-control has-feedback-left" id="inputSuccess2"
                               placeholder="Video Title">
                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>

                        @if($errors->has('title'))
                            <div class="text-danger">
                                {{$errors->first('title')}}
                            </div>
                        @endif

                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="video_name" class="form-control has-feedback-left" id="inputSuccess2"
                               placeholder="Youtube video URL">
                        <span class="fa fa-youtube-square form-control-feedback left" aria-hidden="true"></span>

                        @if($errors->has('video_name'))
                            <div class="text-danger">
                                {{$errors->first('video_name')}}
                            </div>
                        @endif

                    </div>

                    <div class="clearfix"></div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="description" class="control-label">Video Description</label>
                            <textarea id="details" name="details" class="form-control" cols="30"></textarea>
                        </div>
                    </div>
                    @if($errors->has('details'))
                        <div class="text-danger">
                            {{$errors->first('details')}}
                        </div>
                    @endif
                    <hr>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="button" class="btn btn-primary">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Add Video</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection

@section('title')
    Add Video
@endsection
@section('my-script')


@endsection