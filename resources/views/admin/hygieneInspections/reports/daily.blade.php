<table>
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
        <th scope="col">@lang('admin.notes')</th>
        <th scope="col">@lang('admin.corrective_action')</th>
        <th scope="col">@lang('admin.date')</th>

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
            <td> {{ $value->notes }}</td>
            <td> {{ $value->corrective_action }}</td>
            <td>{{ $value->created_at }}</td>

        </tr>
    @endforeach



    </tbody>
  </table>
