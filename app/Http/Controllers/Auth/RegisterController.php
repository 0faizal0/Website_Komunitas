<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Http\Request;
use Session;
use DB;

class RegisterController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // public $redirectTo = RouteServiceProvider::HOME;

    public function redirect(){
        $role = Auth::User('role');

        switch($role) {
            case 'admin':
            return '/admin';
    break;
            case 'user':
            return '/login';
    break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',],
            'terms' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
            //'status' => false,
         ]);
    }


    public function edit($id){

        $user_roles = User::findOrFail($id);
        return view('edit')->with('user_roles', $user_roles);
    }

    public function update(Request $request,$id){
        $user_roles = User::find($id);
        $user_roles->name = $request->input('name');
        $user_roles->role = $request->input('role');
        $user_roles->update();
        
        return redirect('admin')->with('message','Your data is updated');
    }

    public function view($id){

        $user_roles = User::findOrFail($id);
        return view('user-view')->with('user_roles', $user_roles);
    }

    public function delete($id){

        $data = User::findOrFail($id);
        $data->delete(); 
        return redirect('admin')->with('message','Your data is deleted');
    }

    public function status_update($id){

        $data = \DB::table('users')->where('id',$id)->first();
        $status = $data->isban ;

        if($status == 1){
            \DB::table('users')->where('id',$id)->update([
                'isban'=>0
            ]);
        }else{
            \DB::table('users')->where('id',$id)->update([
                'isban'=>1
            ]);
        }
        
        session()->flash('message','Member status has been updated succesfully.');
        return redirect('admin');

    }
       

}