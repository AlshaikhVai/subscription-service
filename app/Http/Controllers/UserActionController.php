<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserActionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function subscribe($serviceId)
    {
        try {
            $service = Service::find($serviceId);
            if(!$service)
                return response()->json([
                    'message' => 'Service Not Exists',
                    'body' => []
                ], 400);
            Subscription::create([
                'service_id' => $service->id,
                'user_id' => auth()->user()->id,
                'status' => 0, // pending status
            ]);
            $userWebhook = UserWebhook::where('user_id',$service->partner_id)->first();
            Http::withHeaders([
                'Content-Type' => 'application/json',
                'Auth'         =>  $userWebhook->secret_key
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Server Error',
                'body' => []
            ], 500);
        }
    }

    public function unsubscribe()
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
