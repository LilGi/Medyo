<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>TPortal | Forgot password</title>
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
        <p id="description">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

    </header>
</div>
<div class="wrapper">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" style="color: black" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" style="color: black" :errors="$errors" />
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
    <div class="row py">
        <div class="col-md">
            <div>
                <label style="color: #800000">Email</label>

                <x-input id="email" class="bg-light form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>
        </div>
    </div>
        <div class="d-flex align-items-center flex-column py-2 pb-4 border-bottom">
            <button type="submit" class="btn btn-info">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>


            <div class="ml-auto mr-auto">


                <div class="pt-2">
                    <a href="{{route('welcome')}}" class="btn btn-light">Back</a>
                </div>
            </div>

    </form>
</div>
</body>
</html>



{{--<x-guest-layout>--}}
    {{--<x-auth-card>--}}
        {{--<x-slot name="logo">--}}
            {{--<a href="/">--}}
                {{--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
            {{--</a>--}}
        {{--</x-slot>--}}

        {{--<div class="mb-4 text-sm text-gray-600">--}}
            {{--{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
        {{--</div>--}}

        {{--<!-- Session Status -->--}}
        {{--<x-auth-session-status class="mb-4" :status="session('status')" />--}}

        {{--<!-- Validation Errors -->--}}
        {{--<x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

        {{--<form method="POST" action="{{ route('password.email') }}">--}}
            {{--@csrf--}}

            {{--<!-- Email Address -->--}}
            {{--<div>--}}
                {{--<x-label for="email" :value="__('Email')" />--}}

                {{--<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
            {{--</div>--}}

            {{--<div class="flex items-center justify-end mt-4">--}}
                {{--<x-button>--}}
                    {{--{{ __('Email Password Reset Link') }}--}}
                {{--</x-button>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</x-auth-card>--}}
{{--</x-guest-layout>--}}
