<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller{
    
    public function index(){
        return view('pages.staff');
    }

    public function staffData(){
        return view('pages.staff-data');
    }
}
