@extends('admin.header-footer')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">ADD CATEGORY</h4>
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
                                    <form action="{{url('insertcat')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="">Category Name:</label>
                                            <input type="text" class="form-control input-default " name="name" placeholder="Category Name...">
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
