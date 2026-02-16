<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserOtp;
use Illuminate\Support\Carbon;

class OtpController extends Controller
{
    public function login()
    {
        return view('auth.otpLogin');
    }

    public function OTPinput(Request $request)
    {
        // validate phone/email input if needed
        $request->validate([
            'phone' => 'required'
        ]);

        $user = auth()->user(); // ⚠️ make sure user is logged in

        $now = Carbon::now();
        $otp = rand(123456, 999999);

        // store OTP
        UserOtp::create([
            'user_id'   => $user->id,
            'otp'       => $otp,
            'expire_at' => $now->addMinutes(10),
        ]);

        // ✅ send sms
        $this->SmsSend($request->phone, $otp);

        return view('auth.OTPinput');
    }

    // ✅ single sms function
    public function SmsSend($number, $otp)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'api_key' => 'YOUR_API_KEY',
                'msg'     => "Your OTP is: $otp",
                'to'      => $number,
            ],
        ]);

        $response = curl_exec($curl);
       unset($curl);

        return $response;
    }
}
