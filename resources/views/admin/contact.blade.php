@extends('admin.includes.masterpage-admin')



@section('content')



    <div class="right-side">

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- Starting of Dashboard services data-table area -->

                    <div class="section-padding add-product-1">

                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="add-product-box">

                                   
                                    <hr/>

                                    <div class="table-responsive">


                                        <table id="product-table_wrapper" class="table table-striped table-hover products dt-responsive" cellspacing="0" width="100%">

                                            <thead>

                                            <tr>

                                                <th>Id</th>

                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Number</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>

                                            </thead>

                                            <tbody>

                                            @foreach($contact as $brand)

                                                <tr>

                                                    <td>{{$brand->id}}</td>
                                                    <td>{{$brand->name}}</td>
                                                    <td>{{$brand->email}}</td>
                                                    <td>{{$brand->number}}</td>
                                                    <td>{{$brand->subject}}</td>
                                                    <td>{{$brand->message}}</td>
                                                    <td><i class="fa fa-trash"></i></td>
                                                </tr>

                                            @endforeach

                                            </tbody>

                                        </table>

                                    </div>

                                    <hr/>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Ending of Dashboard services data-table area -->



                </div>

            </div>

        </div>

    </div>



@stop



@section('footer')



@stop