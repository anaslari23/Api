<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $validator = validator::make($request->all(),[
            'name' =>'required|string|min:2|max:100',
            'email'=> 'required|email',
            'phone' => 'required|numeric',
            'password' => 'required|min:6|max:100',
            'qualification' => 'required|string',
            'stream' => 'required|string'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'qualification' => $request->qualification,
            'stream' => $request->stream,
            'role' => 'user'
        ]);

        return response()->json([
            'status' => TRUE,
            'message' => 'user registered successfully',
            'user' => $user
        ]);
    }


    public function login(Request $request)
    {
        $validator = validator::make($request->all(),[
            'email'=> 'required|email',
            'password' => 'required|min:6|max:100'
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors());
        }

        if(!$token = auth()->attempt($validator->validated()))
        {
            return response()->json(['error' => 'Unauthorized']);
        }
        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' =>$token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL()*30
        ]);
    }

    public function profile()
    {
        return response()->json(auth()->user());
    }


    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    public function logout()
    {
        auth()->logout();
        
        return response()->json(['message' => 'User Successfully logged out']);
    }

}
