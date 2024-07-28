<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Coxsbazar;
use App\Models\Gallary;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function room_details($id){

        $room = Room::find($id);

        return view('home.room_details',compact('room'));
    }
    public function coxroom_details($id){

        $cox = Coxsbazar::find($id);

        return view('home.coxroom_details',compact('cox'));
    }

    // for book room
    public function add_booking(Request $request, $id){

        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate',
        ]);
        

        $data = new Booking;

        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;


        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $isBooked = Booking::where('room_id',$id)
                    ->where('start_date', '<=', $endDate)
                    ->where('end_date','>=',$startDate)->exists();

        if($isBooked){

            return redirect()->back()->with('message', 'Room is already Booked, Please try different date.');
        }
        else{

            $data->start_date = $request->startDate;
            $data->end_date = $request->endDate;

            $data->save();
            return redirect()->back()->with('message', 'Room Booked Successfully');
        }   
    }


    public function contact(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        return redirect()->back()->with('message', 'Message Sent Successfully');
    }

    public function about_us(){
        return view('home.about_us');
    }

    public function our_rooms(){
        $room = Room::all();
        return view('home.our_rooms',compact('room'));
    }
    public function our_coxrooms(){
        $cox = Coxsbazar::all();
        return view('home.our_coxrooms',compact('cox'));
    }
    public function our_hotels(){
        $hotel = Hotel::all();
        return view('home.our_hotel',compact('hotel'));
    }
    public function our_gallary(){
        $gallary  = Gallary::all();
        return view('home.our_gallary',compact('gallary'));
    }

    public function contact_us(){
        $contact  = Contact::all();
        return view('home.contact_us',compact('contact'));
    }
}
