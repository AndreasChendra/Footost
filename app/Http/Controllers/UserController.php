<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(6);

        return view('user.viewAllUser',['users'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewProfile(){
        $user = User::find(Auth::user()->id);
        $nowtime = Carbon::now();

        return view('profile.profile',['users'=>$user, 'nowtime'=>$nowtime]);
    }

    public function vUpdateProfile(){
        $user = User::find(Auth::user()->id);

        return view('profile.updateProfile',['users'=>$user]);
    }

    public function postUpdateProfile(Request $request){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'place_of_birth' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date_format:Y-m-d', 'before:today'],
            'phone_number' => ['required', 'min:10', 'numeric'],
            'gender' => ['required','in:male,female'],
            'img_profile' => ['file', 'image', 'mimes:jpeg,png,jpg'],
        ]);

        $user = User::find(Auth::user()->id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->place_of_birth = $request->input('place_of_birth');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->phone_number = $request->input('phone_number');
        $user->gender = $request->input('gender');

        if($request->file('img_profile') != null){
            $file = $request->file('img_profile');
            $nama_file = time()."_".$file->getClientOriginalName();
    
            $tujuan_upload = 'images/profile/';
            $file->move($tujuan_upload,$nama_file);
            $user->img_profile = 'images/profile/'.$nama_file;
        }

        $user->save();

        return redirect('/profile')
        ->with('alert','You have successfully Update Profile.');
    }

    public function vchangePassword(){
        return view('auth.changePass');
    }

    public function changePassword(Request $request){
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/profile')
        ->with('alert','You have successfully Change Password.');
    }

    public function vresetPassword(){
        return view('auth.resetPass');
    }

    public function resetPassword(Request $request){
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $user = User::select()->where('email', $request->input('email'))->first();
        if($user == null){
            return redirect('/register')
            ->with('alert','Email not Found, Please Register First'); 
        }
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/login')
        ->with('alert','You have successfully Reset Password.');
    }
}
