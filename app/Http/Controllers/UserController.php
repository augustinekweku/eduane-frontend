<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('register');
    }
    public function loginIndex() {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('login');

    }
    public function loginUser(Request $request) {
        //validate request
        $this->validate($request, [
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:6',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, ])) {
            $user = Auth::user();
            //return $user;
            return response()->json([
                'msg' => 'You are logged in',
                'user' => $user
            ]);
        }else {
            return response()->json([
                'msg' => 'Incorrect Login details '
            ], 401);    }
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
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
