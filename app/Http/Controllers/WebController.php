<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Carbon\Carbon;


class WebController extends Controller
{
    //home view
    public function home()
    {
        // Set Eid date + 2 days
        $eidPlus2Days = Carbon::create(2026, 4, 15); // 15 April 2026

        $today = Carbon::now();

        // Calculate days difference (if negative, return 0)
        $daysLeft = $today->diffInDays($eidPlus2Days, false); // false for signed difference

        if ($daysLeft < 0) {
            $daysLeft = 0;
        }



        $alumnicount = Registration::orderBy('id', 'desc')->count();
        $alumni = Registration::latest()->take(8)->get();
        return view('pages.web.index', compact('alumnicount', 'alumni','daysLeft'));
    }

    //student view
    public function student()
    {
        $alumni = Registration::latest()->paginate(8);
        return view('pages.web.students', compact('alumni'));
    }
    //news view
    public function news()
    {
        return view('pages.web.news');
    }

    // //single news
    // public function newsDetails()
    // {
    //     return view('pages.newsDetails');
    // }
    //single news 1
    public function newsDetails1()
    {
        return view('pages.web.newsDetails1');
    }
    //single news 2
    public function newsDetails2()
    {
        return view('pages.web.newsDetails2');
    }
    //single news 3
    public function newsDetails3()
    {
        return view('pages.web.newsDetails3');
    }
    //account view
    public function account()
    {
        return view('pages.web.account.index');
    }
    //registration view
    public function registration()
    {

        $registrations = Registration::orderBy('id', 'desc')->paginate(10);
        return view('pages.web.account.income.registration', compact('registrations'));
    }
    //sponser view
    public function sponser()
    {
        return view('pages.web.account.income.sponser');
    }
    //donation view
    public function donation()
    {
        return view('pages.web.account.income.donation');
    }
}
