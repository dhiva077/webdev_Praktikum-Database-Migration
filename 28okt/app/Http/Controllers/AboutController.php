<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return response()->json([
            'name' => 'Dhiva Kesuma Pertiwi',
            'role' => 'Informatics Student & Photographer',
            'bio' => 'I am passionate about technology, creativity, and continuous learning.',
        ]);
    }
}
