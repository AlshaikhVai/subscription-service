<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PartnerActionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function sendNotification(Request $request)
    {
        try {
            
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Server Error',
                'body' => []
            ], 500);
        }
    }
}
