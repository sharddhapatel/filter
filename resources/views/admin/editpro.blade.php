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
                            <form action="{{url('editproduct')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                                <div class="form-group">
                                    <label for="">Category Name:</label>
                                    <select class="form__input" name="name">

                                        @foreach($cat as $catagory)
                                        <option value="{{$catagory->id}}" {{$data->cid==$catagory->id?"selected":""}}>{{$catagory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Product:</label>
                                    <input type="text" name="proname" value="{{ $data->proname }}" class="form-control input-default " placeholder="Title...">
                                </div>


                                <div class="col-12">
                                    <div class="form__group">
                                        <label class="form__label" for="username">Product Discription</label>
                                        <!-- <input id="username" type="textarea" name="discripation" value="{{$data->discripation}}" class="form__input" placeholder="discripation"> -->
                                        <textarea id="summernote" class="summernote"  name="discripation">{{$data->discripation}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Price:</label>
                                    <input type="text" name="price" class="form-control input-default" value="{{ $data->rs }}" placeholder="Price...">
                                </div>
                                <div class="col-12">
                                    <div class="form__gallery">
                                        <label id="gallery1" for="form__gallery-upload">Product Image</label>
                                        <input data-name="#gallery1" id="form__gallery-upload" name="image" class="form__gallery-upload" type="file" accept=".png, .jpg, .jpeg" value="{{$data->img}}">
                                    </div>
                                </div>
                                <img src="{{ url('item_img') }}/{{ $data->img }}" alt="" height="100" width="100" />
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>
                        <button type="submit" class="btn btn-primary mb-2">CANCEL</button>
                        </form>
                    </div>
                </div>
                <script>
                    $('#summernote').summernote({
                        placeholder: "{{$data->discripation}}",
                        tabsize: 2,
                        height: 100
                    }).summernote('code', `{{$data->discripation}}`);
                </script>
            </div>
        </div>
    </div>
</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

@endsection
