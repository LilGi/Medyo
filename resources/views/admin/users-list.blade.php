@extends('layouts.main')
@section('title')
    Registered list
@endsection
@section('content')
    @include('user.users-dashboard')
    <div class="container pt-5">
        <h4 class="pb-4 border-bottom">Registered List</h4>
        @if (session('success'))
            <div class="alert alert-success">
                User successfully updated.
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 pb-5">
                <table class="table table-striped table-bordered display nowrap" cellspacing="0" id="example" >
                    <thead>
                    <tr >
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Region</th>
                        <th>Province</th>
                        <th>City</th>
                        <th>Barangay</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $user_info)
                        <tr >
                            <td class="align-middle ">{{$user_info->name}}</td>
                            <td class="align-middle ">{{$user_info->lname}}</td>
                            <td class="align-middle ">{{$user_info->phonenumber}}</td>
                            <td class="align-middle ">{{$user_info->email}}</td>
                            <td class="align-middle ">{{$user_info->userdetails->region}}</td>
                            <td class="align-middle ">{{$user_info->userdetails->province}}</td>
                            <td class="align-middle ">{{$user_info->userdetails->municipality}}</td>
                            <td class="align-middle ">{{$user_info->userdetails->barangay}}</td>
                            <td class="align-middle">
                                <a href="#" data-toggle="modal" data-target="#ModalEdit{{$user_info->id}}" class="btn btn-success" >Edit</a>
                                <a href="#" data-toggle="modal" data-target="#ModalDelete{{$user_info->id}}" class="btn btn-danger" >Delete</a>
                            </td>
                            {{--<button type="button" class="btn btn-success" id="edit-item" data-item-id="1">edit</button>--}}

                        </tr>
                        @include('admin.edit-modal')
                        @include('admin.delete-modal')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection