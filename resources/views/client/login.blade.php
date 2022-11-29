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
                <form class="login" action="{{url('clientlogin')}}" method="post" class="sign__form" enctype="multipart/form-data">
                            {{csrf_field()}}
                    <div class="login-field">
                        <input type="text" class="login-input" name="email" placeholder="Username">
                    </div>
                    <div class="login-field">
                        <input type="password" class="login-input" name="password" placeholder="Password">
                    </div>
                    <button class="login-btn" type="submit">
                        <span class="btn-text">Log In </span>
                    </button>
                    <span class="sign__text">Don't have an account? <a href="{{url('rejester')}}">Sign up!</a></span>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
