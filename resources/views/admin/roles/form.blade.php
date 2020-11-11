@extends('admin.layouts.app')

 @section('header-content')
 <div class="title_left">
    <h3>Projects <small>Listing design</small></h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 form-group pull-right top_search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Go!</button>
        </span>
      </div>
    </div>
  </div>
 @endsection
@section('content')
 <div class="row">    
 
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2><i class="fa fa-align-left"></i> Permssions / @if(!$role->id) @lang('permission.Create_New_Role') @else @lang('permission.update_Role') @endif</h2>
         
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <!-- start accordion -->
        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
        @if(!$role->id)
            <form id="demo-form" class="form-horizontal" method="POST" action="{{ route('roles.store') }}">
        @else
            <form id="demo-form" class="form-horizontal" method="POST" action="{{ route('roles.update',$role->id) }}">
                @method('patch')
                <input type="hidden" name="id" value="{{ $role->id }}">
        @endif
                @csrf
                 
                <div class="form-group">
                    <label for="name">@lang('admin.name')</label>
      
                 
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name',$role->name)}}" placeholder="@lang('admin.name')" required>
      
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    
      
                  </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <strong> @lang('permission.permission'):</strong>
    
                        <div class="form-check">
                            <br/>
                            @foreach($permission as $value)
    
                                @if(count($rolePermissions) > 0 && array_key_exists($value->id, $rolePermissions))
                                    <input type="checkbox" @if($rolePermissions[$value->id]) checked @endif name="permission[]" value="{{ $value->id }}" class="form-check-input" id="{{ $value->name }}">
                                    <label class="form-check-label" for="{{ $value->name }}">@lang('permission.'.$value->name)</label>
                                <br/>
                                @else
                                    <input type="checkbox" name="permission[]" value="{{ $value->id }}" class="form-check-input" id="{{ $value->name }}">
                                    <label class="form-check-label" for="{{ $value->name }}">@lang('permission.'.$value->name)</label>
                                <br/>
                                @endif
                            @endforeach
    
    
                        </div>
                        @error('permission')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
    
                </div>
                <div class="clearfix"></div>
                <br/>
                <div>
                    <button type="submit" class="btn btn-info">@lang('admin.save')</button>
                </div>
                

            </form>
        </div>
        <!-- end of accordion -->


      </div>
    </div>
  </div>
</div>
@endsection
