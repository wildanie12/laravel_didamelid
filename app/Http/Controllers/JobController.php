<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('job.index', [
            'jobs' => Jobs::latest()->filter(request(['search', 'category', 'location']))->paginate(7)->withQueryString(),
        ]);
    }
    public function show(Jobs $job)
    {
        return view('job.show', [
            'categories' => Category::all(),
            'job' => $job,
        ]);
    }
}
