{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}

    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0">--}}

    {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

    {{--<link rel="stylesheet" href="{{asset('css/login.css')}}">--}}
    {{--<title>TPortal</title>--}}

{{--</head>--}}
{{--<body>--}}

{{--<div class="container">--}}
    {{--<header class="header">--}}
        {{--<h1 id="title">T<span>PORTAL</span></h1>--}}
        {{--<p id="description">Welcome to MMSU College of Engineering Portal!</p>--}}
    {{--</header>--}}
    {{--<!-- Session Status -->--}}
    {{--<x-auth-session-status class="mb-4" :status="session('status')" />--}}

    {{--<!-- Validation Errors -->--}}
    {{--<x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

        {{--<form method="POST" action="{{ route('login') }}">--}}
        {{--@csrf--}}
        {{--<!-- Type Email section -->--}}
        {{--<div class="form-group">--}}
            {{--<x-input id="email" class="formControl" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />--}}
            {{--<input type="text" name="uname" id="address" class="formControl" placeholder="Enter Username">--}}
        {{--</div>--}}
        {{--<!-- Type Password section -->--}}
        {{--<div class="form-group">--}}
            {{--<x-input id="password" class="formControl"--}}
            {{--type="password"--}}
            {{--name="password"--}}
            {{--placeholder="Password"--}}
            {{--required autocomplete="current-password" />--}}
            {{--<input type="password" name="psw" id="address" class="formControl" placeholder="Password">--}}
        {{--</div>--}}
        {{--<!-- Log in button section -->--}}
        {{--<div class="form-group">--}}
            {{--<button type="submit" id="submit" class="btn"><b>Log In</b></button>--}}
        {{--</div>--}}
        {{--<!-- Forgot password button section -->--}}
        {{--<div class="form-group">--}}
            {{--<a href="">Forgot password?</a>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<!-- Create new account button section -->--}}
        {{--<div class="form-group">--}}
            {{--<a role="button" href="/signupform.html" class="cbtn">Create new account</a>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}
{{--<x-guest-layout>--}}
    {{--<x-auth-card>--}}
        {{--<x-slot name="logo">--}}
            {{--<a href="/">--}}
                {{--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
            {{--</a>--}}
        {{--</x-slot>--}}

        {{--<!-- Session Status -->--}}
        {{--<x-auth-session-status class="mb-4" :status="session('status')" />--}}

        {{--<!-- Validation Errors -->--}}
        {{--<x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

        {{--<form method="POST" action="{{ route('login') }}">--}}
            {{--@csrf--}}

            {{--<!-- Email Address -->--}}
            {{--<div>--}}
                {{--<x-label for="email" :value="__('Email')" />--}}

                {{--<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
            {{--</div>--}}

            {{--<!-- Password -->--}}
            {{--<div class="mt-4">--}}
                {{--<x-label for="password" :value="__('Password')" />--}}

                {{--<x-input id="password" class="block mt-1 w-full"--}}
                                {{--type="password"--}}
                                {{--name="password"--}}
                                {{--required autocomplete="current-password" />--}}
            {{--</div>--}}

            {{--<!-- Remember Me -->--}}
            {{--<div class="block mt-4">--}}
                {{--<label for="remember_me" class="inline-flex items-center">--}}
                    {{--<input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
                    {{--<span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
                {{--</label>--}}
            {{--</div>--}}

            {{--<div class="flex items-center justify-end mt-4">--}}
                {{--@if (Route::has('password.request'))--}}
                    {{--<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
                        {{--{{ __('Forgot your password?') }}--}}
                    {{--</a>--}}
                {{--@endif--}}

                {{--<x-button class="ml-3">--}}
                    {{--{{ __('Log in') }}--}}
                {{--</x-button>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</x-auth-card>--}}
{{--</x-guest-layout>--}}
