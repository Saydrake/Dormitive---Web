<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class AdminController extends Controller
{
    public function view_room(){
        return view("admin.room");
    }

    public function add_room(Request $request){
        $room=new room;
        $room->room_title= $request->title;
        $image= $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('room_img', $imagename);
        $room->image= $imagename;
        $room->description= $request->description;
        $room->price= $request->price;
        $room->save();
        return redirect()->back()->with('message','Room Added Successfully');
    }

    public function show_room(){
        $room=room::all();
        return view('admin.show_room', compact('room'));
    }

    public function delete_room($id){
        $room=room::find($id);
        $room->delete();
        return redirect()->back()->with('message', 'Room Deleted Successfully');
    }

    public function update_room($id){
        $room=room::find($id);
        return view('admin.update_room', compact('room'));
    }

    public function update_room_confirm(Request $request, $id){
        $room=room::find($id);
        $room->room_title=$request->title;
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('room_img',$imagename);
        $room->image=$imagename;
        }
        $room->description=$request->description;
        $room->price=$request->price;
        $room->save();
        return redirect()->back()->with('message', 'Room Updated Successfully');
    }

}
