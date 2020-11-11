@extends('admin.layouts.app')

 @section('header-content')
 <div class="title_left">
    <h3>Hygiene Inspection</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 pull-right ">

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

        @isset($employee)
            <form method="POST" action="{{ route('employees.update', $employee->id) }}">
            @method('put')
        @else
            <form method="POST" action="{{ route('employees.store') }}">
        @endisset
            @csrf
            <div class="form-group">
            <label for="name">Employee Name</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" required name="name"
                    value=" {{ isset($employee) ? old('name',$employee->name) : old('name') }}">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
            <div class="form-group">
            <label for="Code">Code</label>
            <input type="text" id="Code" class="form-control @error('code') is-invalid @enderror" required name="code"
                    value="{{isset($employee) ? old('code',$employee->code) : old('code') }}">
            @error('code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control @error('gender') is-invalid @enderror" required id="gender" name="gender">
                    <option value="">Choose..</option>
                    <option @if(isset($employee) && $employee->gender =='male') selected @endif value="male">Male</option>
                    <option @if(isset($employee) && $employee->gender =='female') selected @endif value="female">Female</option>

                </select>
                @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
  </div>
 </div>
  @endsection
