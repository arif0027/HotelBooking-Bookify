<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use App\Models\Coxsbazar;
use App\Models\Gallary;
use App\Models\Hotel;
use App\Models\Room;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    // for authentication
    public function index()
{
    if (Auth::id()) {
        $usertype = Auth()->user()->usertype;

        if ($usertype == 'user') {
            $hotel = Hotel::all();
            $cox = Coxsbazar::all();
            $room = Room::all();
            $gallary = Gallary::all();
            return view('home.index', compact('hotel','cox', 'room', 'gallary'));
        } elseif ($usertype == 'admin') {
            $userCount = \App\Models\User::count();
            $hotelCount = Hotel::count();
            $roomCount = Room::count();
            $bookingCount = Booking::count();
            return view('admin.index', compact('userCount', 'hotelCount', 'roomCount', 'bookingCount'));
        } else {
            return redirect()->back();
        }
    }
}


    // for frontend
    public function home()
    {
        $hotel = Hotel::all();
        $cox = Coxsbazar::all();
        $room = Room::all();
        $gallary = Gallary::all();
        return view('home.index', compact('hotel','cox', 'room', 'gallary'));
    }





    // Add hotel
    public function create_hotel()
    {
        return view('admin.create_hotel');
    }

    public function add_hotel(Request $request)
    {
        $data = new Hotel;
        $data->hotel_name = $request->name;
        $data->place = $request->place;

        $image = $request->image;

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back()->with('message', 'Hotel Added Successfully.');
    }

    public function view_hotel()
    {
        $data = Hotel::all();
        return view('admin.view_hotel', compact('data'));
    }

    public function hotel_delete($id)
    {
        $data = Hotel::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Hotel Deleted Successfully.');
    }

    public function hotel_update($id)
    {
        $data = Hotel::find($id);
        return view('admin.update_hotel', compact('data'));
    }

    public function edit_hotel(Request $request, $id)
    {
        $data = Hotel::find($id);

        $data->hotel_name = $request->name;
        $data->place = $request->place;
        

        $image = $request->image;

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back()->with('message', 'Hotel Updated Successfully.');
    }

    // Add Room
    public function create_room()
    {
        return view('admin.create_room');
    }


    public function add_room(Request $request)
    {
        $data = new Room;
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back()->with('message', 'Room Added Successfully.');
    }

    // view room
    public function view_room()
    {
        $data = Room::all();
        return view('admin.view_room', compact('data'));
    }

    // delete room
    public function room_delete($id)
    {
        $data = Room::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Room Deleted Successfully.');
    }

    // update room
    public function room_update($id)
    {
        $data = Room::find($id);
        return view('admin.update_room', compact('data'));
    }

    public function edit_room(Request $request, $id)
    {
        $data = Room::find($id);

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back()->with('message', 'Room Updated Successfully.');
    }







    // Add Room
    public function coxcreate_room()
    {
        return view('admin.coxcreate_room');
    }


    public function coxadd_room(Request $request)
    {
        $data = new Coxsbazar;
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back()->with('message', 'Room Added Successfully.');
    }

    // view room
    public function coxview_room()
    {
        $data = Coxsbazar::all();
        return view('admin.coxview_room', compact('data'));
    }

    // delete room
    public function coxroom_delete($id)
    {
        $data = Coxsbazar::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Room Deleted Successfully.');
    }

    // update room
    public function coxroom_update($id)
    {
        $data = Coxsbazar::find($id);
        return view('admin.coxupdate_room', compact('data'));
    }

    public function coxedit_room(Request $request, $id)
    {
        $data = Coxsbazar::find($id);

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect()->back()->with('message', 'Room Updated Successfully.');
    }











    // admin booking
    public function bookings()
    {
        $data = Booking::all();
        return view('admin.booking', compact('data'));
    }

    public function delete_booking($id)
    {
        $data = Booking::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function approve_book($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'approve';
        $booking->save();
        return redirect()->back();
    }

    public function reject_book($id)
    {
        $booking = Booking::find($id);
        $booking->status = 'rejected';
        $booking->save();
        return redirect()->back();
    }

    public function view_gallary()
    {
        $gallary = Gallary::all();
        return view('admin.gallary', compact('gallary'));
    }

    public function upload_gallary(Request $request)
    {
        $data = new Gallary;
        $image = $request->image;

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('gallary', $imageName);
            $data->image = $imageName;
            $data->save();
            return redirect()->back();
        }
    }

    public function delete_gallary($id)
    {
        $data = Gallary::find($id);
        $data->delete();
        return redirect()->back();
    }

    // for contact message
    public function all_messages()
    {
        $data = Contact::all();
        return view('admin.all_messages', compact('data'));
    }

    public function send_mail($id)
    {
        $data = Contact::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Message not found.');
        }
        return view('admin.send_mail', compact('data'));
    }

    public function mail(Request $request, $id)
    {
        $data = Contact::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Message not found.');
        }

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'endline' => $request->endline
        ];

        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back()->with('message', 'Mail sent successfully.');
    }






    public function send_mail_booking($id)
    {
        $data = Booking::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Booking not found.');
        }
        return view('admin.send_mail_booking', compact('data'));
    }

    public function mail_booking(Request $request, $id)
    {
        $data = Booking::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Booking not found.');
        }

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'endline' => $request->endline
        ];

        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back()->with('message', 'Mail sent successfully.');
    }


    
}
