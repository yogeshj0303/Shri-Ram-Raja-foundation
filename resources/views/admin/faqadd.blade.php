@extends('admin.includes.masterpage-admin')



@section('content')





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

                                        <h2>Add</h2>

                                        <a href="{!! url('admin/pagesettings/faq') !!}" class="add-back-btn"><i class="fa fa-arrow-left"></i> back</a>

                                    </div>

                                    <hr/>

                                    <form method="POST" action="{!! action('PageSettingsController@faqsave') !!}" class="form-horizontal" enctype="multipart/form-data">

                                        {{csrf_field()}}

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="clients_name">Title</label>

                                            <div class="col-sm-8">

                                                <input type="text" class="form-control" name="question" id="clients_name" placeholder="Title" required>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="faq_answer">Text</label>

                                            <div class="col-sm-8">

                                                <textarea name="answer" id="faq_answer" class="form-control" placeholder="Taxt" style="resize: vertical;"></textarea>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="control-label col-sm-3" for="faq_image">Image</label>

                                            <div class="col-sm-8">

                                                <input name="wimage" id="image" type="file" class="form-control" placeholder="Image" style="resize: vertical;">

                                            </div>

                                        </div>

                                        <hr/>

                                        <div class="add-product-footer">

                                            <button name="addProduct_btn" type="submit" class="btn btn-success add-product_btn">add text</button>

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





@stop



@section('footer')

    <!-- <script type="text/javascript">

        bkLib.onDomLoaded(function() {

            new nicEditor({fullPanel : true}).panelInstance('faq_answer');

        });

    // </script> -->

@stop