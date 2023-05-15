<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function profile(){
        return view('user.profile');
    }
    public function destroy(){
        $user_mercatinos = Auth::user()->mercatinos;
        foreach($user_mercatinos as $user_mercatino){
            $user_mercatino->update([
                'user_id'=> NULL,
            ]);
        }
        Auth::user()->delete();
        return redirect(route('Homepage'))->with('userDeleted', 'Hai cancellato correttamente il tuo account. Grazie per essere stato dei nostri');
    }
}
