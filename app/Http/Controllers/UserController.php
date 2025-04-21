<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Import the Auth facade

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }
}