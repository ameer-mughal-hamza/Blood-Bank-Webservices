<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Donor;
use Validator;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public $successStatus = 200;

    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;
            return response()->json(['token' => $token, 'user' => $user], $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
//            'c_password' => 'required|same:password',
            'blood_group' => 'required',
            'mobile_number' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $donor = Donor::create($input);
        $user = User::create($input);
        $token = $user->createToken('MyApp')->accessToken;
        return response()->json(['token' => $token], $this->successStatus);
    }
}
