<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
                                <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label for="">Product:</label>
                                        <input type="text" name="proname" class="form-control input-default " placeholder="Title...">
                                    </div>

                                    <label for="">Product Image:</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input">
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
</body>

</html>
