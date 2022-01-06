

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>TPortal | Email verification</title>
    <style>
        .wrapper{
            max-width: 500px;
        }
        .card{
            color: black;
        }
    </style>

</head>
<body>

<div class="container">
    <header class="header">
        <h1 id="title">T<span>PORTAL</span></h1>
        <p id="description">Welcome to MMSU College of Engineering Portal!</p>
        <br>
        <p id="description">You are now registered! Before getting started, could you verify your phone number by entering OTP we just sent to you? If you didn't receive the message, we will gladly send you another.</p>
    </header>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Phone Number') }}</div>
                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{session('error')}}
                        </div>
                    @endif
                    Please enter the OTP sent to your number: {{session('phonenumber')}}
                    <form action="{{route('user.verify')}}" method="post">
                        @csrf
                        <div class="input-group mb-3 mt-3">
                            <input type="hidden" name="phonenumber" value="{{session('phonenumber')}}">
                            <input type="tel"
                                   id="verification_code"
                                   name="verification_code"
                                   value="{{ old('verification_code') }}"
                                   class="form-control @error('verification_code') is-invalid @enderror"
                                   placeholder="Verification code"
                                   aria-label="Verification code"
                                   aria-describedby="basic-addon2">
                            @error('verification_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
{{--<div class="input-group mb-3 mt-3">--}}
{{--<div class="input-group-append">--}}
{{--<input type="hidden" name="phonenumber" value="{{session('phonenumber')}}">--}}
{{--<input id="verification_code" type=""--}}
{{--class="form-control @error('verification_code') is-invalid @enderror"--}}
{{--name="verification_code" value="{{ old('verification_code') }}" required>--}}
{{--<input id="verification_code"--}}
{{--name="verification_code"--}}
{{--type="tel"--}}
{{--class="form-control @error('verification_code') is-invalid @enderror"--}}
{{--placeholder="Verification code"--}}
{{--aria-label="Verification code"--}}
{{--value="{{ old('verification_code') }}"--}}
{{--required>--}}
{{--@error('verification_code')--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $message }}</strong>--}}
{{--</span>--}}
{{--@enderror--}}
{{--<button class="btn btn-primary" type="button">Submit</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group row mb-0">--}}
{{--<div class="col-md-6 offset-md-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ __('Verify Phone Number') }}--}}
{{--</button>--}}
{{--</div>--}}
{{--</div>--}}

