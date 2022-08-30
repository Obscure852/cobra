<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionsController extends Controller{
    
    public function index(){
        return view('pages.admissions');
    }
}
