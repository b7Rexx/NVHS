@extends('Backend.Master')
@section('content')<!-- page content -->

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Image</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="post" enctype="multipart/form-data" action="{{route('add-image')}}"
                      class="form-horizontal form-label-left input_mask">
                    {{csrf_field()}}

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="title" class="form-control has-feedback-left" id="inputSuccess2"
                               placeholder="Image Title">
                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>

                        @if($errors->has('title'))
                            <div class="text-danger">
                                {{$errors->first('title')}}
                            </div>
                        @endif

                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="file" class="form-control has-feedback-left" name="image" id="inputSuccess4">
                        <span class="fa fa-file-image-o form-control-feedback left" aria-hidden="true"></span>

                        @if($errors->has('image'))
                            <div class="text-danger">
                                {{$errors->first('image')}}
                            </div>
                        @endif
                    </div>
                    <div class="clearfix"></div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="description" class="control-label">Image Description</label>
                            <textarea id="details" name="description" class="form-control" cols="30"></textarea>
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