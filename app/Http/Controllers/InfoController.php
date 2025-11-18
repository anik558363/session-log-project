<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InfoController extends Controller
{

    public function info(Request $request)
    {
        // Retrieve name and email
        $name = $request->query('name');
        $email = $request->query('email');

        // Store in session
        $request->session()->put('name', $name);
        $request->session()->put('email', $email);

        // Log the data
        Log::info('User info stored', [
            'name'  => $name,
            'email' => $email,
        ]);

        // Return JSON response
        return response()->json([
            'status'  => 'success',
            'message' => 'User info stored in session and logged.',
            'code'    => 201,
        ]);
    }


    public function dashboard()
    {

        $contacts = [
            ['name' => 'Alice', 'email' => 'alice@example.com', 'phone' => '0123456789'],
            ['name' => 'Bob', 'email' => 'bob@example.com', 'phone' => '0987654321'],
            ['name' => 'Charlie', 'email' => 'charlie@example.com', 'phone' => '0111222333'],
        ];

        return view('dashboard', compact('contacts'));
    }
}
