<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'contact_phone' => 'nullable|string|max:20',
            'contact_message' => 'required|string',
        ]);

        // Send mail to admin
        Mail::send('emails.contact-admin', $data, function($mail) {
            $mail->to('info@deelko.com')
                 ->subject('নতুন বার্তা পেয়েছেন');
        });

        // Send confirmation mail to user
        Mail::send('emails.contact-user', $data, function($mail) use ($data) {
            $mail->to($data['contact_email'])
                 ->subject('আপনার বার্তা গ্রহণ করা হয়েছে');
        });

        return redirect()->to(route('home') . '#contact')->with('success', 'আপনার বার্তা সফলভাবে পাঠানো হয়েছে। ধন্যবাদ!');
    }
}
