<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.project.v_project');
    }

    public function add()
    {
        return view('admin.project.v_addproject');
    }

    public function inser()
    {
        # code...
    }
}
