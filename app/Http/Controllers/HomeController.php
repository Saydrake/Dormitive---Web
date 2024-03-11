<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Room;
use Illuminate\Support\Facades\Password;

class HomeController extends Controller
{
    public function index(){
        $room = Room::all();
    return view('home.userpage', compact('room')); 
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Return a JSON response
        return response()->json(['message' => 'User created successfully'], 201);
    }
    
    public function reservation(Request $request, $id){
        $request->validate([
            'checkin' => 'required|date',
            'checkout'=> 'date|after:checkin',
        ]);
    
        $checkin = $request->checkin;
        $checkout = $request->checkout;
    
        $reserved = Reservation::where('room_id', $id)
            ->where('checkin', '<=', $checkin)
            ->where('checkout', '>=', $checkout)
            ->exists();
    
        if ($reserved) {
            return redirect()->back()->with('message', 'Room Already Booked. Please try a different date!');
        }
    
        try {
            DB::beginTransaction();
    
            $data = new Reservation;
            $data->room_id = $id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->message = $request->message;
            $data->checkin = $checkin;
            $data->checkout = $checkout;
            $data->save();
    
            DB::commit();
    
            return redirect()->back()->with('message', 'Room Booked Successfully!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Failed to book room. Please try again later.');
        }
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

    public function room_details($id) {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }

    


public function checkEmailAvailability(Request $request){
    $email = $request->input('email');

    // Check if the email exists in the database
    $user = User::where('email', $email)->first();

    if ($user) {
        // Email already exists, return error response
        return response()->json(['error' => 'Email already registered'], 400);
    }

    // Email is available, return success response
    return response()->json(['message' => 'Email is available']);
    }
    
    public function sendPasswordResetLink(Request $request){
    $request->validate(['email' => 'required|email']);

    // Check if the user with the provided email exists
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    // If the user exists, send the password reset link
    $status = Password::sendResetLink(
        $request->only('email')
    );

    if ($status === Password::RESET_LINK_SENT) {
        return response()->json(['message' => 'Password reset link sent successfully']);
    } else {
        return response()->json(['error' => 'Failed to send password reset link'], 500);
    }
    }
    
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json(['user' => $user]);
    }
    
    public function login(Request $request)
    {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        $user = Auth::user();
        $token = $user->createToken('API Token')->plainTextToken;
        return response()->json(['user' => $user, 'token' => $token]);
    }

    // Authentication failed...
    return response()->json(['error' => 'Unauthorized'], 401);
    }


}