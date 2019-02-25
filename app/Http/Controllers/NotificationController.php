<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notification;
class NotificationController extends Controller
{
    public function show($id){
        $notes = Notification::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view('userpages.notifications')->with('notes',$notes);
    }
}

