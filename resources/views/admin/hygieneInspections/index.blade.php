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
                    <th scope="col">Name </th>
                    <th scope="col">Flu </th>
                    <th scope="col">Diarrhea </th>
                    <th scope="col">Beard </th>
                    <th scope="col">Uniform </th>
                    <th scope="col">Hairnet </th>
                    <th scope="col">Shoes </th>
                    <th scope="col">Gloves </th>
                    <th scope="col">Pins </th>
                    <th scope="col">Cleanness </th>
                    <th scope="col">Wounds </th>
                    <th scope="col">Nails </th>
                    <th scope="col">Accessories </th>
                    <th scope="col">Eating </th>
                    <th scope="col">Notes </th>
                    <th scope="col">Corrective Action </th>
                    <th scope="col">Date </th>
                    <th scope="col">Shift </th>
                    <th scope="col">area </th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($hygieneInspections as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $value->employee->name }}</td>
                        <td>{{ $value->flu }}</td>
                        <td>{{ $value->diarrhea }}</td>
                        <td>
                            <form class="delete-form" action="{{ route('hygieneInspections.destroy',$value->id) }}" method="post">
                                <a href="{{route('hygieneInspections.show',$value->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye fa-sm"></i> </a>
                                <a href="{{route('hygieneInspections.edit',$value->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit fa-sm"></i> </a>

                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('delete-form')"> <i class="fa fa-trash fa-sm"></i> </button>
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

