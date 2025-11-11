<?php

namespace App\Http\Controllers;

use App\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        return Education::all();
    }

    public function show($id)
    {
        return Education::findOrFail($id);
    }
}
