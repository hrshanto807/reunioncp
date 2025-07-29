<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokenController extends Controller
{
    public function getTokensByRegistration($id)
    {
        $tokens = DB::table('tokens')
            ->where('registration_id', $id)
            ->select('code', 'owner_name', 'is_guest')
            ->get();

        return response()->json(['tokens' => $tokens]);
    }

}
