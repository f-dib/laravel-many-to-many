<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        $user = Auth::user();
        $projects = Project::all();

        return view('admin.index', compact('user', 'projects'));
    }

    public function users(){
        return view('admin.users');
    }
}
