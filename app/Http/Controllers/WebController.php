<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Blog;
use Carbon\Carbon;
use App\Models\HeroSection;
use App\Models\Donation;
use App\Models\SiteSetting;



class WebController extends Controller
{
    //home view
    public function home()
    {
        // Set Eid date + 2 days
        $eidPlus2Days = Carbon::create(2026, 4, 15); // 15 April 2026

        $today = Carbon::now();

        // Calculate days difference (if negative, return 0)
        $daysLeft = $today->diffInDays($eidPlus2Days, false);

        if ($daysLeft < 0) {
            $daysLeft = 0;
        }

        $alumniall = Registration::orderBy('id', 'desc')->count();
        $alumnicount = Registration::orderBy('id', 'desc')->where('status', 'Approved')->count();
        $newscount = Blog::orderBy('id', 'desc')->count();
        $alumni = Registration::latest()->where('status', 'Approved')->take(8)->get();
        $newsItems = Blog::orderBy('id', 'desc')->take(3)->get();

        $setting = SiteSetting::first();

        $hero = HeroSection::first();      
        return view('pages.web.index', compact('alumnicount', 'alumni', 'daysLeft', 'newsItems', 'newscount', 'alumniall', 'hero', 'setting'));
    }
    //student view
    public function student()
    {
        $alumni = Registration::latest()->where('status', 'Approved')->paginate(20);
        return view('pages.web.students', compact('alumni'));
    }
    //news view
    public function news()
    {
        $newsItems = Blog::latest()->paginate(9);
        return view('pages.web.news', compact('newsItems'));
    }

    //single news
    public function newsDetails($encodedId)
    {
        $id = decode_id($encodedId);
        $news = Blog::findOrFail($id);

        return view('pages.web.newsDetails', compact('news'));
    }
    //account view
    public function account()
    {
        return view('pages.web.account.index');
    }
    //registration view
    public function registration()
    {
        $registrations = Registration::orderBy('id', 'desc')->where('status', 'Approved')->paginate(10);
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
        $donations = Donation::orderBy('id', 'desc')->where('status', 'Approved')->paginate(10);
        return view('pages.web.account.income.donation', compact('donations'));
    }
}
