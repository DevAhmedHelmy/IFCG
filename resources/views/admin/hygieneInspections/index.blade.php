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
    <div class="x_panel">
      <div class="x_title">
      <a href="{{route('hygieneInspections.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-sm"></i> Add New</a>
        {{-- <h2>Table design <small>Custom design</small></h2> --}}

        <div class="clearfix"></div>
      </div>

      <div class="x_content">



        <div class="table-responsive">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr class="headings">

                <th class="column-title" style="display: table-cell;">Name </th>
                <th class="column-title" style="display: table-cell;">Flu </th>
                <th class="column-title" style="display: table-cell;">Diarrhea </th>
                <th class="column-title" style="display: table-cell;">Beard </th>
                <th class="column-title" style="display: table-cell;">Uniform </th>
                <th class="column-title" style="display: table-cell;">Hairnet </th>
                <th class="column-title" style="display: table-cell;">Shoes </th>
                <th class="column-title" style="display: table-cell;">Gloves </th>
                <th class="column-title" style="display: table-cell;">Pins </th>
                <th class="column-title" style="display: table-cell;">Cleanness </th>
                <th class="column-title" style="display: table-cell;">Wounds </th>
                <th class="column-title" style="display: table-cell;">Nails </th>
                <th class="column-title" style="display: table-cell;">Accessories </th>
                <th class="column-title" style="display: table-cell;">Eating </th>
                <th class="column-title" style="display: table-cell;">Notes </th>
                <th class="column-title" style="display: table-cell;">Corrective Action </th>
                <th class="column-title" style="display: table-cell;">Date </th>
                <th class="column-title" style="display: table-cell;">Shift </th>
                <th class="column-title" style="display: table-cell;">area </th>
                <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Action</span>
                </th>
                <th class="bulk-actions" colspan="7" style="display: none;">
                  <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                </th>
              </tr>
            </thead>

            <tbody>
              <tr class="even pointer">

                <td class=" ">121000040</td>
                <td class=" ">May 23, 2014 11:47:56 PM </td>
                <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class="a-right a-right ">$7.45</td>
                <td class=" last"><a href="#">View</a>
                </td>
              </tr>
              <tr class="odd pointer">

                <td class=" ">121000040</td>
                <td class=" ">May 23, 2014 11:47:56 PM </td>
                <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class=" ">Paid</td>
                <td class=" ">John Blank L</td>
                <td class="a-right a-right ">$7.45</td>
                <td class=" last"><a href="#">View</a>
                </td>
              </tr>


            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
  @endsection
