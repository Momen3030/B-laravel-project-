<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\FormSubmitted;
use App\Events\UserEvent;   
use App\User;
use App\Notification;
class ConnectController extends Controller
{
    public function connect(){
       
    }
    public function fireEvent($id,$rid){
        $user = User::find($id);
        $text = "<b>".$user->name."</b>"." Wants to connect with you";
        $notification = new Notification;
        $notification->user_id = $rid;
        $notification->sender_id = $user->id;
        $notification->sender_img = $user->img;
        $notification->sender_name = $user->name;
        $notification->save();
        event(new FormSubmitted($text));
        event(new UserEvent($user));
        return redirect('/');
    }
}   
