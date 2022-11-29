
<!-- <body>

	<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">

						<form action="{{url('clientlogin')}}" method="post" class="sign__form" enctype="multipart/form-data">
                            {{csrf_field()}}
							<a href="index.html" class="sign__logo">
								<img src="{{URL:: asset('assets/img/logo.svg')}}" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" name="email" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input"  name="password" placeholder="Password">
							</div>



							<button class="sign__btn" type="submit">
                              Submit</button>



							<div class="sign__social">
								<a class="fb" href="#"><svg viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.56341 16.8197V8.65888H7.81615L8.11468 5.84663H5.56341L5.56724 4.43907C5.56724 3.70559 5.63693 3.31257 6.69042 3.31257H8.09873V0.5H5.84568C3.1394 0.5 2.18686 1.86425 2.18686 4.15848V5.84695H0.499939V8.6592H2.18686V16.8197H5.56341Z"/></svg></a>
								<a class="tw" href="#"><svg viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.55075 3.19219L7.58223 3.71122L7.05762 3.64767C5.14804 3.40404 3.47978 2.57782 2.06334 1.1902L1.37085 0.501686L1.19248 1.01013C0.814766 2.14353 1.05609 3.34048 1.843 4.14552C2.26269 4.5904 2.16826 4.65396 1.4443 4.38914C1.19248 4.3044 0.972149 4.24085 0.951164 4.27263C0.877719 4.34677 1.12953 5.31069 1.32888 5.69202C1.60168 6.22165 2.15777 6.74068 2.76631 7.04787L3.28043 7.2915L2.67188 7.30209C2.08432 7.30209 2.06334 7.31268 2.12629 7.53512C2.33613 8.22364 3.16502 8.95452 4.08833 9.2723L4.73884 9.49474L4.17227 9.8337C3.33289 10.321 2.34663 10.5964 1.36036 10.6175C0.888211 10.6281 0.5 10.6705 0.5 10.7023C0.5 10.8082 1.78005 11.4014 2.52499 11.6344C4.75983 12.3229 7.41435 12.0264 9.40787 10.8506C10.8243 10.0138 12.2408 8.35075 12.9018 6.74068C13.2585 5.88269 13.6152 4.315 13.6152 3.56293C13.6152 3.07567 13.6467 3.01212 14.2343 2.42953C14.5805 2.09056 14.9058 1.71983 14.9687 1.6139C15.0737 1.41264 15.0632 1.41264 14.5281 1.59272C13.6362 1.91049 13.5103 1.86812 13.951 1.39146C14.2762 1.0525 14.6645 0.438131 14.6645 0.258058C14.6645 0.22628 14.5071 0.279243 14.3287 0.374576C14.1398 0.480501 13.7202 0.639389 13.4054 0.734722L12.8388 0.914795L12.3247 0.565241C12.0414 0.374576 11.6427 0.162725 11.4329 0.0991699C10.8978 -0.0491255 10.0794 -0.0279404 9.59673 0.14154C8.2852 0.618204 7.45632 1.84694 7.55075 3.19219Z"/></svg></a>
								<a class="gl" href="#"><svg xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512'><path d='M473.16 221.48l-2.26-9.59H262.46v88.22H387c-12.93 61.4-72.93 93.72-121.94 93.72-35.66 0-73.25-15-98.13-39.11a140.08 140.08 0 01-41.8-98.88c0-37.16 16.7-74.33 41-98.78s61-38.13 97.49-38.13c41.79 0 71.74 22.19 82.94 32.31l62.69-62.36C390.86 72.72 340.34 32 261.6 32c-60.75 0-119 23.27-161.58 65.71C58 139.5 36.25 199.93 36.25 256s20.58 113.48 61.3 155.6c43.51 44.92 105.13 68.4 168.58 68.4 57.73 0 112.45-22.62 151.45-63.66 38.34-40.4 58.17-96.3 58.17-154.9 0-24.67-2.48-39.32-2.59-39.96z'/></svg></a>
							</div>

							<span class="sign__text">Don't have an account? <a href="{{url('rejester')}}">Sign up!</a></span>

							<span class="sign__text"><a href="{{url('forget')}}">Forgot password?</a></span>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>



</html> -->

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
<form class="row" action="{{url('insertrej')}}" method="post" enctype=multipart/form-data>
    {{csrf_field()}}
    <div class="col-md-12" style="padding: 8px;">
        <input type="text" class="form-control" name="fname" placeholder="FIRST NAME" aria-label="First name">
    </div>
    <div class="col-md-12" style="padding: 8px;">
        <input type="text" class="form-control" name="email" placeholder="EMAIL" aria-label="First name">
    </div>
    <div class="col-md-12" style="padding: 8px;">
        <input type="text" class="form-control" name="password" placeholder="PASSWORD" aria-label="First name">
    </div>
    <div class="col-md-12" style="padding: 8px;">
        <input type="rext" class="form-control" name="mobileno" placeholder="MOBILE NO" aria-label="Last name">
    </div>

    <div class="col-12 col-md-6 col-lg-12 ">

        <label class="form__label" for="subscription">State</label>
        <select class="form__input js-example-basic-single" id="state" name="state">
            <option selected="">State...</option>
            @foreach ($stats as $key => $value)
            <option value="{{$value->id}}"> {{$value->name}}</option>
            @endforeach
        </select>

    </div>
    <br><br>
    <div class="form__group">
        <label class="form__label" for="subscription">Districts</label>
        <select class="form__input js-example-basic-single" id="district" name="district">
            <option selected="">Districts...</option>
        </select>
    </div>
    <br><br>
    <div class="form__group">
        <label class="form__label" for="subscription">City</label>
        <select class="form__input js-example-basic-single" id="city" name="city">
            <option selected="">City...</option>
        </select>
    </div>
    <div class="col-md-12" style="padding: 8px;">
        <button type="submit" class="btn btn-primary" style="width:100%; height:46px; padding-top:11px; ">Submit</button>
    </div>
    <div class="col-md-12" style="padding: 8px;">
        <p style="    text-align: center;
                                                margin: 0 auto;">
            <a href="{{url('login')}}" id="customer_register_link" style="font-size: 16px;">
                LOGIN
            </a>
        </p>
    </div>
</form>
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
