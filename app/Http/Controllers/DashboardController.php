<?php

namespace App\Http\Controllers;
use App\Helpers\Tokeet;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data=Tokeet::getAllTasks()['data'];
    
        return view("dashboard.index",compact('data'));
    }
}
