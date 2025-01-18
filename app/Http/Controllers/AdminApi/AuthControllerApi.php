<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Validator;

class AuthControllerApi extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|min:8'
        ]);
        if ($validator->fails()) {
            $response = [
                'status' => 'failed',
                'message' => 'Log in failed !',
                'errors' => $validator->errors()->all()
            ];
            return response()->json($response, 401);
        }
        $user = User::where('username', $request['username'])->first();
        if (!$user || !Hash::check($request['password'], $user->password)) {
            $response = [
                'status' => 'failed',
                'message' => 'Log in failed !',
                'data' => []
            ];
            return response()->json($response, 401);
        }
        $user->tokens()->delete();
        $token = $user->createToken('AuthToken', [], now()->addWeek())->plainTextToken;
        $response = [
            'status' => 'success',
            'message' => 'Logged in succesfully !',
            'data' => [
                'token' => $token
            ]
        ];
        return response()->json($response);
    }
    public function logout()
    {
        auth()->user()->tokens()->delete();
        $response = [
            'status' => 'success',
            'message' => 'Logged out succesfully !',
        ];
        return response()->json($response);
    }
    public function index()
    {
        return 'OK';
    }
}
