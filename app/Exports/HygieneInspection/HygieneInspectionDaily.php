<?php

namespace App\Exports\HygieneInspection;
use App\Models\HygieneInspection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class HygieneInspectionDaily implements FromView
{
    public function view(): View
    {
        $hygieneInspections = HygieneInspection::where('created_at','>=',now()->format('Y-m-d').' '.'00:00:00')->where('created_at','<=',now()->format('Y-m-d') .' '. '23:59:59')->get();
        return view('admin.hygieneInspections.reports.daily', [
            'hygieneInspections' => $hygieneInspections
        ]);
    }
}




