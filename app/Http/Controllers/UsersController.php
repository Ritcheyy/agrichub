<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showMyProfile(){
        if (auth()->user()->profile_status == "NotCompleted"){
            return redirect('/user/completeprofile');
        } else{
            $user = auth()->user();
            $user_id = $user->id;
            $user_Ads = Ads::where('user_id', $user_id)->get();

            return view('user/profile')->with(['user' => $user, 'UserAds' => $user_Ads]);
        }
    }

    public function ViewUserProfile($id){
//        Pass Id
        $user = User::find($id);
        return view('user/view')->with('user', $user);
    }

    public function showEditProfile(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('user/editprofile')->with('user', $user);
    }

    public function updateProfile(Request $request){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'town' => 'required',
            'bio' => 'required',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $phone = $request->input('phone');
        $country = $request->input('country');
        $state = $request->input('state');
        $town = $request->input('town');
        $bio = $request->input('bio');
        $user_id = auth()->user()->id;
//        Todo: Image Upload

        $user = User::find($user_id);
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->phone_number = $phone;
        $user->country = $country;
        $user->state = $state;
        $user->town = $town;
        $user->bio = $bio;
        $user->save();

        return redirect('/user/profile');
    }

    public function showCompleteProfile(){
        return view('user/completeprofile');
    }

    public function CompleteProfile(Request $request){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'town' => 'required',
            'bio' => 'required',
        ]);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $phone = $request->input('phone');
        $country = $request->input('country');
        $state = $request->input('state');
        $town = $request->input('town');
        $bio = $request->input('bio');
        $user_id = auth()->user()->id;
        $profile_status = 'Completed';
//        Todo: Image Upload

        $user = User::find($user_id);
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->phone_number = $phone;
        $user->country = $country;
        $user->state = $state;
        $user->town = $town;
        $user->bio = $bio;
        $user->profile_status = $profile_status;
        $user->save();

        return redirect('user/profile');
    }
}
