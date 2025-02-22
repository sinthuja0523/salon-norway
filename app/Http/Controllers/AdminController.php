<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function newAppointmentsView(){

        $bookings = DB::table('bookings')->get();

        return view('admin.pages.new-appointments',compact('bookings'));
    }
}
