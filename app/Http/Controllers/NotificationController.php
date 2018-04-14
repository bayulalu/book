<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notif()
    {
    	$user = Auth::user();
    	$notifications = Notification::where('user_id', $user->id)->orderBy('id', 'desc')->get();
    	$notif_model = new Notification;
    	return view('auth.notifications', compact('notifications', 'notif_model', 'user'));
    }
}
