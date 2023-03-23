<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('index');
    }

    public function profile(){
        return view('apps-contacts-profile');
    }

    public function lockscreen(){
        return view('auth-lock-screen');
    }

    public function logout(){
       Auth::logout();
       return view('login');
    }

    public function calendar(){
        return view('apps-calendar');
    }


    public function contactsList(){
        return view('apps-contacts-list');
    }

    public function fontAwesome(){
        return view('icons-fontawesome');
    }


    public function pricing()
    {
        return view('pages-pricing');
    }

    public function datatables()
    {
        return view('tables-datatable');
    }


    public function boxicons(){
        return view('icons-boxicons');
    }

    public function invoiceList()
    {
        return view('apps-invoices-list');
    }


    public function dripIcons(){
        return view('icons-dripicons');
    }

    public function materialIcons(){
        return view('icons-materialdesign');
    }
}
