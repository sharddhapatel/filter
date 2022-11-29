<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{URL:: asset('client/assets/css/login.css')}}">
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen-com">
                <h1>Login!</h1>
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
                <form class="login" action="{{url('insertrej')}}" method="post" enctype=multipart/form-data>
                    {{csrf_field()}}
                    <div class="login-field">
                        <input type="text" class="login-input" name="fname" placeholder="name">
                    </div>
                    <div class="login-field">
                        <input type="password" class="login-input" name="email" placeholder="Email">
                    </div>
                    <div class="login-field">
                        <input type="password" class="login-input" name="password" placeholder="Password">
                    </div>
                    <div class="login-field">
                        <input type="password" class="login-input" name="mobileno" placeholder="Mobile no">
                    </div>
                    <div class="login-field">
                        <label class="form__label" for="subscription">State</label>
                        <select class="form__input js-example-basic-single" id="state" name="state">
                            <option selected="">State...</option>
                            @foreach ($stats as $key => $value)
                            <option value="{{$value->id}}"> {{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="login-field">
                        <label class="form__label" for="subscription">Districts</label>
                        <select class="form__input js-example-basic-single" id="district" name="district">
                            <option selected="">Districts...</option>
                        </select>
                    </div>
                    <div class="login-field">
                        <label class="form__label" for="subscription">City</label>
                        <select class="form__input js-example-basic-single" id="city" name="city">
                            <option selected="">City...</option>
                        </select>
                    </div>
                    <button class="login-btn" type="submit">
                        <span class="btn-text">Register</span>
                    </button>
                    <span class="sign__text"> <a href="{{url('login')}}">Login!</a></span>
                </form>

            </div>
        </div>
    </div>
    </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        $('#state').change(function() {
            var sid = $(this).val();
            // alert(sid);
            if (sid) {
                $.ajax({
                    type: "get",
                    url: "{{url('/getdis')}}/" + sid,
                    success: function(res) {
                        if (res) {
                            $("#district").empty();
                            $("#district").append('<option>Select district</option>');
                            $.each(res, function(key, value) {
                                $("#district").append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    }
                });
            } else {
                alert('hello');
            }
        });
        $('#district').change(function() {
            var did = $(this).val();
            // alert(did);
            if (did) {
                $.ajax({
                    type: "get",
                    url: "{{url('/getcity')}}/" + did,
                    success: function(res) {
                        if (res) {
                            $("#city").empty();
                            $("#city").append('<option>Select city</option>');
                            $.each(res, function(key, value) {
                                $("#city").append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    }
                });
            } else {
                alert('hello');
            }
        });
    </script>

</body>

</html>
