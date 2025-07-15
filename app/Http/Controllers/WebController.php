<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;


class WebController extends Controller
{
    //home view
    public function home()
    {
        $registrations = Registration::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.web.index');
    }

    //student view
    public function student()
    {
        return view('pages.web.students');
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
