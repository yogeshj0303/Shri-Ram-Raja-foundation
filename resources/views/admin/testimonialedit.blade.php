@extends('admin.includes.masterpage-admin')

@section('content')

<?php
use Cohensive\Embed\Facades\Embed;
?>
    <div class="right-side">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- Starting of Dashboard add-product-1 area -->
                    <div class="section-padding add-product-1">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="add-product-box">
                                    <div class="add-product-header">
                                        <h2>Update Youtube Video</h2>
                                        <a href="{!! url('admin/testimonial') !!}" class="add-back-btn"><i class="fa fa-arrow-left"></i> back</a>
                                    </div>
                                    <hr/>
                                    <form method="POST" action="{!! action('TestimonialController@update',['id'=>$testimonial->id]) !!}" class="form-horizontal">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="clients_review">Title*</label>
                                            <div class="col-sm-8">
                                                <textarea name="review" id="clients_review" class="form-control" placeholder="Title" style="resize: vertical;" required>{{$testimonial->review}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="clients_name">Youtube Url*</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="client" id="clients_name" value="{{$testimonial->client}}" placeholder="Url" required>
                                            </div>
                                            
                                           
                                        </div>
                                        <!--<div class="form-group">-->
                                        <!--    <label class="control-label col-sm-3" for="clients_designation">Client's Designation*</label>-->
                                        <!--    <div class="col-sm-8">-->
                                        <!--        <input type="text" class="form-control" name="designation" id="clients_designation" value="{{$testimonial->designation}}" placeholder="e.g CEO" required>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <hr/>
                                        <div class="add-product-footer">
                                            <button name="addProduct_btn" type="submit" class="btn btn-success add-product_btn">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ending of Dashboard add-product-1 area -->


                </div>
            </div>
        </div>
    </div>


    {{--<div id="page-wrapper">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row" id="main">--}}

                {{--<!-- Page Heading -->--}}
                {{--<div class="go-title">--}}
                    {{--<div class="pull-right">--}}
                        {{--<a href="{!! url('admin/testimonial') !!}" class="btn btn-default btn-back"><i class="fa fa-arrow-left"></i> Back</a>--}}
                    {{--</div>--}}
                    {{--<h3>Update Testimonial</h3>--}}
                    {{--<div class="go-line"></div>--}}
                {{--</div>--}}
                {{--<!-- Page Content -->--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-body">--}}
                        {{--<div id="response"></div>--}}
                        {{--<form method="POST" action="{!! action('TestimonialController@update',['id'=>$testimonial->id]) !!}" class="form-horizontal form-label-left">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<input name="_method" type="hidden" value="PATCH">--}}
                            {{--<div class="item form-group">--}}
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Client's Review<span class="required">*</span>--}}

                                {{--</label>--}}
                                {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<textarea name="review" class="form-control" placeholder="Review Text" rows="6">{{$testimonial->review}}</textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="item form-group">--}}
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Client's Name<span class="required">*</span>--}}

                                {{--</label>--}}
                                {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<input id="name" class="form-control col-md-7 col-xs-12" name="client" value="{{$testimonial->client}}" placeholder="e.g John Doe" required="required" type="text">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="item form-group">--}}
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="slug">Client's Designation<span class="required">*</span>--}}

                                {{--</label>--}}
                                {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<input id="slug" class="form-control col-md-7 col-xs-12" name="designation" value="{{$testimonial->designation}}" placeholder="e.g CEO" required="required" type="text">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="ln_solid"></div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-3">--}}
                                    {{--<button type="submit" class="btn btn-success btn-block">Update Testimonial</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.row -->--}}
        {{--</div>--}}
        {{--<!-- /.container-fluid -->--}}
    {{--</div>--}}
    {{--<!-- /#page-wrapper -->--}}
@stop

@section('footer')

@stop