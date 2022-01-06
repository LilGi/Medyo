<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <script type="text/javascript">
        function Roles(value){
            var element=document.getElementById('idnumber');
            var input=document.getElementById('idnumber');
            var idnumber=document.getElementById('idnumber');

            if(value=='student'){
                element.style.display='block';
                input.placeholder = "student number mo barok, masapol oh..";}
            else if(value=='teacher'){
                element.style.display='block';
                input.placeholder = "ana id number mo oh?";}
            else if(value=='current'){
                element.style.display='none';}
            else
                element.style.display='none';
        }
        function hide_idnumber() {
            idnumber.style.display = 'none';
        }
        form.addEventListener("reset", hide_idnumber);
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/signupform.css')}}">


    <title>TPortal | Register</title>
    <style>
        table, th, td {
            border: 15px solid;
            border-color: transparent;
        }

    </style>
</head>
<body>
<!-- Validation Errors -->


        <form method="POST" id="form" onreset="hide_idnumber()" action="{{ route('register') }}">
        @csrf
            {{--<!-- Name section -->--}}
            {{--<div class="form-group">--}}
                {{--<label for="name"><span class="clue"></span></label>--}}
                {{--<x-input id="name" class="formControl" type="text" name="name" :value="old('name')" placeholder="Full Name" required autofocus />--}}
                {{--<input type="text" name="name" id="name" class="formControl" placeholder="Full Name" required>--}}
            {{--</div>--}}
            {{--<!-- Type Address section -->--}}
            {{--<div class="form-group">--}}
                {{--<label for="address"><span class="clue"></span></label>--}}
                {{--<input type="text" name="address" id="address" class="formControl" placeholder="Current Address" >--}}
            {{--</div>--}}
            {{--<!-- Type phoneNumber section -->--}}
            {{--<div class="form-group">--}}
                {{--<label for="phone"><span class="clue"></span></label>--}}
                {{--<input type="tel" name="phone" id="phone" class="formControl" placeholder="Phone number e.g 0912-345-6789" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">--}}
            {{--</div>--}}
            {{--<!-- Type Email section -->--}}
            {{--<div class="form-group">--}}
                {{--<label for="email"><span class="clue"></span></label>--}}
                {{--<x-input id="email" class="formControl" type="email" name="email" :value="old('email')" placeholder="Email" required />--}}
                {{--<input type="email" name="email" id="email" class="formControl" placeholder="Email" required>--}}
            {{--</div>--}}
            {{--<!-- Type New Password section -->--}}
            {{--<div class="form-group">--}}
                {{--<label for="password"><span class="clue"></span></label>--}}
                {{--<x-input id="password" class="formControl"--}}
                         {{--type="password"--}}
                         {{--name="password"--}}
                         {{--placeholder="New password (8 characters minimum)"--}}
                         {{--required autocomplete="new-password" />--}}
                {{--<input type="password" name="newpassword" id="newpassword" class="formControl" placeholder="New password (8 characters minimum)" minlength="8" required>--}}
            {{--</div>--}}
            {{--<!-- Type Re-enter Password section -->--}}
            {{--<div class="form-group">--}}
                {{--<label for="password_confirmation"><span class="clue"></span></label>--}}
                {{--<x-input id="password_confirmation" class="formControl"--}}
                         {{--type="password"--}}
                         {{--name="password_confirmation"--}}
                         {{--placeholder="Confirm password"--}}
                         {{--required />--}}
                {{--<input type="password" name="reenterpassword" id="reenterpassword" class="formControl" placeholder="Confirm password" minlength="8" required>--}}
            {{--</div>--}}
            {{--<!-- select section -->--}}
            {{--<div class="form-group">--}}
                {{--<p id="quest"></p>--}}

                {{--<select name="role" id="dropdown" class="formControl" onchange='Roles(this.value);'>--}}
                    {{--<option value="" disabled selected >Select current role</option>--}}
                    {{--<option value="student">Student</option>--}}
                    {{--<option value="teacher">Teacher</option>--}}
                    {{--<option value="other">Other</option>--}}
                {{--</select>--}}

            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label for="idnumber"><span class="clue"></span></label>--}}
                {{--<input type="text" name="student" id="idnumber" class="formControl"  style='display:none;' placeholder="Please fill this field" >--}}
            {{--</div>--}}

        {{--naikkat dadduma required--}}
                {{--<div class="form-groupbtn">--}}
                    {{--<button type="submit"  id="submit" class="btn">Next(temporary)</button>--}}
                    {{--formaction="/questionform.html"--}}
            {{--</div>--}}
            {{--<div>--}}
                {{--<button type="reset" id="reset" class="rbtn"><i>Clear form</i></button>--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<div style="text-align: center; padding-top: 20px;" >--}}
            {{--<a href="{{ route('welcome') }}"><u>Go back</u></a>--}}
        {{--</div>--}}
    {{--</div>--}}

<div class="wrapper mt-sm-5">
    <x-auth-validation-errors class="alert alert-danger" style="color: black" :errors="$errors" />
    <h4 class="pb-4 border-bottom">Register form</h4>
    <div>
        <div class="pl-sm" id="img-section">
            <p style="color:#800000;">Please fill up form honestly.</p>
        </div>
    </div>
    <div class="py-2">
        <h4 style="font-size: revert">Name</h4>
        <div class="row py-2">
            <div class="col-md-6">
                <x-input id="name" class="bg-light form-control" type="text" name="name" :value="old('name')"  placeholder="First Name" required autofocus />
            </div>
            <div class="col-md-6 pt-md-0 pt-3">
                <x-input id="lname" class="bg-light form-control" type="text" name="lname" :value="old('lname')"  placeholder="Last Name" required autofocus />
            </div>
        </div>
        <br>
        <h4 style="font-size: revert">Current Address</h4>

        <div class="row py-2">
            <div class="col-md">
                {{--<input type="text" name="barangay" class="bg-light form-control" placeholder="Barangay">--}}
                <input type="hidden" name="regDesc"/>
                <select  id="regID" name="region" >
                    <option value=""  >-Select Region-</option>
                    @foreach($regCode as $list)
                        <option value="{{$list->regCode}}" >{{$list->regDesc}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md">
                <input type="hidden" name="province"/>
                <select  id="provID">
                    <option value=" " >-Select Province-</option>
                </select>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md">
                <input type="hidden" name="municipality"/>
                <select  id="cityID">
                    <option value=" " >-Select City-</option>
                </select>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md">
                <input type="hidden" name="barangay"/>
                <select  id="barangayID">
                    <option value=" " >-Select Barangay-</option>
                </select>
            </div>
        </div>
        <br>
        <h4 style="font-size: revert">Contact Information</h4>
        <div class="row py-2">
            <div class="col-md">
                <x-input id="email" class="bg-light form-control" type="email" name="email" :value="old('email')" placeholder="Email" />
            </div>
        </div>
        <div class="input-group mb-3 py-2">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">+63</span>
            </div>
            <input type="text" id="phonenumber" class="form-control" type="tel" name="phonenumber" :value="old('phonenumber')" placeholder="9123457891" autofocus/>

            {{--<input type="tel" id="phonenumber" class="form-control" pattern="[0-9]{10}" type="tel" name="phonenumber" :value="old('phonenumber')" placeholder="9123457891" autofocus/>--}}
        </div>
        <!-- Type New Password section -->
        <h4 style="font-size: revert">Password</h4>
        <div class="row py-2">
            <div class="col-md">
            {{--<label for="password"><span class="clue"></span>Password</label>--}}
            <x-input id="password"
                     class="bg-light form-control"
                     type="password"
                     name="password"
                     placeholder="New password"
                     required
                     autocomplete="new-password" />

                {{--<input type="password" name="newpassword" id="newpassword" class="formControl" placeholder="New password (8 characters minimum)" minlength="8" required>--}}</div>
        </div>
        <!-- Type Re-enter Password section -->
        <div class="row py-2">
            <div class="col-md">
                {{--<label for="password_confirmation"><span class="clue"></span>Confirm password</label>--}}
                <x-input id="password_confirmation"
                         class="bg-light form-control"
                         type="password"
                         name="password_confirmation"
                         placeholder="Confirm password"
                         required="required" />
            </div>
        </div>
        <br>
        <h4 style="font-size: revert">Role</h4>
        <div class="row py-2">
            <div class="col-md">

                <div class="arrow">
                    <select name="role" id="role" class="bg-light form-control" onchange='Roles(this.value);'>
                        <option value="current" selected >Select current role</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="visitor">Visitor</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md">
                {{--<label for="idnumber"><span class="clue"></span></label>--}}
                <input type="text" name="student" id="idnumber" class="bg light form-control"  style='display:none;' placeholder="Please fill this field" >
            </div>
        </div>
        <div class="py-3 pb-4 d-flex flex-column justify-content-center border-bottom">
            <button class="btn btn-success" type="submit"  id="submit">Submit</button>
            <button type="reset" class="btn btn-light mt-2">Clear form</button>
        </div>
        <div class="d-flex justify-content-center pt-3">

            <div class="pt-2">
                <a href="{{route('welcome')}}" class="btn btn-light">Back</a>
            </div>
        </div>
    </div>

</div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



<script>
    jQuery(document).ready(function () {

        jQuery('#regID').change(function () {

            var selected_caption = $("#regID option:selected").text();
            $('input[name=regDesc]').val(selected_caption);

            let regCode=jQuery(this).val();

            jQuery.ajax({
                url:'getProvince',
                type:'post',
                data: 'regCode='+regCode+'&_token={{csrf_token()}}',
                success:function (result) {
                    jQuery('#provID').html(result)

                }

            });

        });
        jQuery('#provID').change(function () {

            var selected_caption = $("#provID option:selected").text();
            $('input[name=province]').val(selected_caption);

            let provCode=jQuery(this).val();
            jQuery.ajax({
                url:'getCity',
                type:'post',
                data: 'provCode='+provCode+'&_token={{csrf_token()}}',
                success:function (result) {
                    jQuery('#cityID').html(result)

                }
            });

        });
        jQuery('#cityID').change(function () {

            var selected_caption = $("#cityID option:selected").text();
            $('input[name=municipality]').val(selected_caption);

            let citymunCode=jQuery(this).val();
            jQuery.ajax({
                url:'getBarangay',
                type:'post',
                data: 'citymunCode='+citymunCode+'&_token={{csrf_token()}}',
                success:function (result) {
                    jQuery('#barangayID').html(result)

                }
            });

        });

        jQuery('#barangayID').change(function () {

            var selected_caption = $("#barangayID option:selected").text();
            $('input[name=barangay]').val(selected_caption);



        });



    });

</script>



</body>
</html>



{{--<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
