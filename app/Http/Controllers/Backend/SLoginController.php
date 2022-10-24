<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SLoginController extends Controller
{
    public function index(){}
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}




    public function login_google(){
        return Socialite::driver('google')->redirect();
    }

    public function callback_google()
    {

        $user = Socialite::driver('google')->user();
        dd($user);
        // $this->_add_user($user);
        // return redirect()->route('home');
    }
    protected function _add_user($data){
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {

            $user = new User();
            $user->name         = $data->name;
            $user->email        = $data->email;
            $user->provider_id  = $data->id;
            $user->avatar       = $data->avatar;
            $user->save();
        }
        Auth::login($user);

    }
    public function login_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }




}
