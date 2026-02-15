<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashSessionController extends Controller
{
    function addUser(Request $request) {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);
        
        // Store the user data (in a real app, you would save to database)
        // For now, just flash success message
        $request->session()->flash('message', 'User has been added successfully!');
        
        // Redirect back to the form page
        return redirect('flash-session-form');
    }
}
