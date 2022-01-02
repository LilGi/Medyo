<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>TPortal | Reset password</title>
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
    </header>
</div>

<div class="wrapper">

    <form method="POST" action="{{ route('password.update') }}">
    @csrf

    <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="row py">
            <div class="col-md">
                <label style="color: #800000">Email</label>
                <x-input id="email" class="bg-light form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>
        </div>

        <!-- Password -->
        <div class="row py">
            <div class="col-md mt-4">
                <label for="password" style="color:  #800000">Password</label>
                <x-input id="password" class="bg-light form-control" type="password" name="password" required />
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="row py">
            <div class="col-md mt-4">
                <label for="password_confirmation" style="color:  #800000">Confirm Password</label>
                <x-input id="password_confirmation" class="bg-light form-control"
                         type="password"
                         name="password_confirmation" required />
            </div>
        </div>


        <div class="d-flex pb-4 border-bottom mt-4 " >
            <div class="ml-auto mr-auto">
                <button class="btn btn-light" style=" border:solid 1px #800000">
                    {{ __('Reset Password') }}
                </button>

            </div>
        </div>

    </form>
    </div>
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

        {{--<!-- Validation Errors -->--}}
        {{--<x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

        {{--<form method="POST" action="{{ route('password.update') }}">--}}
            {{--@csrf--}}

            {{--<!-- Password Reset Token -->--}}
            {{--<input type="hidden" name="token" value="{{ $request->route('token') }}">--}}

            {{--<!-- Email Address -->--}}
            {{--<div>--}}
                {{--<x-label for="email" :value="__('Email')" />--}}

                {{--<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />--}}
            {{--</div>--}}

            {{--<!-- Password -->--}}
            {{--<div class="mt-4">--}}
                {{--<x-label for="password" :value="__('Password')" />--}}

                {{--<x-input id="password" class="block mt-1 w-full" type="password" name="password" required />--}}
            {{--</div>--}}

            {{--<!-- Confirm Password -->--}}
            {{--<div class="mt-4">--}}
                {{--<x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                {{--<x-input id="password_confirmation" class="block mt-1 w-full"--}}
                                    {{--type="password"--}}
                                    {{--name="password_confirmation" required />--}}
            {{--</div>--}}

            {{--<div class="flex items-center justify-end mt-4">--}}

            {{--</div>--}}
        {{--</form>--}}
    {{--</x-auth-card>--}}
{{--</x-guest-layout>--}}
