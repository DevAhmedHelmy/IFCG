<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
      </div>

      <div class="clearfix"></div>

      {{-- menu profile quick info --}}
      <div class="profile clearfix">
        <div class="profile_pic">
          <img src="images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
          <h2>@auth
              {{ auth()->user()->name }}
          @endauth</h2>
        </div>
      </div>
      {{-- /menu profile quick info --}}

      <br />

      {{-- sidebar menu --}}
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="index2.html">Settings</a></li>
                <li><a href="{{route('roles.index')}}">@lang('admin.permissions')</a></li>
              </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> @lang('admin.users') <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="form.html">@lang('admin.users') </a></li>
                <li><a href="{{ route('employees.index') }}">@lang('admin.employees')</a></li>
              </ul>
            </li>
          </ul>
        </div>
          <div class="menu_section">
          <h3>@lang('admin.info')</h3>
          <ul class="nav side-menu">
            <li><a><i class="fa fa-bug"></i> @lang('admin.Hygiene_Inspections') <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                <li><a href="{{route('hygieneInspections.index')}}">@lang('admin.Hygiene_Inspections')</a></li>
                <li><a href="{{route('hygieneInspections.report')}}"> @lang('admin.reports')</a></li>
            </li>
            {{-- <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">

                <li><a href="projects.html">Projects</a></li>
                <li><a href="project_detail.html">Project Detail</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="profile.html">Profile</a></li>
              </ul> --}}
            {{-- </li> --}}

            {{-- <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                  <li><a href="#level1_1">Level One</a>
                  <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu"><a href="level2.html">Level Two</a>
                      </li>
                      <li><a href="#level2_1">Level Two</a>
                      </li>
                      <li><a href="#level2_2">Level Two</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#level1_2">Level One</a>
                  </li>
              </ul>
            </li> --}}

          </ul>
        </div>

      </div>
      {{-- /sidebar menu --}}

      {{-- /menu footer buttons --}}
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      {{-- /menu footer buttons --}}
    </div>
  </div>
