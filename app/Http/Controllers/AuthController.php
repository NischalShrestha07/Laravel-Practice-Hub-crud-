<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('students');
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'user doesnt exist'
            ]);
        }
    }


    public function register()
    {
        return view('register');
    }

    public function addUser(Request $request)
    {
        // return User::all();
        // dd($request);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'nullable|string',
            'password' => 'required|string|confirmed',
            'email' => 'required|'
        ]);
        // return $request;
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }


    public function store(Request $request)
    {
        $user = ['asajsbja'];
        if (empty($user)) {
            return 'Name is require';
        }
        return 'form subsdb';
    }

    public function test()
    {
        $users = User::all();
        return view('test', compact('users'));
    }
    public function userStore(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'name' => 'required|string|min:12',
                'email' => 'required|email',
                'image' => 'nullable|image|mimes:jpeg,jpg,png',
                'password' => 'required|string|min:8'
            ],
            [
                'name.required' => 'Name is required',
                'password.required' => 'password hal vai'
            ]
        );

        $path = null;
        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('images', 'public');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $path
        ]);
        return redirect()->back()->with('success', 'Data uploaded');
    }
}
