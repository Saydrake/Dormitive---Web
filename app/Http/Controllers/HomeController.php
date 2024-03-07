<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Room;

class HomeController extends Controller
{
    public function index(){
        $room = Room::all();
    return view('home.userpage', compact('room')); 
    }

    public function redirect(){
        $usertype=auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');
    }
    else{
        $room = Room::all();
    return view('home.userpage', compact('room')); 
    }
}


}