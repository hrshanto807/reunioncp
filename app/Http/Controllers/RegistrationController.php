<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.web.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'batch' => 'required|integer',
            'father_name' => 'required|string',
            'blood' => 'required',
            'photo' => 'required|image|max:2048',
            'tshirt' => 'required',
            'phone' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'registration_type' => 'required|in:single,group',
            'participant_count' => 'nullable|integer',
            'terms_agreed' => 'required|accepted',
            'amount' => 'required',
            'payment_method' => 'required',
            'bkash_num' => 'required',
            'bkash_trans_id' => 'required',
        ]);

        // Convert Bangla number to English for amount field
        $validated['amount'] = englishNumber($validated['amount']);

        // Save photo
        $photo = $request->file('photo');
        $photoName = time() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('photos'), $photoName);
        $photoPath = 'photos/' . $photoName;
        $registration = new Registration();
        $registration->name = $validated['name'];
        $registration->batch = $validated['batch'];
        $registration->father_name = $validated['father_name'];
        $registration->blood = $validated['blood'];
        $registration->photo = $photoPath;
        $registration->tshirt = $validated['tshirt'];
        $registration->phone = $validated['phone'];
        $registration->email = $request->email;
        $registration->profession = $request->profession;
        $registration->present_address = $validated['present_address'];
        $registration->permanent_address = $validated['permanent_address'];
        $registration->representative_name = $request->representative_name;
        $registration->registration_type = $validated['registration_type'];
        $registration->participant_count = $validated['participant_count'] ?? 1;
        $registration->status = 'painding';
        $registration->bkash_trans_id = $validated['bkash_trans_id'];
        $registration->bkash_num = $validated['bkash_num'];
        $registration->amount = $validated['amount'];
        $registration->payment_method = $validated['payment_method'];
        $registration->terms_agreed = true;
        $registration->save();

        return redirect()->to(route('home') . '#registration')
            ->with('success', 'আপনার রেজিস্ট্রেশন সফলভাবে সম্পন্ন হয়েছে!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
