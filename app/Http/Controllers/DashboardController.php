<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index() : view 
    {
        $students = DB::table('students')->get();


        return view('dashboard', ['students' => $students]);
    }
}
