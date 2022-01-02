<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\UserDetails;


class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::all();
        return view('admin.users-list', compact('user'));

    }

    public function qrcode()
    {
        return view('user.qr');
    }

    public function logs()
    {
        return view('user.logs');
    }

    public function account_settings()
    {
        if (Auth::user()){
            $user = User::find(Auth::user()->id);

            if($user){
//                return view('user.account-settings')->withUser($user);

                return view('user.account-settings', compact('user'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }

    }

    public function update_account(Request $request)
    {

//                dd($request->all());
        $user = User::find(Auth::user()->id);

        if($user){

            $user->name = $request->name;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->phonenumber = $request->phonenumber;

            $user->save();


            $userdetails = $user->userdetails;


            $userdetails->province = $request->province;
            $userdetails->city = $request->city;
            $userdetails->barangay = $request->barangay;

            $userdetails->save();

            $request->session()->flash('success', 'Details Successfully updated');
            return redirect()->route('user.account_settings');

        }
        else{

            return redirect()->back();
        }
    }




    public function change_password()
    {
        return view('user.change-password');

    }

    public function update_password(Request $request)
    {
//        dd($request->all());
       $request->validate([
           'old_password'=>['required'],
           'new_password'=>['required', Rules\Password::defaults()],
           'confirm_password'=>['required', 'same:new_password'],
       ]);

        $current_user = User::find(Auth::user()->id);

        if(Hash::check($request->old_password, $current_user->password)){

            $current_user->update([
                'password'=>Hash::make($request->new_password),
            ]);

            $request->session()->flash('success', 'Password successfully updated.');
            return redirect()->back();

        }else{


            $request->session()->flash('error', 'Password update error');
            return redirect()->back();
        }
    }



    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'lname' => ['required', 'string', 'max:120'],
            'phonenumber' => ['required', 'digits:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'name' => $request->name,
            'lname' => $request->lname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);


        $userdetails = new UserDetails($request->all());
        $user->userdetails()->save($userdetails);


        event(new Registered($user));

        $request->session()->flash('success', 'You are now registered. A verification link has been sent to your email account.');

        return view('/welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.delete', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::all();
        return view('admin.users-list', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'lname' => ['required', 'string', 'max:120'],
            'phonenumber' => ['required', 'digits:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
        ]);



//        dd($request->all());
        $user = User::find($id);

        $user->name = $request->name;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;

        $user->save();


        $userdetails = $user->userdetails;

        $userdetails->province = $request->province;
        $userdetails->city = $request->city;
        $userdetails->barangay = $request->barangay;

        $userdetails->save();


        $request->session()->flash('success', $user->name);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        $userdetails = $user->userdetails;
        $userdetails->delete();

        return redirect()->route('user.index');
    }
}
