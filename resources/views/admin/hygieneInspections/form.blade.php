@extends('admin.layouts.app')

 @section('header-content')
 <div class="title_left">
    <h3>Hygiene Inspection <small>Add New Data</small></h3>
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
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="title">العنوان</label>
                            <input type="text" id="title" name="title" value="" class="form-control " placeholder="العنوان" autocomplete="off" required="">
                            <small id="emailHelp" class="form-text text-danger">هذا الحقل مطلوب</small>
                        </div>
                        <div class="col form-group">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  @endsection
