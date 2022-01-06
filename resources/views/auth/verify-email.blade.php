{{--<x-guest-layout>--}}
    {{--<x-auth-card>--}}
        {{--<x-slot name="logo">--}}
            {{--<a href="/">--}}
                {{--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
            {{--</a>--}}
        {{--</x-slot>--}}

        {{--<div class="mb-4 text-sm text-gray-600">--}}
            {{--{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}--}}
        {{--</div>--}}



        {{--@if (session('status') == 'verification-link-sent')--}}
            {{--<div class="mb-4 font-medium text-sm text-green-600">--}}
                {{--{{ __('A new verification link has been sent to the email address you provided during registration.') }}--}}
            {{--</div>--}}
        {{--@endif--}}

        {{--<div class="mt-4 flex items-center justify-between">--}}
            {{--<form method="POST" action="{{ route('verification.send') }}">--}}
                {{--@csrf--}}

                {{--<div>--}}
                    {{--<x-button>--}}
                        {{--{{ __('Resend Verification Email') }}--}}
                    {{--</x-button>--}}
                {{--</div>--}}
            {{--</form>--}}

            {{--<form method="POST" action="{{ route('logout') }}">--}}
                {{--@csrf--}}

                {{--<button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">--}}
                    {{--{{ __('Log Out') }}--}}
                {{--</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</x-auth-card>--}}
{{--</x-guest-layout>--}}

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
    </style>

</head>
<body>

<div class="container">
    <header class="header">
        <h1 id="title">T<span>PORTAL</span></h1>
        <p id="description">Welcome to MMSU College of Engineering Portal!</p>
        <br>
        <p id="description">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>

    </header>
</div>

    <div class="wrapper">



        <div class="flex items-center justify-between ">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600" style="color: #800000">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <div class="d-flex py-2 pb-4 pt-4 border-top">
                    <button type="submit" id="submit" class="btn btn-info">Resend Verification Email</button>
                </div>

            </form>
            <br>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="d-flex pb-4 border-bottom">
                    <div class="ml-auto mr-auto">
                        <button type="submit" class="btn btn-light">
                            {{ __('Log Out') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


