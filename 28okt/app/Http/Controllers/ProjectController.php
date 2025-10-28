<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil semua data project dari database
        $projects = Project::all();

        // Kirim data ke view
        return view('projects', compact('projects'));

    }
}
