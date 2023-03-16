<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MerchentActionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function updateSubscriptionStatus(Request $request)
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
