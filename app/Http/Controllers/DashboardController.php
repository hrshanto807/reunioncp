<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class DashboardController extends Controller
{
    //dashbored view
    public function index()
    {
        $alumnicount = Registration::orderBy('id', 'desc')->count();
        $registrations = Registration::latest()->paginate(10);
        return view('pages.admin.dashboard.index', compact('alumnicount', 'registrations'));
    }
}
