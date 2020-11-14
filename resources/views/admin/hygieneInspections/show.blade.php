@extends('admin.layouts.app')

 @section('header-content')
 <div class="title_left">
    <h3> @lang('admin.Hygiene_Inspection') <small>@lang('admin.show_data')</small></h3>
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
            <h5>@lang('admin.name') :: {{$hygieneInspection->employee->name}}</h5>

        </div>
        <div class="card-body">
            <div class="col-12">
                <div class="col-md-6 hidden-small">
                    <h2 class="line_30"> </h2>

                    <table class="countries_list">
                      <tbody>
                        <tr>
                            <td>@lang('admin.area')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->area}}</td>
                          </tr>
                        <tr>
                          <td>@lang('admin.shift')</td>
                          <td class="fs15 fw700 text-right">{{$hygieneInspection->shift}}</td>
                        </tr>
                        <tr>
                            <td>@lang('admin.rosacea')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->rosacea}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.flu')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->flu}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.diarrhea')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->diarrhea}}</td>
                          </tr>

                          <tr>
                            <td>@lang('admin.uniform')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->uniform}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.hairnet')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->hairnet}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.shoes')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->shoes}}</td>
                          </tr>


                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-6 hidden-small">
                    <h2 class="line_30"> </h2>

                    <table class="countries_list">
                      <tbody>


                          <tr>
                            <td>@lang('admin.gloves')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->gloves}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.pins')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->pins}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.mask')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->mask}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.wounds')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->wounds}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.nails')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->nails}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.accessories')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->accessories}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.eating')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->eating}}</td>
                          </tr>
                          <tr>
                            <td>@lang('admin.percentage')</td>
                            <td class="fs15 fw700 text-right">{{$hygieneInspection->percentage}}</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>

            </div>

            <div class="col-md-12 mt-5">
                <div class="col-md-6">
                    <p>@lang('admin.notes')</p>
                    <div>{{$hygieneInspection->notes}}</div>
                </div>
                <div class="col-md-6">
                  <p>@lang('admin.corrective_action')</p>
                  <div>{{$hygieneInspection->corrective_action}}</div>
              </div>
            </div>
        </div>
    </div>
</div>
 </div>
  @endsection
