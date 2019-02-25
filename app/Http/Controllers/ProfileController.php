<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DateTime;
class ProfileController extends Controller
{
    public function calculateAge($birthDate){
        $from = new DateTime($birthDate);
        $to   = new DateTime('today');
        $age =  $from->diff($to)->y;
        return $age;
    }

    public function showProfile($id){
        $user = User::find($id);
        $user->birthdate = ProfileController::calculateAge($user->birthdate);
        return view('userpages.profile')->with('user',$user);
        // return view('userpages.profile')->with('notifications',$user->notifications);
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect::route('/login');
    }
}
