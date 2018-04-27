@extends('Backend.Master')
@section('content')<!-- page content -->

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Events</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @include('Backend.includes.message')
                <form method="post" enctype="multipart/form-data" action="{{route('add-event')}}"
                      class="form-horizontal form-label-left input_mask">
                    {{csrf_field()}}

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="title" class="form-control has-feedback-left"
                               placeholder="Event Title">
                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>

                        @if($errors->has('title'))
                            <div class="text-danger">
                                {{$errors->first('title')}}
                            </div>
                        @endif

                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" name="location" class="form-control has-feedback-left"
                               placeholder="Event location">
                        <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>

                        @if($errors->has('location'))
                            <div class="text-danger">
                                {{$errors->first('location')}}
                            </div>
                        @endif

                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <div class="input-group date form_datetime"
                             data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
                            <input class="form-control has-feedback-left" name="starting_date" size="16" type="text"
                                   value="" placeholder="Event Starting date" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                        </div>
                        <span class="fa fa-calendar  form-control-feedback left" aria-hidden="true"></span>
                        <input type="hidden" id="dtp_input1" value=""/><br/>


                        @if($errors->has('starting_date'))
                            <div class="text-danger">
                                {{$errors->first('starting_date')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <div class="input-group date form_datetime"
                             data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input2">
                            <input class="form-control has-feedback-left" name="ending_date" size="16" type="text"
                                   value="" placeholder="Event ending date" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th" style="display:none;"></span></span>
                        </div>
                        <span class="fa fa-calendar  form-control-feedback left" aria-hidden="true"></span>
                        <input type="hidden" id="dtp_input2" value=""/><br/>

                        @if($errors->has('ending_date'))
                            <div class="text-danger">
                                {{$errors->first('ending_date')}}
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
                            <label for="details" class="control-label">Event Details</label>
                            <textarea id="details" name="details" class="form-control" cols="30"></textarea>
                        </div>
                        @if($errors->has('details'))
                            <div class="text-danger">
                                {{$errors->first('details')}}
                            </div>
                        @endif
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="button" class="btn btn-primary">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Add Event</button>
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