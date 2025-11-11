<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return response()->json([
            'email' => 'dhivakesuma@gmail.com',
            'message' => 'You can send a message via POST /contact'
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Message received!',
            'data' => $request->all()
        ]);
    }
}
