<?php

namespace App\Http\Controllers\HygieneInspection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HygieneInspectionController extends Controller
{
    public function index()
    {
        return view('admin.hygieneInspections.index');
    }
    public function create()
    {
        return view('admin.hygieneInspections.form');
    }
}
