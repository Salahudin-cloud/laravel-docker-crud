<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): view
    {
        $enrollmentData = Student::select('enrollment_year', DB::raw('COUNT(*) as total'))
            ->groupBy('enrollment_year')
            ->orderBy('enrollment_year', 'asc')
            ->get();

        $labels = $enrollmentData->pluck('enrollment_year');
        $data = $enrollmentData->pluck('total');
        return view('dashboard', compact('labels', 'data'));
    }
}
