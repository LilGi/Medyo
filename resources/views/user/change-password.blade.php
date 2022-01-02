@extends('layouts.main')
@section('title')
    Change password
@endsection

@section('content')
    @include('user.users-dashboard')
    <!-- Validation Errors -->

    <div class="container pt-5">
        <h4 class="pb-4 border-bottom">Change password</h4>
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @elseif(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
        <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
        <form action="{{route('user.update_password')}}"  method="post">
            @csrf
        <div class="wrapper">


        <div class="row py-2">
            <div class="col-md">
                <label>Current password</label>
                <x-input id="old_password"
                         class="bg-light form-control"
                         type="password"
                         name="old_password"
                         required />
            </div>
        </div>

        <div class="row py-2">
            <div class="col-md">
                <label>New password</label>
                <x-input id="new_password"
                         class="bg-light form-control"
                         type="password"
                         name="new_password"
                         required/>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-md">
                <label>Confirm new password</label>
                <x-input id="confirm_password"
                         class="bg-light form-control"
                         type="password"
                         name="confirm_password"
                         required />
            </div>
        </div>
        </div>
            <div class="py-2 d-flex justify-content-center border-bottom">
            </div>
            <div class="d-flex justify-content-center pt-3">

                <div class="pt-2">
                    <button type="submit" class="btn btn-info">
                        {{ __('Update password') }}
                    </button>
                    {{--<button type="submit" class="btn btn-primary">Update password</button>--}}
                </div>
            </div>
        </form>
        </div>
    </div>

@endsection