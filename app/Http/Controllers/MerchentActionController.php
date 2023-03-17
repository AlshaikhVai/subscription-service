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

            $config = array(
                "digest_alg" => "sha256",
                "private_key_bits" => 2048,
                "private_key_type" => OPENSSL_KEYTYPE_RSA,
            );
            
            // Generate a new private (and public) key pair
            $private_key = openssl_pkey_new($config);
            
            // Get the private key in PEM format
            openssl_pkey_export($private_key, $private_key_pem);
            
            // Get the public key in PEM format
            $public_key = openssl_pkey_get_details($private_key);
            $public_key_pem = $public_key['key'];


            // Set the payload and header
            $payload = array(
                "iss" => "issuer",
                "aud" => "audience",
                "iat" => time(),
                "exp" => time() + 3600,
                "sub" => "subject",
            );

            $header = array(
                "alg" => "RS256",
                "typ" => "JWT",
            );

            // Sign the token
            $jwt = JWT::encode($payload, $private_key_pem, 'RS256', null, $header);

            $headers = array(
                'Content-Type: application/json',
                'Authorization: Bearer '.$jwt,
            );
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, '');
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $response = curl_exec($ch);
            
            curl_close($ch);
            
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Server Error',
                'body' => []
            ], 500);
        }
    }
}
