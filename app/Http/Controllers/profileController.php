<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

use App\Models\Profile;

class profileController extends Controller
{
    public function showSignupForm()
    {
        return view('profile.signup');
    }

    public function signup(Request $request)
    {
        try {
            $validated = $request->validate([
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|email|unique:profile,email',
                'password' => 'required|string|min:8|confirmed',
                'gender' => 'required|in:male,female,other',
                'city' => 'required|string|max:255',
                'terms' => 'accepted',
            ]);

            $validated['password'] = Hash::make($validated['password']);
            $validated['terms'] = $request->has('terms') ? 1 : 0;

            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('uploads', 'public');
            }

            Profile::create($validated);

            return redirect()->route('login')->with('success', 'Account created successfully. Please log in.');

        } catch (\Exception $e) {
            Log::error('Signup Error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['Something went wrong. Please try again later.']);
        }
    }

    public function showLoginForm()
    {
        return view('profile.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = Profile::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Session::put('user_id', $user->id);
            return redirect()->route('profile')->with('success', 'Login successful.');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    }
    public function showProfile()
    {
        $userId = session('user_id');
        $user = profile::find($userId);

        return view('profile.profile', compact('user'));
    }

    public function editProfile()
    {

        $userId = session('user_id');
        $user = profile::find($userId);
        return view('profile.edit', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:profile,email,',
            'password' => 'nullable|string|min:8|confirmed',
            'gender' => 'required|in:male,female,other',
            'city' => 'required|string|max:255',

        ]);

        $user = profile::find(session('user_id'));

        $user->fname = $validated['fname'];
        $user->lname = $validated['lname'];
        $user->email = $validated['email'];
        $user->city = $validated['city'];
        $user->gender = $validated['gender'];

        if ($request->filled('password')) {
            $user->password = bcrypt($validated['password']);
        }
        if ($request->hasFile('image')) {
        if ($user->image && file_exists(public_path('storage/' . $user->image))) {
            unlink(public_path('storage/' . $user->image)); // Remove the old image
        }

        $imageName = time() . '.' . $request->image->extension();
        
        $request->image->move(public_path('storage'), $imageName);

        $user->image = $imageName;
    }

        $user->save();

        return redirect()->route('profile');
    }
    public function logout(Request $request)
    {
        Session::forget('user_id');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
