@extends('layouts.main')
@section('title')
    Account settings
@endsection
@section('content')
    @include('user.users-dashboard')
    <form method="POST" id="form" onreset="hide_idnumber()" action="{{ route('user.update_account') }}">
        @csrf
    <div class="container pt-5">
        <h4 class="pb-4 border-bottom">Account settings</h4>
        @if (session('success'))
            <div class="alert alert-success">
               {{session('success')}}
            </div>
        @endif
        <div class="wrapper">
        <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
            <div class="pl-sm- pl-2" id="img-section"> <b>Profile Photo</b>
                <p style="color: #800000">Accepted file type .png. Less than 1MB</p> <button class="btn btn-light"><b>Upload</b></button>
            </div>
        </div>

            <div class="py-4">
                <h4 style="font-size: revert">Name</h4>
                <div class="row py-2">
                    <div class="col-md-6">
                        <input id="name" class="bg-light form-control" type="text" name="name"  value="{{$user->name}}" />
                    </div>
                    <div class="col-md-6 pt-md-0 pt-3">
                        <input id="lname" class="bg-light form-control" type="text" name="lname"  value="{{$user->lname}}" />
                    </div>
                </div>
                <br>
                <h4 style="font-size: revert">Current Address</h4>
                <div class="row py-2">
                    <div class="col-md">
                        <input type="text" class="bg-light form-control" name="province" placeholder="Province" value="{{$user->userdetails->province}}"/>

                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md">
                        <input type="text" class="bg-light form-control" name="city" placeholder="City/Municipality" value="{{$user->userdetails->city}}" />
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md">
                        <!-- <label for="address">Province</label> -->
                        <input type="text"  name="barangay" class="bg-light form-control" placeholder="Barangay" value="{{$user->userdetails->barangay}}" />
                    </div>
                </div>
                <br>
                <h4 style="font-size: revert">Contact Information</h4>
                <div class="row py-2">
                    <div class="col-md">
                        <input id="email" class="bg-light form-control" type="email" name="email"  placeholder="Email" value="{{$user->email}}" />
                    </div>
                </div>
                <div class="input-group mb-3 py-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">+63</span>
                    </div>
                    <input type="tel" id="phonenumber" class="form-control" pattern="[0-9]{10}" type="tel" name="phonenumber" placeholder="9123456789" value="{{$user->phonenumber}}"/>
                </div>

                <h4 style="font-size: revert">Role</h4>
                <div class="row py-2">
                    <div class="col-md">

                        <div class="arrow">
                            <select  id="role" class="bg-light" onchange='Roles(this.value);'>
                                <option value="curent" disabled selected >Select current role</option>
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                                <option value="visitor">Visitor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md">
                    <!-- <label for="idnumber"><span class="clue"></span></label> -->
                        <input type="text"  id="idnumber" class="bg light form-control"  style='display:none;' placeholder="Please fill this field" >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                <a href="{{route('home')}}" class="btn btn-info ">Cancel</a>
            </div>
            <div class="py-3 border-bottom"></div>
             <div class="wrapper pb-5">
                    <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                        <div><b>Request for account deletion</b><p style="color: #800000">Account details including password</p></div>
                        <div class="ml-auto"> <a href="#" data-toggle="modal" data-target="#ModalDelete{{$user->id}}" class="btn btn-danger" >Request deletion</a></div>
                        {{--<div class="ml-auto"><button class="btn btn-danger">Request deletion</button></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection