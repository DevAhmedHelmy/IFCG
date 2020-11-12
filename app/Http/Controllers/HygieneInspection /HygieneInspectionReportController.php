<?php

namespace App\Http\Controllers\HygieneInspection;

use Excel;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\HygieneInspection;
use App\Http\Controllers\Controller;
use App\Exports\HygieneInspection\HygieneInspectionDaily;

class HygieneInspectionReportController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('admin.hygieneInspections.reports.index',['employees'=>$employees]);
    }
    public function daily()
    {
        return Excel::download(new HygieneInspectionDaily, 'daily.xlsx');
    }
    public function search()
    {

        $query = HygieneInspection::query();
        $query->when(request('employee_id'), function ($q) {
            return $q->where('employee_id', request('employee_id'));
        });
        $query->when(request('area'), function ($q) {
            return $q->where('area', request('area'));
        });
        $query->when(request('shift'), function ($q) {
            return $q->where('shift', request('shift'));
        });
        $query->when(request('rosacea'), function ($q) {
            return $q->where('rosacea', request('rosacea'));
        });
        $query->when(request('from'), function ($q) {
            return $q->where('created_at', '>=' , request('from') . ' ' . '00:00:00');
        });
        $query->when(request('to'), function ($q) {
            return $q->where('created_at', '<=' ,request('to') . ' ' . '23:59:59');
        });

        $hygieneInspections = $query->get();
        return view('admin.hygieneInspections.reports.result',['hygieneInspections'=>$hygieneInspections]);

    }
}
