@extends('admin.header-footer')
@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ADD PRODUCT</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                @if(Session::has('message'))
                                    <div class="alert alert-success">
                                        <i class="fa-lg fa fa-warning"></i>
                                        {!! session('message') !!}
                                    </div>
                                    @elseif(Session::has('error'))
                                    <div class="alert alert-danger">
                                        <i class="fa-lg fa fa-warning"></i>
                                        {!! session('error') !!}
                                    </div>
                                    @endif
                                    <form action="{{url('insertprod')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="" >Category Name:</label>
                                            <select class="form__input" name="cname" select id="name">
                                        <option selected disabled>select catagory..</option>
                                        @foreach($data as $catagory)
                                        <option value="{{$catagory->id}}">{{$catagory->name}}</option>
                                        @endforeach
                                    </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Product:</label>
                                            <input type="text" name="proname" class="form-control input-default " placeholder="Title...">
                                        </div>
                                        <!-- <label for="">Description:</label>
                                        <div class="form-group">
                                            <div class="summernote" name="description"></div>
                                        </div> -->


                                        <div class="col-12">
                                    <div class="form__group">
                                        <label class="form__label" for="username">Product  Discription</label>
                                        <!-- <input id="username" type="textarea" name="discripation" class="form__input" placeholder="enter Product Discription"> -->

                                        <textarea id="summernote" class="summernote" name="description"></textarea>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label for="">Price:</label>
                                            <input type="text"  name="price"class="form-control input-default " placeholder="Price...">
                                        </div>
                                        <label for="">Product Image:</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file"  name="image"class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>
                                        <button type="submit" class="btn btn-primary mb-2">CANCEL</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


       @endsection
