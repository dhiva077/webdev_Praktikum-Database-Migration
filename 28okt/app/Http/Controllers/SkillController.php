<?php

namespace App\Http\Controllers;

use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        return Skill::all();
    }

    public function show($id)
    {
        return Skill::findOrFail($id);
    }
}
