<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class StudentController extends Controller
{
     public function index()
    {
        $registrations = Registration::orderBy('id', 'desc')->paginate(10);       
        return view('pages.admin.student.index',compact('registrations'));
    }
}
