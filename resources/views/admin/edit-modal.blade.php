
    <div class="modal fade text-left" id="ModalEdit{{$user_info->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Edit user') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-2">
                        <form action="{{route('user.update', $user_info->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PATCH')}}

                        <h4 style="font-size: revert">Name</h4>
                        <div class="row py-2">
                            <div class="col-md-6">
                                <input id="name" class="bg-light form-control" type="text" name="name"  value="{{$user_info->name}}" />
                            </div>
                            <div class="col-md-6 pt-md-0 pt-3">
                                <input id="lname" class="bg-light form-control" type="text" name="lname"  value="{{$user_info->lname}}" />
                            </div>
                        </div>
                        <br>
                        <h4 style="font-size: revert">Current Address</h4>
                            <div class="row py-2">
                                <div class="col-md">
                                    <label>Region</label>
                                    {{--<input type="text" class="bg-light form-control" name="region" placeholder="Region" value="{{$user_info->userdetails->region}}"/>--}}
                                    <input type="hidden" name="regDesc" value="{{$user_info->userdetails->regDesc}}"/>
                                    <select  id="regID" name="region">
                                        @foreach($regCode as $list)
                                            <option value="{{$list->regCode}}" {{$user_info->userdetails->region == $list->regCode  ? 'selected' : ''}}>{{ $list->regDesc}}</option>
                                        @endforeach
                                    </select>
                                    {{--<select name="region" required id="regID">--}}
                                        {{--<option value="{{$user_info->userdetails->region}}" disabled selected>-Select Region-</option>--}}
                                        {{--@foreach($regCode as $list)--}}
                                            {{--<option value="{{$list->regCode}}" {{$user_info->userdetails->region == $list->regCode  ? 'selected' : ''}}>{{ $list->regDesc}}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                </div>
                            </div>
                        <div class="row py-2">
                            <div class="col-md">
                                <label>Province</label>
                                <input type="hidden" name="province" value="{{$user_info->userdetails->province}}"/>
                                <select  id="provID">
                                    <option value="" >{{$user_info->userdetails->province}}</option>
                                </select>

                                {{--<input type="text" class="bg-light form-control" name="province" placeholder="Province" value="{{$user_info->userdetails->province}}"/>--}}
                            </div>
                        </div>
                            <div class="row py-2">
                                <div class="col-md">
                                    <label>Barangay</label>
                                    {{--<input type="text" class="bg-light form-control" name="municipality" placeholder="Municipality" value="{{$user_info->userdetails->municipality}}"/>--}}
                                    <input type="hidden" name="municipality" value="{{$user_info->userdetails->municipality}}"/>
                                    <select  id="cityID">
                                        <option value="" >{{$user_info->userdetails->municipality}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md">
                                    <label>Municipality</label>
                                    {{--<input type="text" class="bg-light form-control" name="barangay" placeholder="barangay" value="{{$user_info->userdetails->barangay}}"/>--}}
                                    <input type="hidden" name="barangay" value="{{$user_info->userdetails->barangay}}"/>
                                    <select  id="barangayID">
                                        <option value="" >{{$user_info->userdetails->barangay}}</option>
                                    </select>
                                </div>
                            </div>

                        <br>
                        <h4 style="font-size: revert">Contact Information</h4>
                        <div class="row py-2">
                            <div class="col-md">
                                <input id="email" class="bg-light form-control" type="email" name="email"  placeholder="Email" value="{{$user_info->email}}" />
                            </div>
                        </div>
                            <div class="input-group mb-3 py-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+63</span>
                                </div>
                                <input id="phonenumber" class="form-control" pattern="[0-9]{10}" type="tel" name="phonenumber" placeholder="9123457891" value="{{$user_info->phonenumber}}"/>
                            </div>
                        {{--<h4 style="font-size: revert">Role</h4>--}}
                        {{--<div class="row py-2">--}}
                            {{--<div class="col-md">--}}
                                {{--<div class="arrow">--}}
                                    {{--<select name="role" id="role" class="bg-light" onchange='Roles(this.value);'>--}}
                                        {{--<option value="curent" selected >Select current role</option>--}}
                                        {{--<option value="student">Student</option>--}}
                                        {{--<option value="teacher">Teacher</option>--}}
                                        {{--<option value="visitor">Visitor</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row py-2">--}}
                            {{--<div class="col-md">--}}
                                {{--<!-- <label for="idnumber"><span class="clue"></span></label> -->--}}
                                {{--<input type="text" name="student" id="idnumber" class="bg light form-control"  style='display:none;' placeholder="Please fill this field" >--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="py-3 pb-4 border-bottom">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button data-dismiss="modal" class="btn btn-info">Cancel</button>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    </div>
