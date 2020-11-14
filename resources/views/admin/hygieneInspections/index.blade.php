@extends('admin.layouts.app')

 @section('header-content')
 <div class="title_left">
    <h3> @lang('admin.Hygiene_Inspection')<small>@lang('admin.Listing_Data')</small></h3>
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
            <a href="{{ route('hygieneInspections.create') }}" class="btn btn-info btn-sm mr-2"><i class="fa fa-plus fa-sm"></i>
                @lang('admin.add_new_data')</a>
            <a href="{{ route('hygieneInspections.daily') }}" class="btn btn-success btn-sm"><i class="fa-file-excel-o fa-sm"></i>
                @lang('admin.Daily_Report') </a>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">@lang('admin.name')</th>
                    <th scope="col">@lang('admin.flu')</th>
                    <th scope="col">@lang('admin.diarrhea')</th>
                    <th scope="col">@lang('admin.beard')</th>
                    <th scope="col">@lang('admin.uniform')</th>
                    <th scope="col">@lang('admin.hairnet')</th>
                    <th scope="col">@lang('admin.shoes')</th>
                    <th scope="col">@lang('admin.gloves')</th>
                    <th scope="col">@lang('admin.pins')</th>
                    <th scope="col">@lang('admin.cleanness')</th>
                    <th scope="col">@lang('admin.wounds')</th>
                    <th scope="col">@lang('admin.nails')</th>
                    <th scope="col">@lang('admin.accessories')</th>
                    <th scope="col">@lang('admin.eating')</th>
                    <th scope="col">@lang('admin.rosacea')</th>
                    <th scope="col">@lang('admin.shift')</th>
                    <th scope="col">@lang('admin.area')</th>
                    <th scope="col">@lang('admin.date')</th>
                    <th scope="col">@lang('admin.actions')</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($hygieneInspections as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $value->employee->name }}</td>
                        <td>{{ $value->flu }}</td>
                        <td>{{ $value->diarrhea }}</td>
                        <td>{{ $value->beard }}</td>
                        <td>{{ $value->uniform }}</td>
                        <td>{{ $value->hairnet }}</td>
                        <td>{{ $value->shoes }}</td>
                        <td>{{ $value->gloves }}</td>
                        <td>{{ $value->pins }}</td>
                        <td>{{ $value->cleanness }}</td>
                        <td>{{ $value->wounds }}</td>
                        <td>{{ $value->nails }}</td>
                        <td>{{ $value->accessories }}</td>
                        <td>{{ $value->eating }}</td>
                        <td>{{ $value->rosacea }}</td>
                        <td>{{ $value->shift }}</td>
                        <td>{{ $value->area }}</td>
                        <td>{{ $value->created_at }}</td>
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

