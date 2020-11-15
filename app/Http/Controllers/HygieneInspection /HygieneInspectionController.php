<?php

namespace App\Http\Controllers\HygieneInspection;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\HygieneInspection;
use App\Http\Controllers\Controller;
use App\Http\Requests\HygieneInspectionRequest;
use DB;
class HygieneInspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $hygieneInspections = HygieneInspection::with('employee')->get();


        return view('admin.hygieneInspections.index',['hygieneInspections'=>$hygieneInspections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view('admin.hygieneInspections.form',['employees' => $employees]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HygieneInspectionRequest $request)
    {
        $data = $request->validated();
        $data['total'] = HygieneInspection::total($request);
        HygieneInspection::create($data);
        return redirect()->route('hygieneInspections.index')->with('success',trans('admin.created_Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HygieneInspection  $hygieneInspection
     * @return \Illuminate\Http\Response
     */
    public function show(HygieneInspection $hygieneInspection)
    {
        return view('admin.hygieneInspections.show',['hygieneInspection'=>$hygieneInspection]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HygieneInspection  $hygieneInspection
     * @return \Illuminate\Http\Response
     */
    public function edit(HygieneInspection $hygieneInspection)
    {
        $employees = Employee::all();
        return view('admin.hygieneInspections.form',['employees' => $employees,'hygieneInspection'=>$hygieneInspection]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HygieneInspection  $hygieneInspection
     * @return \Illuminate\Http\Response
     */
    public function update(HygieneInspectionRequest $request, HygieneInspection $hygieneInspection)
    {
        $data = $request->validated();
        $data['total'] = HygieneInspection::total($request);
        $hygieneInspection->update($data);
        return redirect()->route('hygieneInspections.index')->with('success',trans('admin.updated_Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HygieneInspection  $hygieneInspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(HygieneInspection $hygieneInspection)
    {
        $hygieneInspection->delete();
        return redirect()->route('hygieneInspections.index')->with('success',trans('admin.deleted_Successfully'));
    }
}
