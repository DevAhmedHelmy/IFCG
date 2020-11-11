@extends('admin.layouts.app')

 @section('header-content')
 <div class="title_left">
    <h3>Hygiene Inspection <small>Listing Data</small></h3>
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
            <a href="{{ route('employees.create') }}" class="btn btn-info btn-sm"><i class="fa fa-plus fa-sm"></i> Add New Data</a>

        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Code</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($employees as $key => $employee)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->code }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>
                            <form class="delete-form" action="{{ route('employees.destroy',$employee->id) }}" method="post">
                                <a href="{{route('employees.show',$employee->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i> @lang('admin.view')</a>
                                <a href="{{route('employees.edit',$employee->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit fa-sm"></i> @lang('admin.edit')</a>

                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('delete-form')"> <i class="fa fa-trash fa-sm"></i> @lang('admin.delete')</button>
                            </form>
                        </td>
                    </tr>
                @endforeach



                </tbody>
              </table>
        </div>
    </div>
</div>
 </div>
  @endsection
