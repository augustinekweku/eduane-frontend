<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('register');
    }
    public function login() {
        return view('login');
    }
    public function registerUser(Request $request) {
                try {
                //validate request
                //return($request->firstName);
                $this->validate($request, [
                    'firstName' => 'required',
                    'lastName' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:6',
                ]);
                $password = bcrypt($request->password);
                $user = User::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'password' => $password,
            ]);
                return $user;
                } catch (Exception $th) {
                    throw $th;
                }
    }
}
