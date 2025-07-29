<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Token;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::orderBy('id', 'desc')->paginate();
        return view('pages.admin.student.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            // 'payment_method' => 'required',
            // 'bkash_num' => 'required',
            // 'bkash_trans_id' => 'required',
        ]);

        // Convert Bangla number to English for amount field
        $validated['amount'] = englishNumber($validated['amount']);

        // Save photo
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('photos'), $photoName);
            $photoPath = 'photos/' . $photoName;
        } else {
            $photoPath = null;
        }

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
        $registration->status = 'pending';
        $registration->amount = $validated['amount'];
        // $registration->bkash_trans_id = $validated['bkash_trans_id'];
        // $registration->bkash_num = $validated['bkash_num'];       
        // $registration->payment_method = $validated['payment_method'];
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
        return view('pages.admin.student.edit', compact('registration'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'batch' => 'required|integer',
            'father_name' => 'required|string',
            'blood' => 'required',
            'tshirt' => 'required',
            'phone' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'registration_type' => 'required|in:single,group',
            'participant_count' => 'nullable|integer',
            'amount' => 'required',
            'payment_method' => 'required',
            'bkash_num' => 'required',
            'bkash_trans_id' => 'required',
            'photo' => 'nullable|image|max:2048',
            'email' => 'nullable|email',
            'profession' => 'nullable|string|max:255',
            'representative_name' => 'nullable|string|max:255',
            'status' => 'nullable|in:Approved,Cancel,pending',
        ]);

        $validated['amount'] = englishNumber($validated['amount']);
        if ($request->hasFile('photo')) {

            if ($registration->photo && file_exists(public_path($registration->photo))) {
                unlink(public_path($registration->photo));
            }

            $photo = $request->file('photo');
            $photoName = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('photos'), $photoName);
            $registration->photo = 'photos/' . $photoName;
        }

        // Fill/update model data
        $registration->fill([
            'name' => $validated['name'],
            'batch' => $validated['batch'],
            'father_name' => $validated['father_name'],
            'blood' => $validated['blood'],
            'tshirt' => $validated['tshirt'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'profession' => $validated['profession'] ?? null,
            'present_address' => $validated['present_address'],
            'permanent_address' => $validated['permanent_address'],
            'representative_name' => $validated['representative_name'] ?? null,
            'registration_type' => $validated['registration_type'],
            'participant_count' => $validated['participant_count'] ?? 1,
            'bkash_num' => $validated['bkash_num'],
            'bkash_trans_id' => $validated['bkash_trans_id'],
            'payment_method' => $validated['payment_method'],
            'amount' => $validated['amount'],
            'status' => 'pending',
        ]);

        $registration->save();

        return redirect()->route('registration.index')->with('success', 'রেজিস্ট্রেশন তথ্য সফলভাবে হালনাগাদ হয়েছে!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }


    /**
     * Update the status of a registration
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Approved,Cancel,pending',
        ]);

        $registration = Registration::findOrFail($id);
        $registration->status = $request->status;
        $registration->save();

        // If status is approved, create tokens
        if ($request->status === 'Approved') {
            $this->createTokensForRegistration($registration);
        }

        return back()->with('success', 'Status updated successfully.');
    }

    /**
     * Create tokens based on registration type and participant count
     */
    protected function generateUniqueCode()
    {
        return strtoupper(Str::random(10));
    }
    /**
     * Create tokens for the registration
     */
    protected function createTokensForRegistration(Registration $registration)
    {
        // Prevent duplicate entry
        if (DB::table('tokens')->where('registration_id', $registration->id)->exists()) {
            session()->flash('info', ' Tokens already exist for this registration.');
            return;
        }

        $ownerName = $registration->name;
        $tokens = [];
        $tokenTypes = ['food', 'event', 'tshirt'];

        // Step 1: generate tokens
        foreach ($tokenTypes as $type) {
            $tokens[] = [
                'code' => $this->generateUniqueCode(),
                'type' => $type,
                'owner_name' => $ownerName,
                'is_guest' => false,
                'status' => 'pending',
            ];

        }

        // Step 2: handle group guest tokens
        if ($registration->registration_type === 'group') {
            $guestCount = max(0, ($registration->participant_count ?? 1) - 1);
            for ($i = 0; $i < $guestCount; $i++) {
                $tokens[] = [
                    'code' => $this->generateUniqueCode(),
                    'type' => 'food',
                    'owner_name' => $ownerName . " (Guest " . ($i + 1) . ")",
                    'is_guest' => true,
                ];
            }
        }

        // Step 3: get main token code (first one)
        $primaryCode = $tokens[0]['code'] ?? 'UNKNOWN';

        // Step 4: insert as one row in tokens table
        DB::table('tokens')->insert([
            'registration_id' => $registration->id,
            'code' => $primaryCode, // used for indexing/search
            'tokens' => json_encode($tokens),
            'owner_name' => $ownerName,
            'is_guest' => false, // this row is summary, not a guest
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        session()->flash('success', count($tokens) . " token(s) created and stored.");
    }

    /**
     * Update token status by code
     */
    public function updateTokenStatus(Request $request, $tokenCode)
    {
        $request->validate([
            'status' => 'required|in:pending,accepted,cancelled',
        ]);

        // Find the tokens row containing the tokens array
        $tokenRecord = DB::table('tokens')->whereJsonContains('tokens', json_encode([['code' => $tokenCode]]))->first();

        // The above might not work well for nested JSON, so better:
        $tokenRecord = DB::table('tokens')->where('tokens', 'like', '%' . $tokenCode . '%')->first();

        if (!$tokenRecord) {
            return response()->json(['success' => false, 'message' => 'Token not found'], 404);
        }

        $tokens = json_decode($tokenRecord->tokens, true);

        // Find token inside array
        $found = false;
        foreach ($tokens as &$token) {
            if ($token['code'] === $tokenCode) {
                $token['status'] = $request->status;
                $found = true;
                break;
            }
        }

        if (!$found) {
            return response()->json(['success' => false, 'message' => 'Token not found inside tokens array'], 404);
        }

        // Save updated tokens JSON back to DB
        DB::table('tokens')
            ->where('id', $tokenRecord->id)
            ->update(['tokens' => json_encode($tokens), 'updated_at' => now()]);

        return response()->json(['success' => true, 'status' => $request->status]);
    }

    /**
     * Get tokens by registration ID
     */
    public function getTokensByRegistration($id)
    {
        $token = DB::table('tokens')->where('registration_id', $id)->first();
        $tokens = $token ? json_decode($token->tokens, true) : [];

        return response()->json(['tokens' => $tokens]);
    }


}
