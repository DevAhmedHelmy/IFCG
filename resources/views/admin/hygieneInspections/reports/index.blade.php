@extends('admin.layouts.app')

 @section('header-content')
 <div class="title_left">
    <h3>Hygiene Inspection <small>Searching</small></h3>
  </div>

  <div class="title_right">
    <div class="col-md-6 col-sm-6 pull-right ">

    </div>
  </div>
 @endsection
@section('content')
<div class="row">

    <div class="col-md-12 col-sm-12 ">
        <div class="card">
            <div class="card-header">
                Add New Data
            </div>
            <div class="card-body">
                <form action="{{route('hygieneInspections.search')}}" method="GET">

                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="employee_id">@lang('admin.employees')</label>
                            <select class="form-control" id="employee_id" name="employee_id">
                                <option value="">Choose..</option>
                                @foreach($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                @endforeach

                            </select>

                        </div>
                        <div class="col form-group">
                            <label for="shift">@lang('admin.shift')</label>
                            <select class="form-control" id="shift" name="shift">
                                <option value="">Choose..</option>
                                <option value="1">Day</option>
                                <option value="2">Nigth</option>

                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="rosacea">@lang('admin.rosacea')</label>
                            <select class="form-control" id="rosacea" name="rosacea">
                                <option value="">Choose..</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col form-group">
                            <label for="area">@lang('admin.area')</label>
                            <select class="form-control" name="area">
                                <option value="">Choose..</option>
                                <option value="production">production</option>
                                <option value="fill">fill</option>
                                <option value="stores">stores</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="from">@lang('admin.from Date')</label>
                            <input type="date" name="from" id="from" class="form-control">
                        </div>
                        <div class="col form-group">
                            <label for="to">@lang('admin.to Date')</label>
                            <input type="date" name="to" id="to" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 text-center">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Search</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

  @endsection
