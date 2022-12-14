<!DOCTYPE html>
<html>

<head>
    <title>Stripe Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <style type="text/css">
        .panel-title {
            display: inline;
            font-weight: bold;
        }

        .display-table {
            display: table;
        }

        .display-tr {
            display: table-row;
        }

        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
</head>

<body>

    <div class="container">

        <center>
            <h1>Add New Detail</h1>
        </center>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <!-- <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div> -->
                    <div class="panel-body">
                        @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                        @endif
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
                        <form role="form" action="{{url('storeaddresh')}}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">

                            {{ csrf_field() }}

                            <?php $total = 0 ?>
                            <?php $user_id = Session::get('user_id'); ?>
                            @if(session('cart'.$user_id))
                            @foreach(session('cart'.$user_id) as $id => $details)
                            <?php $total += $details['rs'] * $details['quantity'] ?>
                            @endforeach
                            @endif

                            <div class="form-group row">
                                <div class='col-xs-12 form-group' id="selectadd">
                                    <label for="" class="col-form-label">Select Address</label>
                                    <br>
                                    @foreach($addresh as $add)
                                    <input name="oldadd" id="oldadd" type="radio" value="{{$add->addresh}},{{$add->city}},{{$add->zipcode}}" onclick="document.getElementById('form1').style.display='none' " unchecked>
                                    {{$add->addresh}},{{$add->city}},{{$add->zipcode}} <br>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class='col-xs-12 form-group required'>
                                    <button class="btn btn-success btn-sm" type="button" name="addaddress" id="addnewaddress" value="Use Another Address">Use Another Address</button>
                                </div>
                            </div>

                            <div class="form-group row" style="display: none;" id="form1">
                                <div class='col-xs-12 form-group'>
                                    <label for="" class="col-form-label">Street Address</label>
                                    <input class="form-control" type="text" id="newaddress" name="newaddress">
                                </div>

                                <div class='col-xs-12 col-md-4 form-group'>
                                    <label for="" class="col-form-label">City</label>
                                    <input class="form-control" type="text" id="city" name="city">
                                </div>

                                <div class='col-xs-12 col-md-4 form-group'>
                                    <label for="" class="col-form-label">Zipcode</label>
                                    <input class="form-control" type="text" id="zipcode" maxlength="6" name="zipcode">
                                </div>
                          </div>
                            <button type="submit" class="btn btn-primary">submit</button>

                            <!-- <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text' name="cardname">
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number' maxlength="20" type='text' name="cardno" id="credit-card">
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' maxlength="3" type='text' name="cvv">
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month' placeholder='MM' maxlength="2" type='text' name="month">
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' maxlength="4" type='text' name="year">
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try
                                        again.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (RS.{{$total}})</button>
                                </div> -->
                                </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</body>


<script type="text/javascript">

$(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });

    $(document).ready(function() {
        $('#addnewaddress').click(function() {
            $("input[type=radio][name=oldadd]").prop('checked', false);
        })
    });

    $('#credit-card').on('keypress change blur', function () {
  $(this).val(function (index, value) {
    return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ');
  });
});

$('#credit-card').on('copy cut paste', function () {
  setTimeout(function () {
    $('#credit-card').trigger("change");
  });
});

    $(document).ready(function() {
        $("#addnewaddress").click(function() {
            $("#form1").toggle();
        });
    });
</script>

</html>
