@extends('Backend.Master')
@section('content')<!-- page content -->

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>update Image</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @include('Backend.includes.message')
                <form method="post" action="{{route('update-image',['id'=>$image->id])}}"
                      class="form-horizontal form-label-left input_mask">
                    {{csrf_field()}}

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="title" class="form-control has-feedback-left" id="inputSuccess2"
                               placeholder="Image Title" value="{{$image->title}}">
                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>

                        @if($errors->has('title'))
                            <div class="text-danger">
                                {{$errors->first('title')}}
                            </div>
                        @endif

                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="description" class="control-label">Image Description</label>
                            <textarea id="details" name="description" class="form-control" cols="30">{{$image->details}}</textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="button" class="btn btn-primary">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection
@section('my-script')


@endsection