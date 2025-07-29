<?php

// app/Http/Controllers/DonationController.php
namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'amount' => 'required|numeric|min:0',

        ]);

        $donation = new Donation();
        $donation->name = $request->name;
        $donation->mobile = $request->mobile;
        $donation->amount = $request->amount;
        // $donation->bkash_num = $request->bkash_num;
        // $donation->bkash_trans_id = $request->bkash_trans_id;
        // $donation->payment_method = $request->payment_method;
        $donation->status = 'pending';
        $donation->save();

        return back()->with('success', 'আপনার ডোনেশন সফলভাবে হয়েছে!');

    }

    public function index()
    {
        $donations = Donation::orderBy('created_at', 'desc')->paginate(10);


        return view('pages.admin.donation.index', compact('donations'));
    }

    public function updateStatus(Request $request, $id)
{
    $donation = Donation::findOrFail($id);
    $donation->status = $request->status;
    $donation->save();

    return back()->with('success', 'ডোনেশনের স্ট্যাটাস আপডেট হয়েছে!');
}

}

