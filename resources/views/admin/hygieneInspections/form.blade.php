@extends('admin.layouts.app')

 @section('header-content')
 <div class="title_left">
    <h3>Hygiene Inspection <small>Add New Data</small></h3>
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
                @isset($hygieneInspection)
                    <form action="{{route('hygieneInspections.update',$hygieneInspection->id)}}" method="POST">
                    @method('put')
                @else
                    <form action="{{route('hygieneInspections.store')}}" method="POST">
                @endisset

                @csrf
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="employee_id">@lang('admin.employees')</label>
                            <select class="form-control @error('gender') is-invalid @enderror" required id="employee_id" name="employee_id">
                                <option value="">Choose..</option>
                                @foreach($employees as $employee)
                                    <option @if(isset($hygieneInspection) && $hygieneInspection->employee_id == $employee->id) selected @endif
                                            value="{{$employee->id}}">{{$employee->name}}</option>
                                @endforeach

                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="shift">@lang('admin.shift')</label>
                            <select class="form-control @error('gender') is-invalid @enderror" required id="shift" name="shift">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->shift ==1) selected @endif value="1">Day</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->shift ==2) selected @endif value="2">Nigth</option>

                            </select>
                            @error('shift')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="rosacea">@lang('admin.rosacea')</label>
                            <select class="form-control @error('rosacea') is-invalid @enderror" required id="rosacea" name="rosacea">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->rosacea ==1) selected @endif value="1">One</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->rosacea ==2) selected @endif value="2">Two</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->rosacea ==3) selected @endif value="3">Three</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="area">@lang('admin.area')</label>
                            <select class="form-control @error('area') is-invalid @enderror" required id="area" name="area">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->area =='production') selected @endif value="production">production</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->area =='fill') selected @endif value="fill">fill</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->area =='stores') selected @endif value="stores">stores</option>
                            </select>
                            @error('area')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="flu">@lang('admin.flu')</label>
                            <select class="form-control @error('flu') is-invalid @enderror" required id="flu" name="flu">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->flu ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->flu ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->flu ==6) selected @endif value="6">6</option>
                            </select>
                            @error('flu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="diarrhea">@lang('admin.diarrhea')</label>
                            <select class="form-control @error('diarrhea') is-invalid @enderror" required id="diarrhea" name="diarrhea">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->diarrhea ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->diarrhea ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->diarrhea ==6) selected @endif value="6">6</option>
                            </select>
                            @error('diarrhea')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="beard">@lang('admin.beard')</label>
                            <select class="form-control @error('beard') is-invalid @enderror" required id="beard" name="beard">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->beard ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->beard ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->beard ==6) selected @endif value="6">6</option>
                            </select>
                            @error('beard')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="uniform">@lang('admin.uniform')</label>
                            <select class="form-control @error('uniform') is-invalid @enderror" required id="uniform" name="uniform">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->uniform ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->uniform ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->uniform ==6) selected @endif value="6">6</option>
                            </select>
                            @error('uniform')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="hairnet">@lang('admin.hairnet')</label>
                            <select class="form-control @error('hairnet') is-invalid @enderror" required id="hairnet" name="hairnet">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->hairnet ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->hairnet ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->hairnet ==6) selected @endif value="6">6</option>
                            </select>
                            @error('hairnet')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="shoes">@lang('admin.shoes')</label>
                            <select class="form-control @error('shoes') is-invalid @enderror" required id="shoes" name="shoes">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->shoes ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->shoes ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->shoes ==6) selected @endif value="6">6</option>
                            </select>
                            @error('shoes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="gloves">@lang('admin.gloves')</label>
                            <select class="form-control @error('gloves') is-invalid @enderror" required id="gloves" name="gloves">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->gloves ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->gloves ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->gloves ==6) selected @endif value="6">6</option>
                            </select>
                            @error('gloves')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="pins">@lang('admin.pins')</label>
                            <select class="form-control @error('pins') is-invalid @enderror" required id="pins" name="pins">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->pins ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->pins ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->pins ==6) selected @endif value="6">6</option>
                            </select>
                            @error('pins')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="mask">@lang('admin.mask')</label>
                            <select class="form-control @error('mask') is-invalid @enderror" required id="mask" name="mask">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->mask ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->mask ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->mask ==6) selected @endif value="6">6</option>
                            </select>
                            @error('mask')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="cleanness">@lang('admin.cleanness')</label>
                            <select class="form-control @error('cleanness') is-invalid @enderror" required id="cleanness" name="cleanness">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->cleanness ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->cleanness ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->cleanness ==6) selected @endif value="6">6</option>
                            </select>
                            @error('cleanness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="wounds">@lang('admin.wounds')</label>
                            <select class="form-control @error('wounds') is-invalid @enderror" required id="wounds" name="wounds">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->wounds ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->wounds ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->wounds ==6) selected @endif value="6">6</option>
                            </select>
                            @error('wounds')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="nails">@lang('admin.nails')</label>
                            <select class="form-control @error('nails') is-invalid @enderror" required id="nails" name="nails">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->nails ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->nails ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->nails ==6) selected @endif value="6">6</option>
                            </select>
                            @error('nails')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="accessories">@lang('admin.accessories')</label>
                            <select class="form-control @error('accessories') is-invalid @enderror" required id="accessories" name="accessories">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->accessories ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->accessories ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->accessories ==6) selected @endif value="6">6</option>
                            </select>
                            @error('accessories')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="eating">@lang('admin.eating')</label>
                            <select class="form-control @error('eating') is-invalid @enderror" required id="eating" name="eating">
                                <option value="">Choose..</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->eating ==0) selected @endif value="0">0</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->eating ==3) selected @endif value="3">3</option>
                                <option @if(isset($hygieneInspection) && $hygieneInspection->eating ==6) selected @endif value="6">6</option>
                            </select>
                            @error('eating')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="notes">@lang('admin.notes')</label>
                             <textarea name="notes" id="notes" class="form-control @error('notes') is-invalid @enderror" required>
                                @isset($hygieneInspection) {{$hygieneInspection->notes}} @endisset
                            </textarea>
                            @error('notes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="col form-group">
                            <label for="corrective_action">@lang('admin.corrective_action')</label>
                             <textarea name="corrective_action" id="corrective_action" class="form-control @error('corrective_action') is-invalid @enderror" required>@isset($hygieneInspection) {{$hygieneInspection->corrective_action}} @endisset</textarea>
                            @error('corrective_action')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-12 mt-4 text-center">
                         <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
  @endsection
