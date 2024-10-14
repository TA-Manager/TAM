<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;

class GoogleController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        try {
            // Retrieve user information from Google
            $googleUser = Socialite::driver('google')->user(); // use stateless() to avoid issues with session state

            // Check if the user already exists in the members table
            $member = Member::where('email', $googleUser->getEmail())->first();

            if ($member) {
                // If the user exists, log them in
                Auth::login($member);

                // Redirect to home after successful login
                return redirect('/home');
            } else {
                // If the user does not exist, create a new member
                $newMember = Member::create([
                    'first_name' => $googleUser->user['given_name'], // Extract the given name from the Google profile
                    'last_name' => $googleUser->user['family_name'], // Extract the family name from the Google profile
                    'email' => $googleUser->getEmail(),
                    'phone_number' => null, // Handle this based on your application
                    'username' => strtolower($googleUser->getName()), // Simple username generation
                    'student_id' => substr($googleUser->getEmail(), 0, 8), // You can handle this as needed
                    'contact' => null, // You can handle this as needed
                    'avatar' => $googleUser->getAvatar(), // Store the avatar URL
                ]);

                // Log the new member in
                Auth::login($newMember);

                // Redirect to home after successful login
                return redirect('/home');
            }

        } catch (\Exception $e) {
            // Catch and log the exception if something goes wrong
            return redirect('/')->with('error', 'Something went wrong during login: ' . $e->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Redirect after logout
    }
}
