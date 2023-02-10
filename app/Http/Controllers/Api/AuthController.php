<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator  = Validator::make($request->all(), [
            'name'              => 'required',
            'email'             => 'required|email',
            'password'          => 'required',
            'confirm_password'  => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success'   => false,
                'message'   => 'Ada kesalahan',
                'data'      => $validator->errors()
            ]);
        }

        $input  = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user   = User::create($input);

        $success['token']   = $user->createToken('auth_token')->plainTextToken;
        $success['name']    = $user->name;

        return response()->json([
            'success'   => true,
            'message'   => 'Berhasil register',
            'data'      => $success
        ]);
    }

    public function login(Request $request)
    {
        $validasi   = Validator::make($request->all(), [
            'email'     => ['required', 'email'],
            'password'  => ['required']
        ]);

        if ($validasi->fails()) {
            return response()->json([
                'success'   => false,
                'message'   => 'Ada kesalahan',
                'data'      => $validasi->errors()
            ]);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (password_verify($request->password, $user->password)) {
                $success['token']   = $user->createToken('auth_token')->plainTextToken;
                $success['name']    = $user->name;
                $success['email']   = $user->email;

                return response()->json([
                    'success'   => true,
                    'message'   => 'Berhasil login',
                    'data'      => $success
                ]);
            }
        }
        return response()->json([
            'success'   => false,
            'message'   => 'Ada kesalahan',
            'data'      => null
        ]);
    }
}
