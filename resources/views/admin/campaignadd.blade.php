@extends('admin.includes.masterpage-admin')



@section('content')



    <div class="right-side">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- Starting of Dashboard Update New Campaign area -->

                    <div class="section-padding add-product-1">

                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="add-product-box">

                                    <div class="add-product-header">

                                        <h2>Update Campaign</h2>

                                        <a href="{!! url('admin/campaign') !!}" class="add-back-btn"><i class="fa fa-arrow-left"></i> Back</a>

                                    </div>

                                    <hr/>

                                    <form method="POST" action="{!! action('CampaignController@store') !!}" id="add_form" class="form-horizontal"  enctype="multipart/form-data">

                                        {{csrf_field()}}

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_campaign_name">Campaign Name*</label>

                                            <div class="col-sm-8">

                                                <input type="text" class="form-control" name="title" id="update_campaign_name" placeholder="Enter Campaign Name" required>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_select_campaign_category">Select Category *</label>

                                            <div class="col-sm-8">

                                                <select class="form-control" name="update_select_campaign_category" id="update_select_campaign_category">

                                                    <option value="">Select Category</option>

                                                    @foreach($categories as $category)

                                                        <option value="{{$category->name}}">{{$category->name}}</option>

                                                    @endforeach

                                                </select>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_current_feature_photo">Current Feature Photo*</label>

                                            <div class="col-sm-8">

                                                <img src="" style="max-width: 200px;" alt="No Photo Added" id="docphoto">

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_current_feature_photo">Feature Photo *</label>

                                            <div class="col-sm-8">

                                                <input type="file" accept="image/*" name="photo" class="hidden" onchange="readURL(this)" id="uploadFile"/>

                                                <div id="uploadTrigger" class="btn btn-default form-control">

                                                    <i class="fa fa-upload"></i> <span>Add Feature Photo</span>

                                                </div>

                                                <p>Prefered Image Ratio: (16:9)</p>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_campaign_description">Campaign Description*</label>

                                            <div class="col-sm-8">

                                                <textarea class="form-control" name="description" id="update_campaign_description" rows="5" placeholder="Campaign Description" style="resize: vertical;"></textarea>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_campaign_video_link">Campaign Video Link* <span>(Youtube urls only)</span></label>

                                            <div class="col-sm-8">

                                                <input type="text" class="form-control" name="video_link" id="update_campaign_video_link" placeholder="Campaign Video Link">

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_campaign_end_date">End Date*</label>

                                            <div class="col-sm-8">

                                                <input type="text" class="form-control datepick" name="end_date" id="update_campaign_end_date" placeholder="Enter End Date" required>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_campaign_goal">Goal* <span>in USD($)</span></label>

                                            <div class="col-sm-8">

                                                <input type="number" class="form-control" name="goal" id="update_campaign_goal" placeholder="Campaign Goal" required>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_campaign_preloaded_amount">Preloaded Amount(Optional)* <span>Seperated By Comma(,)</span></label>

                                            <div class="col-sm-8">

                                                <input type="text" class="form-control" name="preloaded_amount" id="update_campaign_preloaded_amount" placeholder="Preloaded Amount">

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="update_close_campaign_after">Close Campaign After*</label>

                                            <div class="col-sm-6">

                                                <label class="radio-inline">

                                                    <input type="radio" name="end_after" value="goal" required>

                                                    Achieving Goal

                                                </label>

                                                <label class="radio-inline">

                                                    <input type="radio" name="end_after" value="date" required>

                                                    End Date

                                                </label>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3"></label>

                                            <div class="col-sm-8" data-toggle="buttons">

                                                <label class="btn btn-default">

                                                    <input type="checkbox" name="featured" value="1" autocomplete="off" checked>

                                                    <span class="go_checkbox"><i class="glyphicon glyphicon-ok"></i></span>

                                                    Add to Featured Campaign

                                                </label>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3"></label>

                                            <div class="col-sm-8" data-toggle="buttons">

                                                <label class="btn btn-default">

                                                    <input type="checkbox" name="send_newsletter" value="1" autocomplete="off" checked>

                                                    <span class="go_checkbox"><i class="glyphicon glyphicon-ok"></i></span>

                                                    Send NewsLetter to all Subscribers

                                                </label>

                                            </div>

                                        </div>

                                        <hr/>

                                        <div class="add-product-footer">

                                            <button name="addProduct_btn" type="submit" class="btn btn-success add-product_btn">Update Campaign</button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Ending of Dashboard Update New Campaign area -->





                </div>

            </div>

        </div>

    </div>



@stop

@section('footer')

    <script>



        $(".datepick").datepicker({

            minDate: new Date(),

            dateFormat: 'yy-mm-dd'

        });



        $("#uploadTrigger").click(function(){

            $("#uploadFile").click();

            $("#uploadFile").change(function(event) {

                $("#uploadTrigger").html($("#uploadFile").val());

            });

        });

        function readURL(input) {



            if (input.files && input.files[0]) {

                var reader = new FileReader();



                reader.onload = function (e) {

                    $('#docphoto').attr('src', e.target.result);

                };



                reader.readAsDataURL(input.files[0]);

            }

        }

        bkLib.onDomLoaded(function() {

            new nicEditor().panelInstance('update_campaign_description');

        });

    </script>

@stop