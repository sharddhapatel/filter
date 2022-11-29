@extends('client.header-footer')
@section('content')


<!-- contact-section -->

<div class="contact_main_section">
    <section class="page-title centred brd-page">
        <div class="auto-container">
            <div class="content-box">
                <h1>Contact</h1>
                <div class="contact_col_text">
                    <span>Uaques</span>
                    <span>contact</span>
                </div>
            </div>
        </div>
    </section>
</div>



<!-- contact form -->
<div class="container my-4">
    <h2>Contact Us</h2>
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
    <form action="{{url('insertcontact')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="name" name="name" class="form-control" aria-describedby="nameHelp">
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <select class="form-label" name="name" select id="name">
                <option selected disabled>select catagory..</option>
                @foreach($city as $citys)
                <option value="{{$citys->cityname}}">{{$citys->cityname}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" name="message" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
