<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\PoetryShairi;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Ye data dashboard par stats dikhane ke liye hai
        $projectsCount = Project::count();
        $poetryCount = PoetryShairi::count();
        $messagesCount = Message::count();

        return view('admin.dashboard', compact('projectsCount', 'poetryCount', 'messagesCount'));
    }
}
