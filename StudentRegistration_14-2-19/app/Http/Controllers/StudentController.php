<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Index(){
        return view('Pageviews.Index');
    }
    public function Registration(){
        return view('Pageviews.Registrations');
    }
    public function Login(){
        return view('Pageviews.Login');
    }
    public function Menu(){
        return view('layout.menu');
    }
}
