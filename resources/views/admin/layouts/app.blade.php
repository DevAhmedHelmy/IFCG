<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.layouts._header')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('admin.layouts._sidebar')

        {{-- top navigation --}}
        @include('admin.layouts._topnav')
        {{-- /top navigation --}}

        {{-- page content --}}
        <div class="right_col" role="main">
            <div class="page-title">
                @yield('header-content')
              </div>
              <div class="clearfix"></div>
            @yield('content')
        </div>
        {{-- /page content --}}

        {{-- footer content --}}
        @include('admin.layouts._footer')
        {{-- /footer content --}}
      </div>
    </div>

    
    @include('admin.layouts._scripts')
  </body>
</html>
